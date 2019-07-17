<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return \request('paymentId');
    }
}
