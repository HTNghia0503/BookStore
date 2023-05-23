<!-- Start Thống Kê Sản Phẩm Xem Nhiều -->
<div class="row mb">
  <div class="boxcenter">
    <div class="boxtitle">THỐNG KÊ THEO SẢN PHẨM XEM NHIỀU</div>
    <div class="row  ">

      <div id="piechart1"></div>

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

      <script type="text/javascript">
        // Load google charts
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
          var data1 = google.visualization.arrayToDataTable([
            ['Sản phẩm', 'Lượt xem sản phẩm'],
  <?php
    $tongsp = count($listtkluotxem);
          $i = 1;
          foreach($listtkluotxem as $tkluotxem){
            extract($tkluotxem);
            if ($i == $tongsp) $dauphay = ""; else $dauphay = ",";
      echo "['".$tkluotxem['tensp']."', ".$tkluotxem['luotxemsp']."]".$dauphay;
            $i += 1;
          }
  ?>
 
]);

          // Optional; add a title and set the width and height of the chart
          var options1 = { 'title': 'Thống kê sản phẩm theo lượt xem', 'width': 775, 'height': 600 };

          // Display the chart inside the <div> element with id="piechart"
          var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
          chart.draw(data1, options1);
        }
      </script>
    </div>
  </div>
  <div class="boxcenter">
            <a href="index.php?act=thongke" ><input type="button" value="trở lại"></a>
        </div>   
</div>

<!-- End Thống Kê Sản Phẩm Xem Nhiều -->