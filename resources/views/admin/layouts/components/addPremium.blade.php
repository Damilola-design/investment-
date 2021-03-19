<form action="{{ route('admin.premium.add') }}" method="POST" id="new-user-form">
    @csrf
    <div class="form-group">
        <label for="username" class="">New UserName</label>
        <input type="text" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" name="username">
        @if($errors->has('username'))
            <div class="invalid-feedback">
                {{ $errors->first('username') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="first_name" class=""> First Name</label>
        <input type="text" class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" name="first_name">
        @if($errors->has('first_name'))
            <div class="invalid-feedback">
                {{ $errors->first('first_name') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="last_name" class=""> Last Name</label>
        <input type="text" class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" name="last_name">
        @if($errors->has('last_name'))
            <div class="invalid-feedback">
                {{ $errors->first('last_name') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="email" class="">New User Email</label>
        <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email">
        @if($errors->has('email'))
        <div class="invalid-feedback">
            {{ $errors->first('email') }}
        </div>
    @endif
    </div>
    <div class="form-group">
        <label for="role">Select New User Role:</label>
        <select name="role" class="form-control {{ $errors->has('role') ? 'is-invalid' : '' }}" id="">
            <option value="user" default>User</option>
            <option value="admin" default>Admin</option>
        </select>
        @if($errors->has('role'))
        <div class="invalid-feedback">
            {{ $errors->first('role') }}
        </div>
    @endif
    </div>
    <div class="form-group">
        <label for="password">Enter New User Temporary Password</label>
        <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password">
        @if($errors->has('password'))
        <div class="invalid-feedback">
            {{ $errors->first('password') }}
        </div>
    @endif
    </div>
    <div class="form-group">
        <label for="confirm_password">Confirm New User Temporary Password</label>
        <input type="password" class="form-control {{ $errors->has('confirm_password') ? 'is-invalid' : '' }}" name="confirm_password">
        @if($errors->has('confirm_password'))
        <div class="invalid-feedback">
            {{ $errors->first('confirm_password') }}
        </div>
    @endif
    </div>
    <button class="btn btn-block btn-primary">Add a New User</button>
</form>
