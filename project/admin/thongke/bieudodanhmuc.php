<!-- Start Thống kê danh mục -->
<div class="row mb">
  <div class="boxcenter">
    <div class="boxtitle">THỐNG KÊ THEO DANH MỤC</div>
    <div class="row">

      <div id="piechart"></div>

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

      <script type="text/javascript">
        // Load google charts
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng sản phẩm'],
  <?php
    $tongdm = count($listthongke);
          $i = 1;
          foreach($listthongke as $thongke){
            extract($thongke);
            if ($i == $tongdm) $dauphay = ""; else $dauphay = ",";
      echo "['".$thongke['tendm']."', ".$thongke['countsp']."]".$dauphay;
            $i += 1;
          }
  ?>
 
]);

          // Optional; add a title and set the width and height of the chart
          var options = { 'title': 'Thống kê sản phẩm theo danh mục', 'width': 775, 'height': 600 };

          // Display the chart inside the <div> element with id="piechart"
          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
          chart.draw(data, options);
        }
      </script>
    </div>
  </div>
  <div class="boxcenter">
            <a href="index.php?act=thongke" ><input type="button" value="trở lại"></a>
        </div>   
</div>

<!-- </div> -->
<!-- End Thống Kê Danh Mục -->



