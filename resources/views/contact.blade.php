@extends('layouts.app')


@section('content')
<div class="page-banner">
    <div class="container">
      <div class="text-center row justify-content-center">
        <div class="col-lg-8">
          <div class="banner-content">
            <h2 class="title">
              Contact us
            </h2>
            <p>Create custom landing pages with Omega that converts <br class="d-none d-md-block"> more visitors than any website. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="contact-section pb-md--120 pb--50">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="contact-widget-wrapper">
            <div class="row">
              <div class="col-12 col-sm-6 col-md-4">
                <div class="contact-widget-block mb--55">
                  <h3 class="title">Call us</h3>
                  <p>+1-492-4918-395</p>
                  <p>+14-394-409-591</p>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="contact-widget-block mb--55">
                  <h3 class="title">Email us</h3>
                  <p>info@mail.com</p>
                  <p>support@mail.com</p>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="contact-widget-block mb--55">
                  <h3 class="title">Call us</h3>
                  <p>34 Madison Street,</p>
                  <p>NY, USA 10005</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 order-lg-1 pt-md--80 pt--40">
          <div class="omega-contact-form">
            <h3 class="text-center form-title mb--35 mb-lg--55">or, Send us a message</h3>
            <form action="https://uxtheme.net/demos/omega/">
              <div class="form-group">
                <label for="nameput">Your name</label>
                <input type="text" class="form-control" id="nameput" placeholder="i.e. James Cameron">
              </div>
              <div class="form-group">
                <label for="emailput">Email address</label>
                <input type="text" class="form-control" id="emailput" placeholder="i.e. james@email.com">
              </div>
              <div class="form-group">
                <label for="serviceput">Service</label>
                <input type="text" class="form-control" id="serviceput" placeholder="i.e. I want to know about your service">
              </div>
              <div class="form-group">
                <label for="message-area">Message</label>
                <textarea placeholder="Write your message here" name="message" id="message-area" class="form-control"></textarea>
              </div>
              <button class="btn btn--primary hvr-bounce-to-left">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
