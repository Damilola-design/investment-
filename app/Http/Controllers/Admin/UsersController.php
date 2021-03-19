<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\profile;

class UsersController extends Controller
{
    //

    public function index(){

        $users = User::all();

        return view('admin.users', ['users' => $users]);
    }

    public function dashboard(){
        return view('admin.index');
    }

    public function premium(){
        $users = User::all();

        return view('admin.premium', ['users' => $users]);
    }

    public function getUser(Request $request, $id){
        $user = User::findOrFail($id);

        return view('admin.user', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|min:6',
            'first_name' => 'required',
            'first_name' => 'required',
            'email' => 'required|unique:users|email',
            'role' => 'required',
            'password' => 'required|same:confirm_password',
            'confirm_password' => 'required',
        ]);

        $user_password = Hash::make($request->password);

        $user = new User;
        $user->username = $request->username;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = $user_password;

        $user->save();

        return redirect('admin/users')->with('success', 'Successfully Added a User');
    }
    public function add(Request $request)
    {
        $request->validate([
            'username' => 'required|min:6',
            'first_name' => 'required',
            'first_name' => 'required',
            'email' => 'required|unique:users|email',
            'role' => 'required',
            'password' => 'required|same:confirm_password',
            'confirm_password' => 'required',
        ]);

        $user_password = Hash::make($request->password);

        $user = new User;
        $user->username = $request->username;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = $user_password;

        $user->save();

        return redirect('admin/users')->with('success', 'Successfully Added a User');
    }

    public function getPremium(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'email' => '',
            'amount' => 'required',
            'plan' => 'required',
            'Period' => 'required',
            'number' => 'required',
            'valid_id' => 'required',
            'passport' => 'required',
            'bank_name' => 'required',
            'acc_name' => 'required',
            'acc_number' => 'required',
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
            $gold_invest->number = $request->number;
            $gold_invest->valid_id = $location;
            $gold_invest->passport = $location1;
            $gold_invest->bank_name = $request->bank_name;
            $gold_invest->acc_name = $request->acc_name;
            $gold_invest->acc_number = $request->acc_number;
            $gold_invest->save();
            dd($gold_invest);

            return redirect("/admin/dashboard")->with('success', 'User Successfully Updated');
    }
}
