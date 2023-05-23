
<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH TIN TỨC</h1>
        <hr class="hr-pub">
    </div>
    <div class="row frmcontent">
        <div class="row m10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ TIN</th>
                    <th>HÌNH ẢNH</th>
                    <th>TIÊU ĐỀ</th>
                    <th>MÔ TẢ</th>
                    <th>THỜI GIAN</th>
                    <th></th>
                </tr>
                <?php
                    foreach($listTinTuc as $tt){
                        extract($tt);
                        $suasp= "index.php?act=suatt&id=".$id;
                        $xoasp= "index.php?act=xoatt&id=".$id;
                        $hinhpath= "../upload/".$img;
                        
                        if(is_file($hinhpath)){                            
                            $hinh= "<img src='".$hinhpath."' height='100'>";
                        }else {
                            $hinh= "no img";
                        }



                        echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>                               
                                <td>'.$hinh.'</td>
                                <td>'.$title.'</td>
                                <td>'.$mota.'</td>
                                <td>'.$time.'</td>
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
            <a href="index.php?act=addtt">
                <input type="button" value="Nhập thêm">
            </a>            
        </div>

        <!--Space between content && footer-->
        <div class="row mb10">
            <hr class="hr-pub end">
        </div>
        
     
    </div> <!--row content-->
    
</div> <!--row-->