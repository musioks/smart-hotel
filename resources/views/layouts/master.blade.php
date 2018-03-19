<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
   <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!-- Font-icon css-->
    <link href="{{asset ('css/datatables/jquery.dataTables.css')}}" rel="stylesheet">
<link href="{{ asset('js/datatables/extensions/Buttons/css/buttons.dataTables.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <title>Smart Joint Hotel</title>
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="{{url('/admin')}}">Smart-Joint Hotel</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav navbar-left">
              <li><a href="" style="background-color:transparent;color:#F0FFF0;font-size:20px; font-weight:13px;"><strong>  Smart-Joint Hotel Management system</strong></a></li>
            </ul>
            <ul class="top-nav">
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i> User Account</a>
                <ul class="dropdown-menu settings-menu">
              
                 <!-- <li><a href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li> -->
                  <li><a href="{{url('/signout')}}"><i class="fa fa-power-off fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      @include('layouts.sidebar')
      <!-- Side-Nav-->
     
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1> @yield('title')</h1>
            <p>&nbsp;</p>
          </div>
          <div>
            <ul class="breadcrumb">
                @yield('crumbs')
            </ul>
          </div>
        </div>
        @yield('content')
      
        </div>
      </div>
    <!-- Javascripts-->
    <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/pace.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
<script src="{{ asset('js/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('js/datatables/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('js/datatables/extensions/Buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('js/datatables/jszip.min.js')}}"></script>
<script src="{{ asset('js/datatables/pdfmake.min.js')}}"></script>
<script src="{{ asset('js/datatables/vfs_fonts.js')}}"></script>
<script src="{{ asset('js/datatables/extensions/Buttons/js/buttons.html5.js')}}"></script>
<script src="{{ asset('js/datatables/extensions/Buttons/js/buttons.colVis.js')}}"></script>

    <script type="text/javascript">
$(document).ready(function () {
  $('#myTable').DataTable({
      dom: '<"html5buttons" B>lTfgitp',
      buttons: [
     
        {
          extend: 'excelHtml5',
          exportOptions: {
            columns: ':visible'
          }
        },
        {
          extend: 'pdfHtml5',
          exportOptions: {
            columns: ':visible'
          }
        },
      ]
    });
  });
  </script>
  </body>
</html>