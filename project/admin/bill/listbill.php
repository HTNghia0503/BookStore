<div class="boxcenter">
    <div class="row">
        <div class="row frmtitle mb">
            <h1>DANH SÁCH ĐƠN HÀNG</h1>
        </div>
        <form action="index.php?act=listbill" method="post">
            <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
            <input type="submit" name="listok" value="Tìm kiếm">
        </form>
        <div class="row frmcontent">
            <div class="row frmdsloai">
                <table>
                    <tr>
                        
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>KHÁCH HÀNG</th>
                        <th>SỐ LƯỢNG HÀNG</th>
                        <th>GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT HÀNG</th>
                        <th>THAO TÁC</th>
                    </tr>
                    <?php
                        foreach ($listbill as $bill){
                            extract($bill);
                            $kh=$bill["bill_name"].'
                            <br> '.$bill["bill_email"].'
                            <br> '.$bill["bill_address"].'
                            <br> '.$bill["bill_tel"];
                            $ttdh=get_ttdh($bill["bill_status"]);
                            $countsp=loadall_cart_count($bill["id"]);
                            echo '<tr>';
                            
                            echo '        <td>DH-'.$bill['id'].'</td>';
                            echo '        <td>'.$kh.'</td>';
                            echo '        <td>'.$countsp.'</td>';
                            echo '        <td><strong>'.$bill["total"].'</strong> VND</td>';
                                    
                                    if($bill["bill_status"]==0){
                                            echo'   <td>'.$ttdh.'                                        
                                            
                                            <form method="POST">
                                            <input type="hidden" name="id" value='.$bill["id"].'>
                                           
                                            <button type="submit" name="tt0" value="tt0">
                                                Xử lý
                                            </button>
                                            </form></td>';
                                        } 
                                    if($bill["bill_status"]==1){
                                            echo'   <td>'.$ttdh.'                                        
                                            
                                            <form method="POST">
                                            <input type="hidden" name="id" value='.$bill["id"].'>
                                            

                                            <button type="submit" name="tt1" value="tt1">
                                                Vận chuyển
                                            </button>
                                            </form></td>';
                                        } 
                                    if($bill["bill_status"]==2){                                                                                   
                                            echo'   <td>'.$ttdh.' 
                                            
                                            <form method="POST">
                                            <input type="hidden" name="id" value='.$bill["id"].'>
                                            

                                            <button type="submit" name="tt2" value="tt2">
                                                Đã giao hàng
                                            </button>
                                            </form></td>';
                                        }
                                    if($bill["bill_status"]==3 || $bill["bill_status"]==4){
                                            echo'   <td>'.$ttdh.' </td>';
                                        }

                            echo'<td>'.$bill["ngaydathang"].'</td>';
                            echo'<td>
                                <form action="index.php?act=chitietdonhang" method="POST" >
                                    <input type="hidden" name="id" value='.$bill["id"].'>
                                   

                                    <button type="submit" class="btn btn-info mr-3" name="view" value="View">
                                            Chi tiết
                                    </button>
                                </form>
                                <form method="POST" >
                                    <input type="hidden" name="id" value='.$bill["id"].'>
                                 

                                    <button type="submit"  name="cancel" value="cancel">
                                        Hủy
                                    </button>
                                </form>
                            </td>';
                            echo'    </tr>';

                            if(isset($_REQUEST['cancel'])){
                                $sql = "UPDATE bill SET bill_status = 4 WHERE id = ".$_REQUEST['id'];
                                pdo_query_one($sql) ;
                                echo '<meta http-equiv="refresh" content="0;URL=index.php?act=listbill">';
                            }

                            if(isset($_REQUEST['tt0'])){
                                $sql = "UPDATE bill SET bill_status = 2 WHERE id = ".$_REQUEST['id'];
                                pdo_query_one($sql) ;
                                    //  echo '<meta http-equiv="refresh" content="0;URL=?updated">';
                                echo '<meta http-equiv="refresh" content="0;URL=index.php?act=listbill">';
                                  
                            }
                            if(isset($_REQUEST['tt1'])){
                                $sql = "UPDATE bill SET bill_status = 2 WHERE id = ".$_REQUEST['id'];
                                pdo_query_one($sql);
                                echo '<meta http-equiv="refresh" content="0;URL=index.php?act=listbill">';
                                 
                            }
                            if(isset($_REQUEST['tt2'])){
                                $sql = "UPDATE bill SET bill_status = 3 WHERE id = " .$_REQUEST['id'];
                                pdo_query_one($sql);
                                    echo '<meta http-equiv="refresh" content="0;URL=index.php?act=listbill">';
                                   
                            }
                          
                        }
                        
                    ?>

                </table>
            </div>
            <!-- <div class="row mb10-btn">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
            </div> -->
        </div>
    </div>
</div>