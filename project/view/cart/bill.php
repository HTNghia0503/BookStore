<div class="boxcenter">
    <div class="row mb">
        <div class="boxtrai mr">
            <?php include "../view/boxleft.php"; ?>
        </div>
        <div class="boxphai">
            <form action="index.php?act=billconfirm" method="post">
                <div class="row mb">
                    <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                    <div class="row boxcenter billform">
                        <table>
                            <?php
                                if(isset($_SESSION['user'])){
                                    $name=$_SESSION['user']['user'];
                                    $address=$_SESSION['user']['address'];
                                    $email=$_SESSION['user']['email'];
                                    $tel=$_SESSION['user']['tel'];
                                } else {
                                    $name="";
                                    $address="";
                                    $email="";
                                    $tel="";
                                }
                            ?>

                            <tr>
                                <td>Người đặt hàng</td>
                                <td><input type="text" name="name" value="<?=$name?>" required></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><input type="text" name="address" value="<?=$address?>" required></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email" value="<?=$email?>" required></td>
                            </tr>
                            <tr>
                                <td>Số điện thoại</td>
                                <td><input type="text" name="tel" value="<?=$tel?>" required></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                    <div class="row boxcenter">
                        <table>
                            <tr>
                                <td><input type="radio" name="pttt" checked>Thanh toán khi giao hàng</td>
                                <td><input type="radio" name="pttt" >Chuyển khoản qua ngân hàng</td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <div class="row mb">
                    <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
                    <div class="row boxcenter cart">
                        <table>
                            <?php viewcart(0)?>
                        </table>
                    </div>
                </div>
                <?php if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){?>
                <div class="row mb bill">
                
                    <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
                </div>
                <?php }else{ 
                                    ?>
                                    <div class="thongbao">
                                       Vui lòng đăng nhập để đặt hàng.
                                    </div>
                                    <?php } ?>
            </form>
        </div>
</div>