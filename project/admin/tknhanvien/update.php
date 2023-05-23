<?php
    if (is_array($taikhoannv)) {
        extract($taikhoannv);
    }
?>
<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT TÀI KHOẢN NHÂN VIÊN</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatenv" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Mã tài khoản
                <input type="text" name="id" disabled
                    value="<?php if(isset($id) && ($id!="")) echo $id; ?>">
            </div>
            <div class="row mb10">
                Tên đăng nhập
                <input type="text" name="user" 
                    value="<?php if(isset($user) && ($user!="")) echo $user; ?>">
            </div>
            <div class="row mb10">
                Mật khẩu
                <input type="text" name="pass" 
                    value="<?php if(isset($pass) && ($pass!="")) echo $pass; ?>">
            </div>
            <div class="row mb10">
                Email
                <input type="text" name="email" 
                    value="<?php if(isset($email) && ($email!="")) echo $email; ?>">
            </div>
            <div class="row mb10">
                Địa chỉ
                <input type="text" name="diachi" 
                    value="<?php if(isset($address) && ($address!="")) echo $address; ?>">
            </div>
            <div class="row mb10">
                Điện thoại
                <input type="number" name="sdt" 
                    value="<?php if(isset($tel) && ($tel!="")) echo $tel; ?>">
            </div>
            <div class="row mb10">
                Vai trò
                <input type="text" name="vaitro" 
                    value="<?php if(isset($role) && ($role!="")) echo $role; ?>" readonly>
            </div>
            <div class="row mb10-btn">
                <input type="hidden" name="id" value="<?php if(isset($id) && ($id> 0)) echo $id; ?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=dsnv"><input type="button" value="DANH SÁCH"></a>
            </div>

            <?php
                if(isset($thongbao) && ($thongbao!="")) {
                    echo $thongbao;
                }else{
                    echo "Nhấn vào nút Cập nhật để lưu lại.";
                }
            ?>


        </form>
    </div>



</div>