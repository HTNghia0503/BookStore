<!-- Start Thống Kê Đơn Hàng -->
<div class="row mb">
  <div class="boxcenter mb">
    <form action="" method="post" class="menu-second--form">
      Từ ngày
      <input type="date" id="tungay" name="tungay" ><span> Đến ngày </span>
      <input type="date" id="denngay" name="denngay" >
      <input type="submit" name="searchsubmit" value="Tìm">
    </form>
  </div>
  <div class="boxcenter">

    <div class="boxtitle">THỐNG KÊ ĐƠN HÀNG</div>

    <div class="row ">

      <div id="piechart1"></div>

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

      <script type="text/javascript">
        // Load google charts
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
          var data1 = google.visualization.arrayToDataTable([
            ['Trạng thái đơn hàng', 'Tổng đơn'],
  <?php
 // $sql= "select bill.id as madh, bill.bill_name as tenkh, bill.ngaydathang as ngaydh, bill.bill_status as tinhtrangdh 
    // from bill where ngaydathang BETWEEN '01/01/2022' AND '01/01/2022'";
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //     if(isset($_POST["tungay"])) { $tungay = $_POST['tungay']; }
        //     if(isset($_POST["denngay"])) { $denngay = $_POST['denngay']; }
      
        if (isset($_REQUEST['searchsubmit'])) {
            $tungay = $_REQUEST['tungay'];
            $denngay = $_REQUEST['denngay'];

            for ($i = 0; $i < 5; $i++) {

              //   $sql= "select  count(id) from bill where bill_status = '$i'
              //         AND ngaydathang BETWEEN '$tungay' AND '$denngay'";
              $sql = "select  count(id) from bill where bill_status = '$i'
        AND ngaydathang BETWEEN '$tungay-00:00:00' AND '$denngay-23:59:59'";
              $row = pdo_query_one($sql);

              if ($i == 0) {
                $s0 = $row['count(id)'];
              }
              if ($i == 1) {
                $s1 = $row['count(id)'];
              }
              if ($i == 2) {
                $s2 = $row['count(id)'];
              }
              if ($i == 3) {
                $s3 = $row['count(id)'];
              }
              if ($i == 4) {
                $s4 = $row['count(id)'];
              }
            }
          }
         echo "['Đơn hàng mới', $s0],
          ['Đang xử lý', $s1],
            ['Đang vận chuyển', $s2],
            ['Đã giao hàng', $s3],
            ['Đã hủy', $s4]";

              ?>
]);

          // Optional; add a title and set the width and height of the chart
          var options1 = { 'title': 'Thống kê đơn hàng', 'width': 775, 'height': 600 };

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

<!-- End Thống Kê Đơn Hàng -->