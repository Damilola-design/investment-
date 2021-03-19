@extends('admin.layouts.app')

@section('content')
<div class="row">
<div class="col-md-2">
    @component('admin.layouts.menu.sideBar')

    @endcomponent
</div>
<div class="col-sm-5">
    <div class="card">
        <div class="card-header">User Details
            <span class="float-right btn-primary btn-sm" id="open-edit-details-modal">Edit</span>
        </div>

        <div class="card-body">
            <h5>Username: {{ $user->username }}</h5>
            <h5>Email: {{ $user->email }}</h5>
            <h5>Role: {{ $user->email }}</h5>
            <h5>Firt Name: {{ $user->first_name }}</h5>
            <h5>Last Name: {{ $user->last_name }}</h5>
        </div>
    </div>

</div>
<div class="modal-cont" id="edit-details-modal">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="card">
                <div class="card-header">
                    Edit the datails for: {{ $user->email }} <span class="float-right" id="close-edit-datails-modal" style="cursor: pointer; color: red;">X</span>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.update.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name"> Full Name</label>
                            <input class="form-control" type="text" name="full_name" value="">
                        </div>
                        <div class="form-group">
                            <label for="name"> Full Name</label>
                            <input class="form-control" type="text" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Mobile Number</label>
                            <input class="form-control" type="text" name="number" value="">
                        </div>
                        <div class="form-group">
                            <label for="name">Amount</label>
                            <input class="form-control" type="text" name="" value="">
                        </div>
                        <div class="form-group">
                            <label for="name">Investment Plan</label>
                            <select name="plan" id="" class="form-control" >
                                <option value="gold" >Gold Plan</option>
                                <option value="premium" >Premium</option>
                            </select>
                        </div>
                       <div class="form-group ">
                         <label for="Period">Maturity Period</label>
                                     <select name="Period" id="" class="form-control" >
                                         <option value="6 Months - 15%" >6 Months - 15%</option>
                                         <option value="12 Months - 30%" >12 Months - 30%</option>
                                         <option value="18 Months - 45%" >18 Months - 45%</option>
                                        <option value="24 Months - 60%" >24 Months - 60%</option>
                                      </select>
                         </div>
                        <div class="form-group">
                            <label for="name">Valid ID card</label>
                            <input class="form-control" type="file" name="valid_id" value="">
                        </div>
                        <div class="form-group">
                            <label for="name">Passport</label>
                            <input class="form-control" type="file" name="passport" value="">
                        </div>
                        <div class="form-group">
                            <label for="name">Bank Name</label>
                            <input class="form-control" type="text" name="bank_name" value="">
                        </div>
                        <div class="form-group">
                            <label for="name">Account Name</label>
                            <input class="form-control" type="text" name="acc_name" value="">
                        </div>
                        <div class="form-group">
                            <label for="name">Account Number</label>
                            <input class="form-control" type="text" name="acc_number" value="">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block"> Update User details</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
@endsection
@push('admin.layouts.scripts.scripts')
  <script src="{{ asset('js/admin/user.js') }}"></script>
@endpush
@push('admin.layouts.style')
  <link rel="stylesheet" href="{{ asset('css/admin/user.css') }}">
@endpush

