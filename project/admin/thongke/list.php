
<div class="row">
    <div class="boxcenter">
    <div class="row frmtitle">
        <h1>THỐNG KÊ SẢN PHẨM THEO LOẠI</h1>
    </div>
    <div class="row frmcontent"></div>
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
                <?php
                    foreach($listthongke as $thongke){
                        extract($thongke);
                        echo '
                            <tr>
                                <td>'.$madm.'</td>
                                <td>'.$tendm.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$maxprice.'</td>
                                <td>'.$minprice.'</td>
                                <td>'.$avgprice.'</td>
                            </tr>
                        ';
                    }
                ?>
                
            </table>
        </div>
        <div class="row mb10-btn">
            <a href="index.php?act=bieudodanhmuc" ><input type="button" value="xem biểu đồ"></a>
        </div>    
</div>
<div class="boxcenter">
    <div class="row frmtitle">
        <h1>THỐNG KÊ SẢN PHẨM THEO LƯỢT XEM</h1>
    </div>
    <div class="row frmcontent"></div>
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th>MÃ SẢN PHẨM</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>SỐ LƯỢT XEM</th>
                    
                </tr>
                <?php
                    foreach($listtkluotxem as $tkluotxem){
                        extract($tkluotxem);
                        echo '
                            <tr>
                                <td>'.$masp.'</td>
                                <td>'.$tensp.'</td>
                                <td>'.$luotxemsp.'</td>
                                
                            </tr>
                        ';
                    }
                ?>
                
            </table>
        </div>
        <div class="row mb10-btn">
            <a href="index.php?act=bieudoluotxem" ><input type="button" value="xem biểu đồ"></a>
        </div>    
</div>

<div class="boxcenter">
    <div class="row frmtitle">
        <h1>THỐNG KÊ ĐƠN HÀNG</h1>
    </div>
  
 <!-- <div class="row mb10"> -->
   <form action="" method="post" class="menu-second--form">
    
        Từ ngày
        <input type="date" id="tungay" name="tungay" > <span> Đến ngày </span>
       
        <input type="date" id="denngay" name="denngay" >
        
            <input type="submit" name="searchsubmit" value="Tìm" >
                   
    </form> 
    <!-- </div> -->
   
    <div class="row frmcontent"></div>
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>TÊN NGƯỜI DẶT</th>
                    <th>NGÀY ĐẶT HẰNG</th>
                    <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    
                </tr>
                <?php
                if($listtkdonhang>0){
                    foreach($listtkdonhang as $tkdonhang){
                        extract($tkdonhang);
                        $ttdh=get_ttdh($tkdonhang['tinhtrangdh']);
                        echo '
                            <tr>
                                <td>DH-'.$madh.'</td>
                                <td>'.$tenkh.'</td>
                                <td>'.$ngaydh.'</td>
                                <td>'.$ttdh.'</td>
                                
                            </tr>
                        ';
                    }
                }
                ?>
                
            </table>
            
        </div>
        
        <div class="row mb10-btn">
            <a href="index.php?act=bieudodonhang" ><input type="button" value="xem biểu đồ"></a>
        </div>    
</div>

</div>
