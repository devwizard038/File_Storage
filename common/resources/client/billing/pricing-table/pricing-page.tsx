import {useProducts} from './use-products';
import {Button} from '../../ui/buttons/button';
import {Trans} from '../../i18n/trans';
import {ForumIcon} from '../../icons/material/Forum';
import {Navbar} from '../../ui/navigation/navbar/navbar';
import {Link} from 'react-router-dom';
import {Footer} from '../../ui/footer/footer';
import {Fragment, useEffect, useId, useState} from 'react';
import {BillingCycleRadio} from './billing-cycle-radio';
import {StaticPageTitle} from '../../seo/static-page-title';
import {FormTextField} from '@common/ui/forms/input-field/text-field/text-field';
import {Form} from '@common/ui/forms/form';
import {useForm} from 'react-hook-form';
import {User} from '@common/auth/user';
import { useUpdateBillingMethod } from './pricing-details';
import { Card } from './billing';
import { useAuth } from '@common/auth/use-auth';

interface Props {
  user: User;
}

function CardPayment(){
  const form = useForm<Card>({
    defaultValues: {
      email: '',
      first_name: '',
      last_name: '',
      card_number: '',
      expire_date: '',
      cvv: '',
    },
  });
  const formId = useId();
  const updateDetails = useUpdateBillingMethod(form);
  const {user} = useAuth();

  return (
    <Form
      form={form}
      className="flex flex-col flex-col-reverse md:flex-row items-center gap-40 md:gap-80"
      onSubmit={newDetails => {
        newDetails.email = user?.email;
        updateDetails.mutate(newDetails);
      }}
      id={formId}
    >
      <div className="flex-auto w-full justify-between">
        <img src='images/cardtype.png' ></img>
        <FormTextField
          className="mb-24 mt-24"
          name="first_name"
          label={<Trans message="First name" />}
        />
        <FormTextField
          className="mb-24"
          name="last_name"
          label={<Trans message="Last name" />}
        />
        <FormTextField
          className="mb-24"
          name="card_number"
          label={<Trans message="Card Number" />}
        />
        <FormTextField
          className="mb-24"
          placeholder='MM / YYYY'
          name="expire_date"
          label={<Trans message="Expiry Date" />}
        />
        <FormTextField
          className="mb-24"
          name="cvv"
          label={<Trans message="CVV" />}
        />
        <Button
          type="submit"
          variant="flat"
          color="primary"
        >
          <Trans message="Send" />
        </Button>
      </div>
    </Form>
  )
}

export function PricingPage() {
  const query = useProducts('pricingPage');
  const [selectedCycle, setSelectedCycle] =
    useState('paypal');

  useEffect(() => {
    console.log("OKOK");
  }, [selectedCycle]);

  return (
    <Fragment>
      <StaticPageTitle>
        <Trans message="Pricing" />
      </StaticPageTitle>
      <Navbar
        color="bg"
        darkModeColor="transparent"
        border="border-b"
        menuPosition="pricing-table-page"
      />
      <div className="container mx-auto px-24">
        <h1 className="mb-30 mt-30 text-center text-3xl font-normal md:mt-60 md:text-4xl md:font-medium">
          <Trans message="Choose the right plan for you" />
        </h1>

        <CardPayment />

        <ContactSection />
      </div>
      <Footer className="container mx-auto flex-shrink-0 px-24" />
    </Fragment>
  );
}

function ContactSection() {
  return (
    <div className="my-20 p-24 text-center md:my-80">
      <ForumIcon size="xl" className="text-muted" />
      <div className="my-8 md:text-lg">
        <Trans message="Do you have any questions about PRO accounts?" />
      </div>
      <div className="mb-24 mt-20 text-sm md:mt-0 md:text-base">
        <Trans message="Our support team will be happy to assist you." />
      </div>
      <Button variant="flat" color="primary" elementType={Link} to="/contact">
        <Trans message="Contact us" />
      </Button>
    </div>
  );
}