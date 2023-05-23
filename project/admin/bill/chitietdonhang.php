<div class="boxcenter">
    <div class="row">
        <div class="row frmtitle mb">
            <h1>CHI TIẾT ĐƠN HÀNG</h1>
            <hr class="hr-pub">
        </div>
       
        <div class="boxtrai">
                <h2>Thông tin khách hàng</h2>
                
        </div>
        <?php 
    if(isset($_REQUEST['view'])){
        foreach ($listbill as $bill){
            extract($bill);
        }}
        ?>
        <div class="row frmcontent">
        <div class="row m10 frmdsloai">
            <div class="boxphai row mb10">
                <label class="boxphai" for="dh_id">ID đơn hàng      :</label>
                <input type="text"  id="id" name="id" value="<?php if(isset($bill['id'])) {echo 'DH-'.$bill['id']; } ?>" readonly>
       
            </div>
            <div class="boxphai row mb10">
                <label class="boxphai" for="dh_id">Tên người nhận   :</label>
                <input type="text"  id="dh_id" name="dh_id" value="<?php if(isset($bill['bill_name'])) {echo $bill['bill_name']; } ?>" readonly>
       
            </div>
         
            <div class="boxphai row mb10">
                <label class="boxphai" for="dh_id">Tổng thanh toán: </label>
                <input type="text"  id="dh_id" name="dh_id" value="<?php if(isset($bill['total'])) {echo $bill['total']; } ?>" readonly>
       
            </div>
            <div class="boxphai row mb10">
                <label class="boxphai" for="dh_id">Ngày đặt hàng:   </label>
                <input type="text"  id="dh_id" name="dh_id" value="<?php if(isset($bill['ngaydathang'])) {echo $bill['ngaydathang']; } ?>" readonly>
       
            </div>
            <div class="boxphai row mb10">
                <label class="boxphai" for="dh_id">SĐT:             </label>
                <input type="text"  id="dh_id" name="dh_id" value="<?php if(isset($bill['bill_tel'])) {echo $bill['bill_tel']; } ?>" readonly>
       
            </div>
            <div class="boxphai row mb10">
                <label class="boxphai" for="dh_id">Địa chỉ:         </label>
                <input type="text"  id="dh_id" name="dh_id" value="<?php if(isset($bill['bill_address'])) {echo $bill['bill_address']; } ?>" readonly>
       
            </div>

        </div>
    
        <div class="boxtrai">
                <h2>Thông tin đơn hàng</h2>
        </div>
        <div class="row frmdsloai">
        <table>
                    <!-- <tr>
                       
                        <th>STT</th>
                        <th>SẢN PHẨM</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ</th>
                        <th>THÀNH TIỀN</th>
                        
                    </tr> -->
                    <?php
                          global $img_path;
                          $tong=0;
                        //   $i=0;
                          echo '<tr>
                                  <th>Hình</th>
                                  <th>Sản phẩm</th>
                                  <th>Đơn giá</th>
                                  <th>Số lượng</th>
                                  <th>Thành tiền</th>
                              </tr>';
                          
                          foreach ($listbillct as $cart) {
                              $hinh=$img_path.$cart['img'];
                              $tong+=$cart['thanhtien'];
                              
                              echo '<tr>
                                      <td><img src="'.$hinh.'" alt="" height="80px"></td>
                                      <td>'.$cart['name'].'</td>
                                      <td>'.$cart['price'].'</td>
                                      <td>'.$cart['soluong'].'</td>
                                      <td>'.$cart['thanhtien'].'</td>
                                  </tr>';
                            //   $i+=1;
                          }
                          echo '<tr>
                                  <td colspan="4">Tổng đơn hàng</td>
                                  <td>'.$tong.'</td>
                              </tr>';
                    ?>
        </table></div>
        <div class="row mb10-btn">
            
                <input type="submit" value="In đơn hàng" onClick="window.print()">
                <a class="" href="index.php?act=listbill" >Đóng</a>
          
            
                </div>
    </div>
        <!-- </div> -->

    </div>

</div>