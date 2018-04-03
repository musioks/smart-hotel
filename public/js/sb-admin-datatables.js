// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable( {
        dom: 'Bfrtip',
       buttons: [ 'excel', 'pdf', 'colvis' ]
    } );
});
