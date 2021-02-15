
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
                    <div class="">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-sm-8">
                                <div class="">
                                    <div class="mt-5 mb-5 text-center h2">Premium Plan</div>
                                    <p class="m-3">The Nigerian Government forbids any online transaction above 1 million naira per investor, thus the only way to invest is stated below, thank you</p>
                                </div>
                                <div class="mb-5 border">
                                    <div class="m-5">
                                        <h4>How To Subscribe On The Premium Plan</h4>
                                        <p class="mt-5">1. Download the landvest investment form via this link and FAQs</p>
                                        <p class="mt-5">2. Fill, and send to Cryptolightinvest@gmail.com</p>
                                        <p class="mt-5">3. Attach your passport and ID Card to the email</p>
                                        <p class="mt-5">4. Make payment to our keystone account</p>
                                        <p class="mt-5">5. Send Proof of Payment, Name of Client to landvestng@gmail.com</p>
                                        <p class="mt-5">6. Your Dashboard will be credited in few minutes after confirmation!</p>
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

