<?php

namespace Common\Billing;

use Common\Billing\Models\Product;
use Common\Core\BaseController;
use Illuminate\Http\Request;
use RocketGate\Sdk\GatewayRequest;
use RocketGate\Sdk\GatewayResponse;
use RocketGate\Sdk\GatewayService;
use Illuminate\Support\Facades\DB;
use Auth;

class PricingPageController extends BaseController
{
    public function __invoke()
    {
        $data = [
            'loader' => 'PaymentMethodPanel',
            'products' => Product::with(['permissions', 'prices'])
                ->limit(15)
                ->orderBy('position', 'asc')
                ->get(),
        ];

        return $this->renderClientOrApi([
            'data' => $data,
        ]);
    }

    public function acceptBillingMethod(Request $req){
        $dateString = $req->expire_date;
        $dateArray = explode("/", $dateString);

        $month = $dateArray[0];
        $year = $dateArray[1];

        $time = time();
        $cust_id = $time . '.blitzlocker';
        $inv_id = $time .'.blitzlocker';

        $merchant_id = "1715355409";
//        $merchant_password = "rKr4srtXbTgkwkX3";
        $merchant_password = "SZHkXgXR6HakP95t";

        //
        //      Allocate the objects we need for the test.
        //
        $service  = new GatewayService();
        $request  = new GatewayRequest();
        $response = new GatewayResponse();

        $request->Set(GatewayRequest::MERCHANT_ID(), $merchant_id);
        $request->Set(GatewayRequest::MERCHANT_PASSWORD(), $merchant_password);

        $time = time();
        $request->Set(GatewayRequest::MERCHANT_CUSTOMER_ID(), $time . '.blitzlocker');
        $request->Set(GatewayRequest::MERCHANT_INVOICE_ID(), $time . '.blitzlocker');

        $request->Set(GatewayRequest::AMOUNT(), '1.00');
        $request->Set(GatewayRequest::CURRENCY(), 'USD');
        $request->Set(GatewayRequest::CARDNO(), $req->card_number);
        $request->Set(GatewayRequest::EXPIRE_MONTH(), $month);
        $request->Set(GatewayRequest::EXPIRE_YEAR(), $year);
        $request->Set(GatewayRequest::CVV2(), $req->cvv);

        $request->Set(GatewayRequest::CUSTOMER_FIRSTNAME(), $req->first_name);
        $request->Set(GatewayRequest::CUSTOMER_LASTNAME(), $req->last_name);
        $request->Set(GatewayRequest::EMAIL(), $req->email);
        $request->Set(GatewayRequest::IPADDRESS(), '147.182.205.100');

        $request->Set(GatewayRequest::BILLING_ADDRESS(), '200 biscayne boulevard wa');
        $request->Set(GatewayRequest::BILLING_CITY(), '786-6971147');
        $request->Set(GatewayRequest::BILLING_STATE(), 'FL');
        $request->Set(GatewayRequest::BILLING_ZIPCODE(), '331311');
        $request->Set(GatewayRequest::BILLING_COUNTRY(), 'US');

        $request->Set(GatewayRequest::SCRUB(), 'IGNORE');
        $request->Set(GatewayRequest::CVV2_CHECK(), 'IGNORE');
        $request->Set(GatewayRequest::AVS_CHECK(), 'IGNORE');
        $service->SetTestMode(TRUE);

        if ($service->performAuthOnly($request, $response)) {
            DB::table('users')
            ->where('email', '=', $req->email)
            ->update(['card_last_four' => $req->card_number, 'card_expires' => $month.'/'.$year, 'card_brand' => $req->cvv]);
            print "Auth-Only succeeded\n";
            print "Response Code: " .  $response->Get(GatewayResponse::RESPONSE_CODE()) . "\n";
            print "Reason Code: " .  $response->Get(GatewayResponse::REASON_CODE()) . "\n";
            print "Auth No: " . $response->Get(GatewayResponse::AUTH_NO()) . "\n";
            print "AVS: " . $response->Get(GatewayResponse::AVS_RESPONSE()) . "\n";
            print "CVV2: " . $response->Get(GatewayResponse::CVV2_CODE()) . "\n";
            print "GUID: " . $response->Get(GatewayResponse::TRANSACT_ID()) . "\n";
            print "Transaction time: " . $response->Get(GatewayResponse::TRANSACTION_TIME()) . "\n";
            print "Account: " .
              $response->Get(GatewayResponse::MERCHANT_ACCOUNT()) . "\n";
            print "Scrub: " .
              $response->Get(GatewayResponse::SCRUB_RESULTS()) . "\n";
        } else {
            print "Auth-Only failed\n";
            print "GUID: " . $response->Get(GatewayResponse::TRANSACT_ID()) . "\n";
            print "Transaction time: " . $response->Get(GatewayResponse::TRANSACTION_TIME()) . "\n";
            print "Response Code: " .
              $response->Get(GatewayResponse::RESPONSE_CODE()) . "\n";
            print "Reason Code: " .
              $response->Get(GatewayResponse::REASON_CODE()) . "\n";
            print "Exception: " .
              $response->Get(GatewayResponse::EXCEPTION()) . "\n";
            print "Scrub: " .
              $response->Get(GatewayResponse::SCRUB_RESULTS()) . "\n";
        }
    }
}