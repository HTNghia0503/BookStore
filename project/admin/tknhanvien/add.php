<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MỚI TÀI KHOẢN NHÂN VIÊN</h1>
        <hr class="hr-pub">
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addnv" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Vai trò   
                <input type="text" name="vatro"  value="nhân viên" disabled ">  
            </div>
            <div class="row mb10">
                Tên tài khoản   
                <input type="text" name="tentk"  placeholder="">
            </div>
            <div class="row mb10">
                Mật khẩu
                <input type="text" name="matkhau" >
            </div>
            <div class="row mb10">
                Email
                <input type="text" name="email" >
            </div>
            <div class="row mb10">
                Địa chỉ
                <input type="text" name="diachi" >
            </div>
            <div class="row mb10">
                Điện thoại
                <input type="text" name="sdt" >
            </div>
            
            
            <div class="row mb10-btn">
                <input type="submit" name='themmoi' value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=dsnv">
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