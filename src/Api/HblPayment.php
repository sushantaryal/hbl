<?php

namespace Bickyraj\Hbl\Api;

use Bickyraj\Hbl\Api\Interfaces\IHblPayment;

class HblPayment implements IHblPayment
{

    public static function pay(PaymentObject $paymentObject)
    {
        $payment = new Payment();
        $joseResponse = $payment->ExecuteFormJose($paymentObject->toArray());
        //echo "Response data : <pre>\n";
        //var_dump(json_decode($joseResponse));
        $response_obj = json_decode($joseResponse);
        //echo $response_obj->response->Data->paymentPage->paymentPageURL;
        header("Location: " . $response_obj->response->Data->paymentPage->paymentPageURL);
        exit();
    }
}
