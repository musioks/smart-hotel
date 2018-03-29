 @include('includes.header')
  <body>
 <!--beginning of navigation bar-->
      @include('includes.nav')
      <!--end of navigation bar-->
      @yield('content')
      <div class="clearfix">&nbsp;</div>
<div class="footer bg-info">
		<p class=" text-warning text-center pt-4 ">{{date('Y')}}&copy Tosha Hotel Management System</p>
</div>
         <script src="{{asset('js/app.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <!-- Toastr-->
    <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
   
    <script>
      $('#datepicker').datepicker({
            keyboardNavigation: false,
            forceParse: false,
            todayHighlight: true,
            locale: 'no',
            format: 'yyyy-mm-dd',
            autoclose: true
        });
  @if(Session::has('success'))
  toastr.success("{{ Session::get('success') }}");
  @endif
  @if(Session::has('info'))
  toastr.info("{{ Session::get('info') }}");
  @endif
  @if(Session::has('warning'))
  toastr.warning("{{ Session::get('warning') }}");
  @endif
  @if(Session::has('error'))
  toastr.error("{{ Session::get('error') }}");
  @endif

</script>
 </body>
</html>