<?php

namespace App\Http\Controllers;

use Common\Billing\Models\Product;
use Common\Core\BaseController;

class PricingController extends BaseController
{
    public function __invoke()
    {
        return $this->renderClientOrApi([
            'pageName' => 'pricing',
            'data' => [
            ],
        ]);
    }
}
