
<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH LOẠI SÁCH</h1>
        <hr class="hr-pub">
    </div>
    <div class="row frmcontent">
        <div class="row m10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th></th>
                </tr>
                <?php
                    foreach($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        $suadm= "index.php?act=suadm&id=".$id;
                        $xoadm= "index.php?act=xoadm&id=".$id;
                        echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a>
                                    <a href="'.$xoadm.'"><input type="button" value="Xóa"></a>
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
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
        </div>
        <hr class="hr-pub end"> 
    </div>
    
</div>