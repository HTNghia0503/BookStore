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
                        QUÊN MẬT KHẨU
                    </div>
                    <div class="row boxcontent formtaikhoan">
                        <form action="index.php?act=quenmk" method="post" >
                            <div class="row mb10">
                                Email 
                                <input type="email" name="email">
                            </div>                            
                            <div>
                                <input type="submit" value="Gửi" name="guiemail">
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