<?php
    if (is_array($sanpham)) {
        extract($sanpham);
        $namesp= $name; //haven't in thay ho, trùng name of DM table
        $idsp= $id;
    }
    $hinhpath = "../upload/" . $img;

    if (is_file($hinhpath)) {
        $hinh = "<img src='" . $hinhpath . "' height='100'>";
    } else {
        $hinh = "no img";
    }
?>
<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT SẢN PHẨM SÁCH</h1>
        <hr class="hr-pub">
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Danh mục
                <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            if($iddm== $id){
                                $s="selected";
                            }else{
                               $s="";
                            } 
                            echo '<option value="'.$id.'"'.$s.'> '.$name.'</option>';
                        }
                    ?>
                </select>
                <!-- <input type="text" name="masp" disabled> -->
            </div>
            <div class="row mb10">
                Tên sách
                <input type="text" name="tensp" value="<?= $namesp ?>">
            </div>
            <div class="row mb10">
                Giá sách
                <input type="text" name="giasp" value="<?= $price ?>">
            </div>
            <div class="row mb10">
                Hình
                <input type="file" name="hinh">
                <?=$hinh?>
            </div>
            <div class="row mb10">
                Mô tả
                <textarea cols="30" rows="10" name="mota"> <?= $mota?> </textarea>
            </div>
            <div class="row mb10-btn">
                <input type="hidden" name="id" value="<?=$idsp?>" >
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp">
                    <input type="button" value="DANH SÁCH">
                </a>
            </div>
            <br>
            <br>
            <hr class="hr-pub">

        </form>
    </div>
</div>