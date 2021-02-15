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
              <div class="shadow-lg card h-100">

                <!-- Header -->
                @if($message= Session::get('success'))
                  <div class="alert alert-success">
                      <p>{{ $message }}</p>
                    </div>
                 @endif
                 @if($message= Session::get('Error'))
                 <div class="alert alert-danger">
                     <p>{{ $message }}</p>
                   </div>
                @endif
                    <div class="text-center border-0 card-header">
                        <span class="mb-0 d-block h3">Get In Touch</span>
                    </div>
                    <p class="ml-5">Response to your Messages & Complaints will be replied within few hours, please be sure to check your email.</p>
                    <hr>
                    <form method="post" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="m-5 w-60">
                          <label for="exampleInputEmail1" class="form-label">Your Email<span class="text-danger">*</span></label>
                          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required="">

                        </div>
                        <div class="m-5 w-60 ">
                            <label for="exampleInputPassword1" class="form-label">Subject<span class="text-danger">*</span></label>
                            <input type="" class="form-control" name="subject" id="exampleInputPassword1" required="">
                            <div id="emailHelp" class="form-text">Title of your complaint e.g Payment Confrimation, Investment Related Issues, Account Login e.t.c</div>
                          </div>
                          <div class="m-5 js-form-message form-group ">
                            <label for="descriptionTextarea" class="input-label">Full Message<span class="text-danger">*</span></label>
                            <textarea class="p-2 form-control " name="message" rows="3" id="descriptionTextarea" placeholder="Hi there, I would like to ..." required="" data-msg="Please enter your message."></textarea>
                          </div>
                        <button type="submit" class="p-2 m-5 btn btn-info">Submit Enquiry</button>
                      </form>
        </div>
    </div>
    @endsection
