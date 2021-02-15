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
            <!-- Header -->
            <div class="mb-5 text-center border-0 card-header">
                <span class="mb-0 d-block h1 text-info">Investment Offers</span>
            </div>

            <div class="col-md-12 col-sm-6">
                <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Gold Plan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Premium Plan</a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="mt-5 ml-5 border rounded w-md-35 border-info card">
                        <div class=" card-body">
                            <a href="{{ route('invest.gold') }}">
                                <div class="flex-row d-flex">
                                    <i class=" fas fa-star" style=""></i>
                                    <div>
                                        <h3 class="">Subscribe To</h3>
                                        <h6 class="text-muted">Gold Plan- <span class="">Click here</span></h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                      </div>
                    <div class="pt-5 ml-5 bg-white">
                        <div>
                            <p>Cryptolightinvest 2.0 Gold Plan – Slot To Buy Left:</p>
                             <div class="bg-black progress-bar progress-bar-striped progress-bar-animated" style="width:96%;">
                                <span> 96%</span>
                             </div>
                        </div>

                        <div>
                            <p>Cryptolightinvest 2.0 Premium Plan – Slot To Buy Left:</p>
                            <div class="bg-black progress-bar progress-bar-striped progress-bar-animated" style="width:99%;">
                                <span> 99%</span>
                            </div>
                        </div>
                        <div class="mb-5">
                            <p>Regular Plan – Sold Out</p>
                            <div class="bg-black progress-bar progress-bar-striped progress-bar-animated" style="width:2%;">
                                <span> 0%</span>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="mt-5 ml-5 border rounded w-md-35 border-info card" >
                        <div class=" card-body">
                            <a href="{{ route('premium') }}">
                                <div class="flex-row d-flex">
                                    <i class=" fas fa-medal" style=""></i>
                                    <div>
                                        <h3 class="">Subscribe To</h3>
                                        <h6 class="text-muted">Premium Plan- <span class="">Click here</span></h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                      </div>
                    <div class="pt-5 ml-5 bg-white">
                        <div>
                            <p>Cryptolightinvest 2.0 Gold Plan – Slot To Buy Left:</p>
                             <div class="bg-black progress-bar progress-bar-striped progress-bar-animated" style="width:96%;">
                                <span> 96%</span>
                             </div>
                        </div>

                        <div>
                            <p>Cryptolightinvest 2.0 Premium Plan – Slot To Buy Left:</p>
                            <div class="bg-black progress-bar progress-bar-striped progress-bar-animated" style="width:99%;">
                                <span> 99%</span>
                            </div>
                        </div>
                        <div class="mb-5">
                            <p>Regular Plan – Sold Out</p>
                            <div class="bg-black progress-bar progress-bar-striped progress-bar-animated" style="width:2%;">
                                <span> 0%</span>
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


