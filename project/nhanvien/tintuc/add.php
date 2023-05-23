<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MỚI TIN TỨC</h1>
        <hr class="hr-pub">
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addtt" method="post" enctype="multipart/form-data">
                        
            <div class="row mb10">
                Hình
                <input type="file" name="hinh" class="tt_img">
            </div>
            <div class="row mb10">
                Tiêu đề
                <input type="text" name="tieuDe" class="tt_title" 
                placeholder="Sự kiện ra mắt sách của tác giả ..." >
            </div>
            <div class="row mb10">
                Mô tả
                <textarea cols="30" rows="10" name="moTa" class="tt_description"
                placeholder="Nội dung chi tiết"></textarea>
            </div>
            <div class="row mb10">
                Thời gian
                <input type="text" name="thoiGian" class="tt_time"
                placeholder="2022-03-28 17:28:40" >
            </div>
            <div class="row mb10-btn">
                <input type="submit" name='themmoi' value="THÊM MỚI" class="tt_submit">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listtt">
                    <input type="button" value="DANH SÁCH">
                </a>
            </div>
            <br>
            <br>
            <hr class="hr-pub">
            <?php
                if(isset($thongbao) && ($thongbao!="")){
                    echo "<i class='tt_Success'>$thongbao<i>";
                }
            ?>
            
        </form>
    </div>
</div>