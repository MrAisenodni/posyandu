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
    <!-- Canvas JavaScript -->
    <script src="../canvasjs/canvasjs.min.js"></script>
    <script>
    window.onload = function () {
      CanvasJS.addColorSet("greenred",
                [//colorSet Array

                "yellow",
                "lightgreen",
                "red"
            ]);

        var chart = new CanvasJS.Chart("bbw-graph", {
          colorSet: "greenred",
                
          title:{
            text: "Berat Badan Balita Perempuan",
            fontFamily: "Roboto",
            fontWeight: "bold"              
          },

          data: [  //array of dataSeries     
          { //dataSeries - first quarter
     /*** Change type "column" to "bar", "area", "line" or "pie"***/        
           type: "column",
           name: "Kekurangan",
           indexLabel: "{y}",
           indexLabelPlacement: "inside",
           indexLabelOrientation: "vertical",
           indexLabelFontFamily: "Roboto",
           indexLabelFontColor: "white",
           indexLabelFontSize: 14,
           indexLabelFontWeight: "bold",
           showInLegend: true,
           dataPoints: [
           { label: "<1 tahun", y: <?= $chartbbw['wast1'] ?> },
           { label: "<2 tahun", y: <?= $chartbbw['wast2'] ?> },
           { label: "<3 tahun", y: <?= $chartbbw['wast3'] ?> },                                    
           { label: "<4 tahun", y: <?= $chartbbw['wast4'] ?> },
           { label: "<5 tahun", y: <?= $chartbbw['wast5'] ?> }
           ]
         },

         { //dataSeries - second quarter

          type: "column",
          name: "Ideal", 
        indexLabel: "{y}",
        indexLabelPlacement: "inside",
        indexLabelOrientation: "vertical",
        indexLabelFontFamily: "Roboto",
        indexLabelFontColor: "white",
        indexLabelFontSize: 14,
        indexLabelFontWeight: "bold",
          showInLegend: true,               
          dataPoints: [
          { label: "<1 tahun", y: <?= $chartbbw['ideal1'] ?> },
           { label: "<2 tahun", y: <?= $chartbbw['ideal2'] ?> },
           { label: "<3 tahun", y: <?= $chartbbw['ideal3'] ?> },                                    
           { label: "<4 tahun", y: <?= $chartbbw['ideal4'] ?> },
           { label: "<5 tahun", y: <?= $chartbbw['ideal5'] ?> }
          ]
        },

        { //dataSeries - third quarter

          type: "column",
          name: "Kelebihan", 
        indexLabel: "{y}",
        indexLabelPlacement: "inside",
        indexLabelOrientation: "vertical",
        indexLabelFontFamily: "Roboto",
        indexLabelFontColor: "white",
        indexLabelFontSize: 14,
        indexLabelFontWeight: "bold",
          showInLegend: true,               
          dataPoints: [
          { label: "<1 tahun", y: <?= $chartbbw['obe1'] ?> },
           { label: "<2 tahun", y: <?= $chartbbw['obe2'] ?> },
           { label: "<3 tahun", y: <?= $chartbbw['obe3'] ?> },                                    
           { label: "<4 tahun", y: <?= $chartbbw['obe4'] ?> },
           { label: "<5 tahun", y: <?= $chartbbw['obe5'] ?> }
          ]
        }
        ],
     /** Set axisY properties here*/
        axisY:{
          title: "Jumlah Balita",
          titleFontFamily: "Roboto"
        }    
      });
        chart.render();

        CanvasJS.addColorSet("bluerange",
                [//colorSet Array

                "blue",
                "green",
                "purple"
            ]);

        var chart = new CanvasJS.Chart("bbp-graph", {
          colorSet: "bluerange",
                
          title:{
            text: "Berat Badan Balita Laki-laki",
            fontFamily: "Roboto",
            fontWeight: "bold"              
          },

          data: [  //array of dataSeries     
          { //dataSeries - first quarter
     /*** Change type "column" to "bar", "area", "line" or "pie"***/        
           type: "column",
           name: "Kekurangan",
           indexLabel: "{y}",
           indexLabelPlacement: "inside",
           indexLabelOrientation: "vertical",
           indexLabelFontFamily: "Roboto",
           indexLabelFontColor: "white",
           indexLabelFontSize: 14,
           indexLabelFontWeight: "bold",
           showInLegend: true,
           dataPoints: [
           { label: "<1 tahun", y: <?= $chartbbp['wast1'] ?> },
           { label: "<2 tahun", y: <?= $chartbbp['wast2'] ?> },
           { label: "<3 tahun", y: <?= $chartbbp['wast3'] ?> },                                    
           { label: "<4 tahun", y: <?= $chartbbp['wast4'] ?> },
           { label: "<5 tahun", y: <?= $chartbbp['wast5'] ?> }
           ]
         },

         { //dataSeries - second quarter

          type: "column",
          name: "Ideal", 
        indexLabel: "{y}",
        indexLabelPlacement: "inside",
        indexLabelOrientation: "vertical",
        indexLabelFontFamily: "Roboto",
        indexLabelFontColor: "white",
        indexLabelFontSize: 14,
        indexLabelFontWeight: "bold",
          showInLegend: true,               
          dataPoints: [
          { label: "<1 tahun", y: <?= $chartbbp['ideal1'] ?> },
           { label: "<2 tahun", y: <?= $chartbbp['ideal2'] ?> },
           { label: "<3 tahun", y: <?= $chartbbp['ideal3'] ?> },                                    
           { label: "<4 tahun", y: <?= $chartbbp['ideal4'] ?> },
           { label: "<5 tahun", y: <?= $chartbbp['ideal5'] ?> }
          ]
        },

        { //dataSeries - third quarter

          type: "column",
          name: "Kelebihan", 
        indexLabel: "{y}",
        indexLabelPlacement: "inside",
        indexLabelOrientation: "vertical",
        indexLabelFontFamily: "Roboto",
        indexLabelFontColor: "white",
        indexLabelFontSize: 14,
        indexLabelFontWeight: "bold",
          showInLegend: true,               
          dataPoints: [
          { label: "<1 tahun", y: <?= $chartbbp['obe1'] ?> },
           { label: "<2 tahun", y: <?= $chartbbp['obe2'] ?> },
           { label: "<3 tahun", y: <?= $chartbbp['obe3'] ?> },                                    
           { label: "<4 tahun", y: <?= $chartbbp['obe4'] ?> },
           { label: "<5 tahun", y: <?= $chartbbp['obe5'] ?> }
          ]
        }
        ],
     /** Set axisY properties here*/
        axisY:{
          title: "Jumlah Balita",
          titleFontFamily: "Roboto"
        }    
      });

    chart.render();
    }
    </script>
</body>

</html>
