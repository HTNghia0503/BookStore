<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH TÀI KHOẢN KHÁCH HÀNG</h1>
        <hr class="hr-pub">
    </div>
    <div class="boxcenter">
    <div class="row frmcontent">
        <div class="row m10 frmdsloai">
            <table>
                <tr>
                    <!-- <th><td><input type="checkbox" name="" id=""></td></th> -->
                    <th>MÃ TÀI KHOẢN</th>
                    <th>TÊN ĐĂNG NHẬP</th>
                    <th>MẬT KHẨU</th>
                    <th>EMAIL</th>
                    <th>ĐỊA CHỈ</th>
                    <th>ĐIỆN THOẠI</th>
                    <th>VAI TRÒ</th>
                    <th></th>
                </tr>
                <?php
                    foreach($listTaiKhoan as $taiKhoan){
                        extract($taiKhoan);
                        $suaTK= "index.php?act=suakh&id=".$id;
                        $xoaTK= "index.php?act=xoakh&id=".$id;
                        echo '<tr>
                                
                                <td>'.$id.'</td>
                                <td>'.$user.'</td>
                                <td>'.$pass.'</td>
                                <td>'.$email.'</td>
                                <td>'.$address.'</td>
                                <td>'.$tel.'</td>
                                <td>'.$role.'</td>
                                <td><a href="'.$suaTK.'"><input type="button" value="Sửa"></a>
                                    <a href="'.$xoaTK.'"><input type="button" value="Xóa"></a>
                                </td>
                            </tr>';
                    }
                ?>       

            </table>
            <!--ben ngoai this DIV, the BR is not apply-->
            <br>
            <br>
        </div>
        

        <div class="row mb10-btn">
            <!-- <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn"> -->
            <a href="index.php?act=addkh"><input type="button" value="Nhập thêm"></a>
        </div>
        <hr class="hr-pub end"> 
    </div>
    </div>
</div>