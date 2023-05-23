<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MỚI SẢN PHẨM SÁCH</h1>
        <hr class="hr-pub">
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Danh mục
                <select name="iddm">
                    
                    <?php
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
                </select>
                <!-- <input type="text" name="masp" disabled> -->
            </div>
            <div class="row mb10">
                Tên sách
                <input type="text" name="tensp" >
            </div>
            <div class="row mb10">
                Giá sách
                <input type="text" name="giasp" >
            </div>
            <div class="row mb10">
                Hình
                <input type="file" name="hinh" >
            </div>
            <div class="row mb10">
                Mô tả
                <textarea cols="30" rows="10" name="mota" ></textarea>
            </div>
            <div class="row mb10-btn">
                <input type="submit" name='themmoi' value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp">
                    <input type="button" value="DANH SÁCH">
                </a>
            </div>
            <br>
            <br>
            <hr class="hr-pub">
            <?php
                if(isset($thongbao) && ($thongbao!="")){
                    echo $thongbao;
                }
            ?>
            
        </form>
    </div>
</div>