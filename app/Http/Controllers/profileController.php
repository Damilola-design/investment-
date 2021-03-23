<?php

namespace App\Http\Controllers;

use App\enquiries;
use App\Transaction_histories;
use App\Mail\ContactMail;
use App\profile;
use App\Providers\profile as ProvidersProfile;
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

        $data = new User();

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
        //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function dashboard()
    {


        if (Auth::user()->role === 'admin') {
            return view('admin.index');
        }

        $user_id = Auth::user()->id;
        $profile = DB::table('users')
            ->join('profiles', 'users.id', '=', 'profiles.user_id')
            ->select('users.*', 'profiles.*')
            ->where(['profiles.user_id' => $user_id])
            ->first();

        return view('customer.index', ['profile' => $profile]);
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

        $enquiry = new enquiries();

        $enquiry->email = $request->email;
        $enquiry->subject = $request->subject;
        $enquiry->message = $request->message;

        $enquiry->save();

        if ($enquiry->save() == true) {

            //define your admin email
            $admin_email = 'admin@primrosepathcapital.org';

            //call Mailable
            Mail::to($admin_email)->send(new ContactMail($data));
            return redirect("/customer-care")->with('success', 'Your Message was successfully send!!!');
        } else
            return redirect("/customer-care")->with('Error', 'Your Message was not send!!!');
    }

    public function edit()
    {
        return view('customer.update');
    }

    public function mypay()
    {
        return view('customer.pay');
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

        $imageName = (time()) . '.' . (request()->valid_id)->getClientOriginalExtension();
        $path = "uploads";
        $location = $path . '/' . $imageName;
        Storage::disk('public')->put($location,  File::get(request()->valid_id));

        $imageName1 = (time() + 1) . '.' . (request()->passport)->getClientOriginalExtension();
        $path = "uploads";
        $location1 = $path . '/' . $imageName1;
        Storage::disk('public')->put($location1,  File::get(request()->passport));


        //get current user ID
        $authId = Auth::user()->id;

        //find current user from profile table
        //  $gold_invest = profile::where('user_id','=',$authId);

        //  dd($gold_invest);

        //if current user is found ,update the database

        // $authId = Auth::user()->id;

        //find current user from profile table
        $gold_invest = new profile();

        $gold_invest->user_id = $authId;
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

        //dd($gold_invest);
        $gold_invest->save();
        if ($gold_invest->save() == true) {

            return redirect("/mypay");
        } else
            return redirect("/customer-care")->with('Error', 'Your Message was not send!!!');
    }

    public function save(Request $request)
    {
        // get user data
        $user = User::where('email', request()->email)->first();

        // return all request entry
        return request()->all();

        $trans = new Transaction_histories;

        //  $trans = $request->all();
        // $trans->message = $request->message;
        // $trans->trxref = $request->trxref;
        // $trans->status = $request->status;
        // $trans->transaction = $request->transaction;
        // $trans->email = $request->email;
        // $trans->firstname = $request->firstname;
        // $trans->lastname = $request->lastname;
        //  dd($trans);
        $trans->save();


        return response()->json(['result' => $trans]);
    }

    public function update(Request $request, User $id)
    {


        $this->validate($request, [
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
