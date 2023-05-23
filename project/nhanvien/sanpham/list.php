
<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH SẢN PHẨM SÁCH</h1>
        <hr class="hr-pub">
    </div>
    <div class="row frmcontent">
        <div class="row m10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    <th>LƯỢT XEM</th>
                    <th></th>
                </tr>
                <?php
                    foreach($listsanpham as $sanpham){
                        extract($sanpham);
                        $suasp= "index.php?act=suasp&id=".$id;
                        $xoasp= "index.php?act=xoasp&id=".$id;
                        $hinhpath= "../upload/".$img;
                        
                        if(is_file($hinhpath)){                            
                            $hinh= "<img src='".$hinhpath."' height='100'>";
                        }else {
                            $hinh= "no img";
                        }



                        echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$hinh.'</td>
                                <td>'.number_format($price, 3).'đ</td>
                                <td>'.$luotxem.'</td>
                                <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a>
                                    <a href="'.$xoasp.'"><input type="button" value="Xóa"></a>
                                </td>
                            </tr>';
                    }
                ?>       

            </table>
        </div>        
        <div class="row mb10-btn">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addsp">
                <input type="button" value="Nhập thêm">
            </a>            
        </div>

        <!--Space between content && footer-->
        <div class="row mb10">
            <hr class="hr-pub end">
        </div>
        
     
    </div> <!--row content-->
    
</div> <!--row-->