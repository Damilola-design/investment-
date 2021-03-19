
<div class="border card bg-info">
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <div class=" card-header">
                <img src="assets/img/primose.jpg" alt="Logo" style="max-width: 100px">
            </div>
          <ul class="nav side-menu">
            <li>
                <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> My Account </a>

            </li>
           <li>
                <a href="{{ route('investments') }}"><i class="fa fa-edit"></i> Investments </a>
            </li>
            <li>
                <a href="{{ route('edit.user') }}"><i class="fa fa-desktop"></i>Profile Update</a>
            </li>
            <li>
                <a href="{{ route('care') }}"><i class="fa fa-table"></i> Customer Care </a>
            </li>
            <li class=""> <a class="" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-off" aria-hidden="true">
                 {{ __('Logout') }}
             </a></li>
        </div>
      </div>
</div>




