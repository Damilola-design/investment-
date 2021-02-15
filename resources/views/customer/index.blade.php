@extends('customer.layouts.app')



@section('content')
    <div class=" row" style="margin-top: 100px">
        <div class="col-md-2 ">
            @component('customer.layouts.menus.sidebar')

            @endcomponent
        </div>
        <div class="col-md-8 col-sm-12 main_menu_side hidden-print main_menu">
            <div class="mb-5 col-12 col-sm-12 py-lg-5">
                <div class="position-relative">
                    <div class="container shadow-lg card h-100">
                        <!-- Header -->
                            <div class="border-0 card-header">
                                <span class="mb-0 d-block h3">Hi,  {{ Auth::user()->username }}</span>
                            </div>
                            <div class="card">
                                <div class="col-md-10">
                                    {{-- LeaderBoard and HUD --}}
                                    <div class="pt-5 row">
                                        <div class="col-lg-6 col-md-8 col-sm-12">
                                        <div class="card">
                                            <div class="card-header text-dark bold">Current Balance</div>
                                            <div class="card-body">
                                                <h4 class="text-center text-success h1">#0.00</h4>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="">
                                <div class="p-1 mt-5 mb-5 row">
                                    <div class="col-lg-6 col-md-8 col-sm-12">
                                    <div class="border rounded shadow card-body">
                                        <p class="text">Your Active Subscriptions:</p>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-5 mb-3 text-white rounded-3 card bg-info" style="max-width: 70rem;">
                                <div class="card-body">
                                <p class="text-justify ">Welcome to your personal office, showing below is your registration e-mail address which landvest will use to process any of your transactions and subscriptions, your profile can be updated anytime from the account settings section, please contact us for any enquires or complains, thank you.</p>
                                </div>
                            </div>
                        <div>
                            <p class="text-info">Your Email: <span>{{ Auth::user()->email }}</span></p>
                        </div>
                        <div class="pb-5 btn-group">
                            <a href="#" class="p-1 mr-5 text-white rounded shadow pr-lg-3 pl-lg-3 bg-info active" aria-current="page">Transaction History</a>
                            <a href="{{ route('edit.user') }}" class="p-1 text-white rounded shadow pr-lg-3 pl-lg-3 bg-info active" aria-current="page">Accout Settings</a>
                        </div>
                    </div>
                </div>
             </div>
        </div>
@endsection
