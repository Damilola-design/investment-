<div class="card">
    <div class="card-header">
       <a href="{{route('admin.dashboard')}}"> Dashboard</a>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><a href="{{ route('admin.users') }}" >Manage User</a></li>
        <li class="list-group-item"><a href="{{ route('admin.premium') }}" >Add Premium User</a></li>
        <li class="list-group-item"><a class="" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-off" aria-hidden="true">
                 {{ __('Logout') }}
             </a></li>
    </ul>
</div>
