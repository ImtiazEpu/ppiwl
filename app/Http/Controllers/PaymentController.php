<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

class PaymentController extends Controller
{
    public function execute()
    {
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'Ae8UEjOcULQkQfzoemxaKhf0xvyDvFWf4Pl9HHez_keyKXBwKIAukvpGlql9Jdf3gaGhzpc-UWlh5I2Q',
                'EN5IlD9QF7tu7ZHLeC3RHrOTDq7uM2SCY9DA_96wl4pFU8-ttyC-WJe1xi_0w-ZLEG2oLivc0IQvXSSz'
            )
        );
        $paymentId = request('paymentId');
        $payment = Payment::get($paymentId, $apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId(\request('PayerID'));

        $transaction = new Transaction();
        $amount = new Amount();
        $details = new Details();

        $details->setShipping(2.2)
            ->setTax(1.3)
            ->setSubtotal(17.50);

        $amount->setCurrency('USD');
        $amount->setTotal(21);
        $amount->setDetails($details);
        $transaction->setAmount($amount);

        $execution->addTransaction($transaction);
        $result = $payment->execute($execution, $apiContext);

        return $result;
    }
}
