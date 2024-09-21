<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

use Carbon\Carbon;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class RazorpayController extends Controller
{
    public function createPayment(Request $request)
    {
       $validator = Validator::make($request->all(), [
            'payer_name' => 'required',
            'payer_address' => 'required',
            'payer_phone' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $payment = new Payment();

        $payment->payer_name = $request->input('payer_name');
        $payment->payer_address = $request->input('payer_address');
        $payment->payer_phone = $request->input('payer_phone');
        $payment->save();
        return view('Users.Member.razorpayView')->with(['payerAdded', 'Payer Added Successfully']);
    }
}
