<div class="boxcenter">
    <div class="row mb">
        <div class="boxtrai mr">
            <?php include "../view/boxleft.php" ?>
        </div>
        <div class="boxphai">
            <div class="row mb">
            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row boxcontent cart">
                <table>

                    <?php
                        viewcart(1)
                    ?>
                </table>
            </div>
            </div>
            <div class="row mb bill">
                <a href="../view/index.php"><input type="button" value="TIẾP TỤC CHỌN HÀNG"></a>
                <a href="index.php?act=bill"><input type="button" value="THANH TOÁN"></a> 
                <a href="index.php?act=delcart"><input type="button" value="XÓA ĐƠN HÀNG"></a>
            </div>
        </div>
    </div>
</div>