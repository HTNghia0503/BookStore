<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
        <hr class="hr-pub">
    </div>
    <div class="boxcenter">
    <div class="row frmcontent">
        <div class="row m10 frmdsloai">
            <table>
                <tr>
                    <!-- <th> <td><input type="checkbox" name="" id=""></td></th> -->
                    <th>MÃ BÌNH LUẬN</th>
                    <th>NỘI DUNG</th>
                    <th>MÃ TÀI KHOẢN</th>
                    <th>MÃ SẢN PHẨM</th>
                    <th>NGÀY GIỜ BÌNH LUẬN</th>
                    <th></th>
                </tr>
                <?php
                    foreach($listBinhLuan as $binhLuan){
                        extract($binhLuan);
                        $suaBL= "index.php?act=suabl&id=".$id;
                        $xoaBL= "index.php?act=xoabl&id=".$id;
                        echo '<tr>
                               
                                <td>'.$id.'</td>
                                <td>'.$noidung.'</td>
                                <td>'.$nameuser.'</td>
                                <td>'.$idpro.'</td>
                                <td>'.$ngaybinhluan.'</td>                        
                                <td>
                                    <a href="'.$xoaBL.'"><input type="button" value="Xóa"></a>
                                </td>
                            </tr>';
                    }
                ?>       

            </table>
            <!--ben ngoai this DIV, the BR is not apply-->
            <br>
            <br>
        </div>
        

        <!-- <div class="row mb10-btn">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            
        </div> -->
        <hr class="hr-pub end"> 
    </div>
    </div>
</div>