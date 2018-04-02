
     @php $level=Auth::user()->user_level; @endphp
    @switch($level)
    @case($level==1)
          <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{url('/admin')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Staff">
          <a class="nav-link" href="{{url('admin/customers')}}">
            <i class="fa fa-fw fa-group"></i>
            <span class="nav-link-text">Customers</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Customers">
          <a class="nav-link" href="{{url('admin/meals')}}">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Meals</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Products">
          <a class="nav-link" href="{{url('admin/rooms')}}">
            <i class="fa fa-fw fa-shopping-bag"></i>
            <span class="nav-link-text">Rooms/Facilities</span>
          </a>
        </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Orders and Bookings">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Orders and Bookings</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="{{url('/admin/booked-rooms')}}">Booked Rooms/Facilities</a>
            </li>
            <li>
              <a href="{{url('/admin/ordered-meals')}}">Ordered Meals</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Customers">
          <a class="nav-link" href="{{url('admin/messages')}}">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Messages</span>
          </a>
        </li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Logout">
          <a href="{{ url('/logout') }}" class="nav-link"
          onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
         <i class="fa fa-fw fa-sign-out"></i> Logout
      </a>

      <form id="logout-form" action="{{ url('/signout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>
        </li>
      </ul>
        @break
    @case($level==2)
       <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{url('/admin')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Customers">
          <a class="nav-link" href="{{url('admin/customers')}}">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Customers</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Transactions">
          <a class="nav-link" href="{{url('admin/messages')}}">
            <i class="fa fa-fw fa-money"></i>
            <span class="nav-link-text">messages</span>
          </a>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Logout">
          <a href="{{ url('/logout') }}" class="nav-link"
          onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
         <i class="fa fa-fw fa-sign-out"></i> Logout
      </a>

      <form id="logout-form" action="{{ url('/signout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>
        </li>
      </ul>
        @break

    @default
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{url('/admin')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Staff">
          <a class="nav-link" href="{{url('admin/customers')}}">
            <i class="fa fa-fw fa-group"></i>
            <span class="nav-link-text">Customers</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Customers">
          <a class="nav-link" href="{{url('admin/meals')}}">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Meals</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Products">
          <a class="nav-link" href="{{url('admin/rooms')}}">
            <i class="fa fa-fw fa-shopping-bag"></i>
            <span class="nav-link-text">Rooms/Facilities</span>
          </a>
        </li>
        <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>Orders and Bookings</span><i class="fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
      <li><a href="{{url('/admin/booked-rooms')}}"><i class="fa fa-circle-o"></i>Booked Rooms/Facilities</a></li>
      <li><a href="{{url('/admin/ordered-meals')}}"><i class="fa fa-circle-o"></i>Ordered Meals</a></li>
     </ul>
     </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Customers">
          <a class="nav-link" href="{{url('admin/messages')}}">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Messages</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Logout">
          <a href="{{ url('/logout') }}" class="nav-link"
          onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
         <i class="fa fa-fw fa-sign-out"></i> Logout
      </a>

      <form id="logout-form" action="{{ url('/signout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>
        </li>
      </ul>

@endswitch
        