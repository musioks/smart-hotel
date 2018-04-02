    <script src="{{asset('js/app.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{asset('vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/jszip.min.js')}}"></script>
    <script src="{{asset('js/pdfmake.min.js')}}"></script>
    <script src="{{asset('js/vfs_fonts.js')}}"></script>
    <script src="{{asset('js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('js/buttons.print.min.js')}}"></script>
    <script src="{{asset('js/buttons.colVis.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin.min.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('js/sb-admin-datatables.js')}}"></script>
        <!-- Toastr-->
    <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
   
    <script>
      $(document).ready(function() {
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
} );
</script>