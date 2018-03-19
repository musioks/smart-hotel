 <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="{{asset('/images/users/user.png')}}" alt="User Image"></div>
            <div class="pull-left info">
              <p>{{Auth::user()->name}}</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
    <li class="{{Request::is('admin') ? 'active' : ''}}"><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
      <li class=""><a href="{{url('/admin/meals')}}"><i class="fa fa-bars"></i><span>Meals</span></a></li>
 <li class=""><a href="{{url('/admin/rooms')}}"><i class="fa fa-building"></i><span>Rooms/Facilities</span></a></li>
<li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>Orders and Bookings</span><i class="fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
      <li><a href="{{url('/admin/booked-rooms')}}"><i class="fa fa-circle-o"></i>Booked Rooms/Facilities</a></li>
      <li><a href="{{url('/admin/ordered-meals')}}"><i class="fa fa-circle-o"></i>Ordered Meals</a></li>
     </ul>
</li>
<li><a href="{{url('/admin/customers')}}"><i class="fa fa-users"></i><span>Customers</span></a></li>
<li><a href="{{url('/admin/messages')}}"><i class="fa fa-inbox"></i><span>Messages</span></a></li>
          </ul>
        </section>
      </aside>