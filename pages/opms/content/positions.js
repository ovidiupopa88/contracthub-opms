$(function () {
    
    //$("#example1").DataTable();
    $('#positions').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "processing": true,
      "serverSide": true,
      "ajax": "../server_side/positions_processing.php"
    });
  });