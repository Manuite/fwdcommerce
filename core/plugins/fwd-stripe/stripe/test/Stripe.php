<?php

function authorizeFromEnv()
{
  $apiKey = getenv('STRIPE_API_KEY');
  if (!$apiKey)
    throw new Stripe_Error('You need to set STRIPE_API_KEY');
  Stripe::setApiKey($apiKey);
}

require_once('simpletest/autorun.php');
require_once(dirname(__FILE__) . '/../lib/Stripe.php');

require_once(dirname(__FILE__) . '/Stripe/ApiRequestorTest.php');
require_once(dirname(__FILE__) . '/Stripe/AuthenticationErrorTest.php');
require_once(dirname(__FILE__) . '/Stripe/CardErrorTest.php');
require_once(dirname(__FILE__) . '/Stripe/ChargeTest.php');
require_once(dirname(__FILE__) . '/Stripe/CustomerTest.php');
require_once(dirname(__FILE__) . '/Stripe/Error.php');
require_once(dirname(__FILE__) . '/Stripe/InvalidRequestErrorTest.php');
require_once(dirname(__FILE__) . '/Stripe/InvoiceTest.php');
require_once(dirname(__FILE__) . '/Stripe/ObjectTest.php');
require_once(dirname(__FILE__) . '/Stripe/Token.php');
require_once(dirname(__FILE__) . '/Stripe/UtilTest.php');
