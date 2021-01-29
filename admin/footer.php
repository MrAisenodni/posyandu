<?php ob_end_flush();?>
        <footer class="footer text-center"> 2020 &copy; Sistem Informasi Posyandu Apel Desa Sukamanah </footer>
    </div>
</div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Counter js -->
    <script src="plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <script src="plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <!-- Morris JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
    <script src="morris/morris.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js"></script>
    <script src="morris/examples/lib/example.js"></script>
    <script type="text/javascript">
        Morris.Bar({
          element: 'bar-graph',
          data: [
            {x: '0-5,99', y: <?= $datachart['pria1'] ?>, z: <?= $datachart['wanita1'] ?>},
            {x: '6-10,99', y: <?= $datachart['pria2'] ?>, z: <?= $datachart['wanita2'] ?>},
            {x: '11-15,99', y: <?= $datachart['pria3'] ?>, z: <?= $datachart['wanita3'] ?>},
            {x: '16-23', y: <?= $datachart['pria4'] ?>, z: <?= $datachart['wanita4'] ?>}
          ],
          xkey: 'x',
          ykeys: ['y', 'z'],
          labels: ['Laki-laki', 'Perempuan'],
          barColors: ['blue', 'pink'],
          hideHover: 'auto'
        });
        Morris.Donut({
          element: 'donut-graph',
          data: [
            {value: <?= $datachart2['l'] ?>, label: 'Laki-laki'},
            {value: <?= $datachart2['p'] ?>, label: 'Perempuan'}
          ],
            labelColor: 'black',
          colors: ['blue','pink'],
          formatter: function (x) { return x}
        });
    </script>
</body>

</html>
