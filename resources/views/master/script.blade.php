  <!-- Vendor js -->
        <script src="{{ URL::asset('assets/js/vendor.min.js') }}"></script>

        <!-- Daterangepicker js -->
        <script src="{{ URL::asset('assets/vendor/daterangepicker/moment.min.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>

        <!-- Charts js -->
        <script src="{{ URL::asset('assets/vendor/chart.js/chart.min.js ') }}"></script>
        <script src="{{ URL::asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Vector Map js -->
        <script src="{{ URL::asset('assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>

        <!-- Apex Chart Area Demo js -->
        <script src="{{ URL::asset('assets/js/stock-prices.js') }}"></script>
        <script src="{{ URL::asset('assets/js/github-data.js') }}"></script>
        <script src="{{ URL::asset('assets/js/series1000.js') }}"></script>
        <script src="{{ URL::asset('assets/js/irregular-data-series.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/demo.apex-area.js') }}"></script>
        <!-- Analytics Dashboard App js -->
        <script src="{{ URL::asset('assets/js/pages/demo.dashboard-analytics.js') }}"></script>

        <!-- Map Indonesia JS -->
        <script src="{{ URL::asset('assets/js/mapdata.js') }}"></script>
        <script src="{{ URL::asset('assets/js/countrymap.js') }}"></script>

        <!-- Datatables js -->
        <script src="{{ URL::asset('assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>

        <!-- Datatable Demo Aapp js -->
        <script src="{{ URL::asset('assets/js/pages/demo.datatable-init.js') }}"></script>

        <!-- Bootstrap Datepicker Plugin js -->
        <script src="{{ URL::asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

        <!-- Dropzone File JS -->
        <script src="{{ URL::asset('assets/vendor/dropzone/min/dropzone.min.js') }}"></script>

        <!-- Init JS -->
        <script src="{{ URL::asset('assets/js/ui/component.fileupload.js') }}"></script>

        <!-- Select2 JS -->
        <script src="{{ URL::asset('assets/vendor/select2/js/select2.min.js') }}"></script>
        

        <!-- Hyper Config JS -->
        <script src="{{ URL::asset('assets/js/hyper-config.js') }}"></script>

        <!-- Widget JS -->
        <script src="{{ URL::asset('assets/js/pages/demo.widgets.js') }}"></script>

        <!-- Sweet Alert 2 JS -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

        <script type="text/javascript">

     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          Swal.fire({
        title: "HAPUS DATA",
        text: "Apakah Kamu Yakin Ingin Menghapus Data Ini ?",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonColor: "#34c38f",
        cancelButtonColor: "#f46a6a",
        confirmButtonText: "Ya, Hapus Saja!"
      })
          .then((result) => {
            if (result.isConfirmed) {
              form.submit();
            }
          });
      });

</script>


        <!-- App js -->
        <script src="{{ URL::asset('assets/js/app.js') }}"></script>









