<!-- build:js({.tmp,app}) scripts/app.min.js -->
  <script src="app/scripts/helpers/modernizr.js"></script>
  <script src="app/vendor/jquery/dist/jquery.js"></script>
  <script src="app/vendor/bootstrap/dist/js/bootstrap.js"></script>
  <script src="app/vendor/fastclick/lib/fastclick.js"></script>
  <script src="app/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
  <script src="app/scripts/helpers/smartresize.js"></script>
  <script src="app/scripts/constants.js"></script>
  <script src="app/scripts/main.js"></script>
  <!-- endbuild -->
  <!-- page scripts -->
  <script src="app/vendor/datatables/media/js/jquery.dataTables.js"></script>
  <!-- end page scripts -->
  <!-- initialize page scripts -->
  <script src="app/scripts/helpers/bootstrap-datatables.js"></script>
  <script src="app/scripts/tables/table-edit.js"></script>
  <!-- end initialize page scripts -->
    <!-- page scripts -->
  <script src="vendor/flot/jquery.flot.js"></script>
  <script src="vendor/flot/jquery.flot.pie.js"></script>
   <script type="text/javascript">
    var data = [{
      label: 'IE',
      data: 34,
      color: $.staticApp.primary
            }, {
      label: 'Safari',
      data: 14,
      color: $.staticApp.info
            }, {
      label: 'Chrome',
      data: 15,
      color: $.staticApp.warning
            }];
    $.plot($('.pie-chart'), data, {
      series: {
        pie: {
          show: true,
          //innerRadius: 0.6,
          stroke: {
            width: 0
          },
          label: {
            show: false,
          }
        }
      },
      legend: {
        show: false
      }
    });
  </script>
  <!-- end initialize page scripts -->
  
  
</body>

</html>