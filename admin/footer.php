<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="">JK Software Solution</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-pre
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog" >
	        <div class="modal-content">
	            <div class="modal-body text-center">
	               <h1 class="display-4 text-danger"> <i class="fas fa-trash"></i> </h1>
	                <h1 class="font-weight-lighter">Are you sure?</h1>
	                <h4 class="font-weight-lighter"> Do you really want to delete these records? This process cannot be
                      undone. </h4>       
                <p class="debug-url"></p>
	            </div>
	            <div class="modal-footer">
                  <button type="button btn-primary" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a class="btn btn-danger btn-ok">Delete</a>
	            </div>
	        </div>
	    </div>
	</div>

  <div class="modal fade" id="confirm-delete-passenger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog" >
	        <div class="modal-content">
	            <div class="modal-body text-center">
	               <h1 class="display-4 text-danger"> <i class="fas fa-trash"></i> </h1>
	                <h1 class="font-weight-lighter">Are you sure?</h1>
	                <h4 class="font-weight-lighter"> Do you really want to delete these records? This process cannot be
                      undone. </h4>       
                <p class="debug-url"></p>
	            </div>
	            <div class="modal-footer">
                  <button type="button btn-primary" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a class="btn btn-danger btn-ok">Delete</a>
	            </div>
	        </div>
	    </div>
	</div>


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.minf.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>

<script>
        //delete model driver
$('#confirm-delete').on('show.bs.modal', function(e) {
$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
});

        //delete model passenger

$('#confirm-delete-passenger').on('show.bs.modal', function(e) {
$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
});
    </script>
<script>
   $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,"searching": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   });
   $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
</script>

<script>
  $(function () {


    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })


  });

</script>

<!-- <script>
    //Date range picker
    $('#date').datetimepicker({
        format: 'L'
    });
</script> -->
 <!-- x-editable (bootstrap version) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/js/jquery-editable-poshytip.min.js"></script>
<!-- <script type="text/javascript">
  $.fn.editable.defaults.mode = 'inline';
  $('#R101s_<$row['R101s']?>').editable({
    type: 'text',
    pk: <$row['id']?>,
    url: 'process.php',
    title: 'Enter username'
});
</script> -->

<!-- <script>
  $(document).ready(function(){
            $('input[name="EDTextbox1"]').on('click',function(){
                if($(this).val() === 'enabled'){
                    $('#input1').removeAttr('disabled').focus();
                }else{
                    $('#input1').attr('disabled','disabled');
                }
            });
        });
</script> -->
<script>
  // $('.form-group').on('input','.prc',function(){
  //   var totalSum = 0;
  //   $('.form-group .prc').each(function(){
  //     var inputVal = $(this).val();
  //     if($.isNumeric(inputVal)){
  //       totalSum += parseFloat(inputVal);
  //     }
  //   });
  //   $('#o_total_amount').html(totalSum);
  // });

  $('.form-group').on('input','.prc',function(){
 
    var sum= 0;
    $('.form-group .prc').each(function(){
      var num = $(this).val();
      if($.isNumeric(num)){
        sum += parseFloat(num);
      }
    });

    $('#o_total_amount').val(sum);
  });
</script>




</body>
</html>
