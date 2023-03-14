<?php

namespace Bickyraj\Hbl\Controllers;

use App\Http\Controllers\Controller;
use App\Invoice;
use Bickyraj\Hbl\Api\Payment;
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
            $joseResponse = $payment->ExecuteFormJose($_POST['merchant_id'],$_POST['api_key'],$_POST['input_currency'],$_POST['input_amount'],$_POST['input_3d'],$_POST['success_url'],$_POST['fail_url'],$_POST['cancel_url'],$_POST['backend_url'], 987654);
            //echo "Response data : <pre>\n";
            //var_dump(json_decode($joseResponse));
            $response_obj = json_decode($joseResponse);
            //echo $response_obj->response->Data->paymentPage->paymentPageURL;
            header("Location: ".$response_obj->response->Data->paymentPage->paymentPageURL);
            exit();
            // return redirect()->to($response_obj->response->Data->paymentPage->paymentPageURL);
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
        $invoice = Invoice::where('ref_id', $request->orderNo)->first();
        $invoice->status = Invoice::PAID;
        $invoice->save();
        Session::flash('success_message', 'Payment successfull.');
        return redirect()->route('home');
    }

    public function paymentCanceled(Request $request)
    {
        $invoice = Invoice::where('ref_id', $request->orderNo)->first();
        $invoice->status = Invoice::CANCELED;
        $invoice->save();
        Session::flash('error_message', 'Payment Canceled. Please try again.');
        return redirect()->route('home');
    }

    public function paymentFailed(Request $request)
    {
        // update invoice data
        $invoice = Invoice::where('ref_id', $request->orderNo)->first();
        $invoice->status = Invoice::FAILED;
        $invoice->save();
        Session::flash('error_message', 'Payment failed. Please try again.');
        return redirect()->route('home');
    }
}
