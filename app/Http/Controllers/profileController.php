<?php

namespace App\Http\Controllers;

use App\enquiries;
use App\Mail\ContactMail;
use App\profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class profileController extends Controller
{
    public function register(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'password_confirmation' => 'required| same:password',
            'first_name' => ['required', 'string', 'min:6'],
            'last_name' => ['required', 'string', 'min:6'],
            'gender' => 'required',
            'termsCheckbox' => 'required',
            ]);

            $data = New User();

            $data->username = $request->username;
            $data->email = $request->email;
            $data->password = $request->password;
            $data->first_name = $request->first_name;
            $data->last_name = $request->last_name;
            $data->gender = $request->gender;
            $data->termsCheckbox = $request->termsCheckbox;

            $data->save();
           Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            // return response()->json(['message'=>'successful'],200);
             return redirect("/dashboard");
    }
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function dashboard()
    {
        return view('customer.index');

    }

    public function profile()
    {
        return view('customer.investment');
    }

    public function premium()
    {
        return view('customer.premium');
    }

    public function message()
    {
        return view('customer.care');
    }


    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
            ]);

            $enquiry = New enquiries();

            $enquiry->email = $request->email;
            $enquiry->subject = $request->subject;
            $enquiry->message = $request->message;

            $enquiry->save();

            if( $enquiry->save()==true){

                //define your admin email
                $admin_email = 'admin@primrosepathcapital.org';

                //call Mailable
                Mail::to($admin_email)->send(new ContactMail($data));
                return redirect("/customer-care")->with('success', 'Your Message was successfully send!!!');
            }else
            return redirect("/customer-care")->with('Error', 'Your Message was not send!!!');
    }

    public function edit()
    {
        return view('customer.update');
    }

    public function gold()
    {
        return view('customer.gold');
    }

    public function pay(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'email' => '',
            'amount' => 'required',
            'plan' => 'required',
            'Period' => 'required',
            'country' => 'required',
            'address' => 'required',
            'number' => 'required',
            'valid_id' => 'required',
            'passport' => 'required',
            'status' => '',
            'deformity' => '',
            'details' => '',
            'ill' => '',
            'physician' => '',
            'bank_name' => 'required',
            'acc_name' => 'required',
            'acc_number' => 'required',
            'interest_payment' => 'required',
            'refer_name' => '',
            'cid_number' => '',
            'refer_number' => '',
            'terms' => 'required'
            ]);

            $imageName = (time()).'.'.(request()->valid_id)->getClientOriginalExtension();
            $path = "uploads";
            $location = $path.'/'.$imageName;
            Storage::disk('public')->put($location,  File::get(request()->valid_id));

            $imageName1 = (time()+1).'.'.(request()->passport)->getClientOriginalExtension();
            $path = "uploads";
            $location1 = $path.'/'.$imageName1;
            Storage::disk('public')->put($location1,  File::get(request()->passport));

            $gold_invest = New profile();

            $gold_invest->full_name = $request->full_name;
            $gold_invest->email = $request->email;
            $gold_invest->amount = $request->amount;
            $gold_invest->plan = $request->plan;
            $gold_invest->Period = $request->Period;
            $gold_invest->country = $request->country;
            $gold_invest->address = $request->address;
            $gold_invest->email = $request->email;
            $gold_invest->number = $request->number;
            $gold_invest->valid_id = $location;
            $gold_invest->passport = $location1;
            $gold_invest->status = $request->status;
            $gold_invest->deformity = $request->deformity;
            $gold_invest->details = $request->details;
            $gold_invest->ill = $request->ill;
            $gold_invest->physician = $request->physician;
            $gold_invest->bank_name = $request->bank_name;
            $gold_invest->acc_name = $request->acc_name;
            $gold_invest->acc_number = $request->acc_number;
            $gold_invest->interest_payment = $request->interest_payment;
            $gold_invest->refer_name = $request->refer_name;
            $gold_invest->cid_number = $request->cid_number;
            $gold_invest->cid_number = $request->cid_number;
            $gold_invest->refer_number = $request->refer_number;
            $gold_invest->terms = $request->terms;
            $gold_invest->save();

            if( $gold_invest->save()==true){

                //define your admin email
                // $admin_email = 'admin@primrosepathcapital.org';

                // //call Mailable
                // Mail::to($admin_email)->send(new ContactMail($data));
                return redirect("/pay");
            }else
            return redirect("/customer-care")->with('Error', 'Your Message was not send!!!');
    }

   public function update(Request $request, User $id)
     {


        $this->validate($request,[
            'username' => 'required|min:6',
           'password' => 'required|min:6',
           'password_confirmation' => 'required| same:password',
            'first_name' => 'required',
            'last_name' => 'required',
            'nickname' => 'required',
            'address' => 'required',
            'number' => 'required',
            'country' => 'required',
            'gender' => 'required',
            'date' => 'required',
            'bank' => 'required',
            'acc_number' => 'required',
        ]);

        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update([
                'username' => $request->username,
               // 'email' => $request->email,
                'password' => Hash::make($request->password),
                'last_name' => $request->last_name,
                'first_name' => $request->first_name,
                'nickname' => $request->nickname,
                'address' =>  $request->address,
                'number' => $request->number,
                'country' => $request->country,
                'gender' => $request->gender,
                'date' => $request->date,
                'bank' => $request->bank,
                'acc_number' => $request->acc_number,
            ]);

     return redirect("/edit-user")->with('success', 'User has been updated!!');
    }

    public function logout()
    {
        $this->middleware('guest')->except('logout');
    }

}
