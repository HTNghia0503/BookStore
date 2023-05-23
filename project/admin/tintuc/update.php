<?php
    if (is_array($tinTuc)) {
        extract($tinTuc);
        
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
        <h1>CẬP NHẬT TIN TỨC LIÊN QUAN SÁCH</h1>
        <hr class="hr-pub">
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatett" method="post" enctype="multipart/form-data">
            
            <div class="row mb10">
                Mã tin tức
                <input type="text" name="matintuc" value="<?= $id ?>">
            </div>
            <div class="row mb10">
                Hình
                <input type="file" name="hinh">
                <?=$hinh?>
            </div>
            <div class="row mb10">
                Tiêu đề
                <input type="text" name="tieude" value="<?= $title ?>">
            </div>
            <div class="row mb10">
                Mô tả
                <textarea cols="30" rows="10" name="mota"> <?= $mota?> </textarea>
            </div>
            <div class="row mb10">
                Thời gian
                <input type="datetime" name="thoigian" value="<?= $time ?>">
            </div>
            <div class="row mb10-btn">
                <!-- <input type="hidden" name="id" value="<?=$idsp?>" > -->
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listtt">
                    <input type="button" value="DANH SÁCH">
                </a>
            </div>
            <br>
            <br>
            <hr class="hr-pub">

        </form>
    </div>
</div>