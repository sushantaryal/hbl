<?php

namespace Bickyraj\Hbl\Controllers;

use App\Http\Controllers\Controller;
use Bickyraj\Hbl\Api\Payment;
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class HblController extends Controller
{
    public function index()
    {
        return view('bickyraj.hbl.index');
    }

    public function paymentRequest(Request $request)
    {
        try {
            //ExecuteFormJose($mid,$api_key,$curr,$amt,$threeD,$success_url,$failed_url,$cancel_url,$backend_url): string
            $payment = new Payment();
            //echo "Payment jose request \n ";
            $joseResponse = $payment->ExecuteFormJose($_POST['merchant_id'],$_POST['api_key'],$_POST['input_currency'],$_POST['input_amount'],$_POST['input_3d'],$_POST['success_url'],$_POST['fail_url'],$_POST['cancel_url'],$_POST['backend_url']);
            //echo "Response data : <pre>\n";
            //var_dump(json_decode($joseResponse));
            $response_obj = json_decode($joseResponse);
            //echo $response_obj->response->Data->paymentPage->paymentPageURL;
            // header("Location: ".$response_obj->response->Data->paymentPage->paymentPageURL);
            // exit();
            return redirect()->to($response_obj->response->Data->paymentPage->paymentPageURL);
        } catch (GuzzleException $e) {
            echo '\n Message: ' . $e->getMessage();
            echo '\n Trace: ' . $e->getTraceAsString();
        } catch (Exception $e) {
            echo '\n Message: ' . $e->getMessage();
            echo '\n Trace: ' . $e->getTraceAsString();
        }
    }

    public function paymentSuccess(Request $request)
    {
        dd($request->all());
    }

    public function paymentCanceled(Request $request)
    {
        return view('bickyraj.hbl.canceled');
    }

    public function paymentFailed(Request $request)
    {
        return view('bickyraj.hbl.failed');
    }
}
