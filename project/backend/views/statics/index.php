<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
<div class="container">
  <div class="row">
      <div class="col-sm-4" style="font-weight: bold">
        Biểu đồ thống kê phần trăm số user mới
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <svg id="animated" viewbox="0 0 100 100">
          <circle cx="50" cy="50" r="45" fill="#FDB900"/>
          <path fill="none" stroke-linecap="round" stroke-width="5" stroke="#fff"
                stroke-dasharray="251.2,0"
                d="M50 10
                  a 40 40 0 0 1 0 80
                  a 40 40 0 0 1 0 -80">
            <animate attributeName="stroke-dasharray" from="0,251.2" to="251.2,0" dur="5s"/>           
          </path>
          <text id="count" x="50" y="50" text-anchor="middle" dy="7" font-size="20"><?php echo $percent; ?>%</text>
        </svg>
      </div>
      <div class="col-sm-6">
      </div>
    </div>

    <hr>
    <hr>

    <div class="row">
      <div class="col-sm-8">
        <?php
 
        $dataPoints = array(
          array("x"=> 11, "y"=> 3),
          array("x"=> 4, "y"=> 2, "indexLabel"=> "Thấp nhất"),
          array("x"=> 7, "y"=> 3),
          array("x"=> 5, "y"=> 3),
          array("x"=> 10, "y"=> 4, "indexLabel"=> "Cao nhất"),
        );
          
        ?>
        <script>
          window.onload = function () {
          
          var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            exportEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title:{
              text: "Thống kê số lượng mua hàng của khách hàng"
            },
            axisY:{
              includeZero: true
            },
            data: [{
              type: "column", //change type to bar, line, area, pie, etc
              //indexLabel: "{y}", //Shows y value on all Data Points
              indexLabelFontColor: "#5A5757",
              indexLabelPlacement: "outside",   
              dataPoints: <?php echo json_encode($dataPoints); ?>
            }]
          });
          chart.render();
          
          }
        </script>

        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
          <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </div>
    </div>
</div>
