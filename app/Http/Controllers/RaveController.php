<?php

namespace App\Http\Controllers;
use App\TransactionHistory;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Rave;


class RaveController extends Controller
{
    /**
* Initialize Rave payment process
* @return void
*/

    public function initialize() {

        request()->validate([
            'phone' => 'sometimes|required|min:11|starts_with:0',
            'category' => 'sometimes|required|string',
            'product_id' => 'sometimes|required|integer',
            'amount' => 'sometimes|required|integer',
            ], ['phone.starts_with' => ' :attribute number must begin with 0. e.g 070123456789', 'amount.integer' => ' :attribute number must be a number']);

            $prefix = config()->get('rave.prefix');
            $transactionPrefix = $prefix . '_';
            request()->request->add(['user_id' => auth()->user()->id]);
            request()->request->add(['ref' => uniqid($transactionPrefix)]);

            TransactionHistory::create(request()->all());

            Rave::initialize(route('callback'));
    }

    public function webhook(){
        $data = Rave::receiveWebhook();
        $txref = $data['txRef'];
        if ($data['status'] == 'successful') {
        $transaction = TransactionHistory::where('ref', $txref)- >first();
        $user = User::whereId($transaction->user_id)->first();
        //give your user value here
        $transaction->update([
        'flwref' => $data['flwRef'],
        'type' => $data['event.type'],
        ]);
        }
        }


    public function callback()
        {
            $res_json = json_decode(request()->request->get('resp'));
            $txref = $res_json->data->data->txRef;
            $data = Rave::verifyTransaction($txref);
            $chargeResponsecode = $data->data->chargecode;
            $transaction = TransactionHistory::where('ref', $txref)->first();
            if (($chargeResponsecode == "00" || $chargeResponsecode == "0")) {
            $user = User::whereId($transaction->user_id)->first();
            $referred_by = '';
            $transaction->update([
            'status' => 'paid',
            ]);
            return redirect()->route('home')->withSuccess('Wallet top-up successful.');
            } else {
            return redirect()->route('home')->withErrors(['Something went wrong.']);
            }
        }

}
