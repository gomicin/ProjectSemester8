

    <script src="{{asset('admin/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('admin/js/popper.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins.js')}}"></script>
    <script src="{{asset('admin/js/main.js')}}"></script>


    <script src="{{asset('admin/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('admin/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{asset('admin/js/lib/data-table/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin/js/lib/data-table/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('admin/js/lib/data-table/datatables-init.js')}}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
          $('body').on('click', '.close-flash', function(){
            $(this).parent().css('display', 'none');
          });
        } );
    </script>
