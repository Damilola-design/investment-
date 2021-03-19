@extends('admin.layouts.app')


@section('content')

<div class="row">
        <div class="col-md-2">
            @component('admin.layouts.menu.sideBar')

            @endcomponent
    </div>
    <div class="col-md-10">
        {{-- LeaderBoard and HUD --}}
        <div class="row">
            <div class="col-sm-3">
            <div class="card">
                <div class="card-header">Active Users</div>
                <div class="card-body">
                    <h4 class="text-center">4</h4>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-header">Gold Users</div>
                <div class="card-body">
                    <h4 class="text-center">6</h4>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-header">Premium Users</div>
                <div class="card-body">
                    <h4 class="text-center">5</h4>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-header">Total sales value</div>
                <div class="card-body">
                    <h4 class="text-center">#42,092.23</h4>
                </div>
            </div>
        </div>
     </div>
     {{-- End of LeaderBoard --}}
     <div class="mt-4 row">
         <div class="col-sm-4">
             <div class="card">
                 <div class="card-header">Unsigned Prospect</div>
                 <ul class="list-group list-group-flush">
                     @for($i = 0; $i < 6; $i++)
                    <li class="list-group-item">Mr. Prospect <span class="float-right btn btn-sm btn-success">Assign</span>
                    </li>
                    @endfor
                    <li class="list-group-item">
                        <a href="" class="btn btn-block btn-md btn-primary">View All Unsigned Leads</a>
                    </li>
                </ul>
             </div>
         </div>
         <div class="col-sm-8">
             <div class="card">
                 <div class="card-header">Recent Estimates</div>
                 <ul class="list-group list-group-flush">
                    @for($i = 0; $i < 6; $i++)
                     <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-4">
                             Mr. Prospect
                            </div>
                            <div class="col-sm-4">
                                June 5th, 2018
                            </div>
                            <div class="col-sm-4">
                                Value: $54,750
                                <span class="float-right btn btn-sm btn-success">Details</span>
                            </div>
                        </div>
                     </li>
                     @endfor
                     <li class="list-group-item">
                        <a href="" class="btn btn-block btn-md btn-primary">View All Estimate Recent Details</a>
                    </li>
                 </ul>
             </div>
         </div>
     </div>
    </div>
</div>
@endsection
