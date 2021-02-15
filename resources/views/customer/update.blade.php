@extends('customer.layouts.app')


@section('content')
<div class=" row" style="margin-top: 100px">
    <div class="col-md-2 ">
        @component('customer.layouts.menus.sidebar')

        @endcomponent
    </div>
    <div class=" col-md-8 col-sm-12 main_menu_side hidden-print main_menu">
        <div class="mb-5 col-12 col-sm-12 py-lg-5">
            <div class="position-relative">
                <div class="container shadow-lg card h-100">
                    <div class="">
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <div class="">
                                    <div class="mt-5 text-center h2 ">Update Your Profile</div>
                                    @if($message= Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                    @endif
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('update.user', '$id') }}">
                                            @csrf
                                            @method('POST')
                                            <div class="form-group row">
                                                <label for="username" class=" col-form-label text-md-right"></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') ?? Auth::user()->username}}" required autofocus>
                                                    @if ($errors->has('username'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('username') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                                                <div class="col-md-12 col-sm-12">
                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                                    @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                        <div class="form-group row">
                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right"></label>

                                                <div class="col-md-12 col-sm-12">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="first_name" class="col-md-4 col-form-label text-md-right"></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" required autofocus>
                                                    @if ($errors->has('first_name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('first_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="last_name" class="col-md-4 col-form-label text-md-right"></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" required autofocus>
                                                    @if ($errors->has('last_name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('last_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="nickname" class="col-md-4 col-form-label text-md-right"></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="nickname" type="text" class="form-control{{ $errors->has('nickname') ? ' is-invalid' : '' }}" name="nickname" value="{{ old('nickname') }}" placeholder="Nickname" required>

                                                    @if ($errors->has('nickname'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('nickname') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="address" class="col-md-4 col-form-label text-md-right"></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" placeholder="Country Address" required>

                                                    @if ($errors->has('address'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('address') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="number" class="col-md-4 col-form-label text-md-right"></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="number" type="number" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" value="{{ old('number') }}" placeholder="Mobile Number" required>

                                                    @if ($errors->has('number'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('number') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="country" class="col-md-4 col-form-label text-md-right" ></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" placeholder="Country" required>

                                                    @if ($errors->has('country'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('country') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="gender" class="col-md-4 col-form-label text-md-right"></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <p class="bold">GENDER</p>
                                                    <select name="gender" id="" class="form-control" >
                                                        <option value="" >select option</option>
                                                        <option value="male" >Male</option>
                                                        <option value="female" >Female</option>
                                                        <option value="other" >Other</option>
                                                    </select>
                                                    @if ($errors->has('gender'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('gender') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="date" class="col-md-4 col-form-label text-md-right"></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ old('date') }}" placeholder="Date of Birth" required>

                                                    @if ($errors->has('date'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('date') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="bank" class=" col-form-label text-md-right" placeholder="Country"></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="bank" type="text" class="form-control{{ $errors->has('bank') ? ' is-invalid' : '' }}" name="bank" value="{{ old('bank') }}" placeholder="Bank Name" required>

                                                    @if ($errors->has('bank'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('bank') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="number" class="col-md-4 col-form-label text-md-right"></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="number" type="number" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" name="acc_number" value="{{ old('number') }}" placeholder="10 Digit Account Number" required>

                                                    @if ($errors->has('number'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('number') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="mb-3 form-group row">
                                                <div class="mt-2 col-md-12 col-sm-12">
                                                    <button type="submit" class="col-md-12 btn btn-info">
                                                        Save changes
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
