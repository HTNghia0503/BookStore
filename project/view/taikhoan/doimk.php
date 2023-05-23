<div class="boxcenter">
    <div class="row">
        <div class="row mb">
            <div class="boxtrai mr">
                <?php
                    include "../view/boxleft.php";
                ?>
            </div>

            <div class="boxphai ">
                <div class="row mb">

                    <div class="boxtitle">
                        ĐỔI MẬT KHẨU
                    </div>
                    <div class="row boxcontent formtaikhoan">
                    <?php
                            if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                                extract($_SESSION['user']);
                            }
                        
                        ?>
                        <form action="index.php?act=doimatkhau" method="post" >
                            <div class="row mb10">
                                Mật khẩu cũ
                                <input type="password" name="passcu">
                            </div>
                            <div class="row mb10">
                                Mật khẩu mới
                                <input type="password" name="passmoi">
                            </div>
                           
                            <div class="row mb10">
                                Xác nhận mật khẩu 
                                <input type="password" name="xacnhanpass">
                            </div>
                            <div>
                                <input type="hidden" name="id" value=<?=$id?>>
                                <input type="hidden" name="user" value=<?=$user?>>
                                <input type="submit" value="Cập nhật" name="doimatkhau">
                                <input type="reset" value="Nhập lại">
                            </div>
                        </form>
                        <h2 class="thongbao">
                        <?php
                        
                            if(isset($thongbao)&&($thongbao!="")){
                                echo $thongbao;
                            }
                        
                        ?>
                        </h2>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>