<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MỚI LOẠI SÁCH</h1>
        <hr class="hr-pub">
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=adddm" method="post">
            <div class="row mb10">
                Mã loại: 
                <input id="auto-id" type="text" name="maloai" id="" disabled>
            </div>
            <br><br>
            <div class="row mb10">
                Tên loại: 
                <input type="text" name="tenloai" id="">
            </div>
            <br>
            <br>
            <div class="row mb10-btn">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>

            <?php
                if(isset($thongbao) && ($thongbao!="")) {
                    echo '<br><br><i class="fa-solid fa-check"></i> ';
                    echo $thongbao;
                }else{
                    // echo '<i class="fa-regular fa-circle-xmark"></i>';
                }
            ?>
            <br>
            <br>
            <br>
            <br>
            <br>
            <hr class="hr-pub">

        </form>

    </div>

</div>