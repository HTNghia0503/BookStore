<div class="boxcenter">
    <div class="row">

        <div class="row mb">
            <div class="boxtrai mr">
                <?php
                    include "boxleft.php";
                ?>
            </div>

            <div class="boxphai ">
                <div class="row mb">
                <?php
                    extract($onett);
                ?>
                    <div class="boxtitle"> 
                        <a class= "del_under" href="index.php">Trang chủ</a> > 
                        <a class= "del_under" href="index.php?act=tintuc">TIN TỨC</a> >
                        <?=$title?>
                    </div>
                    <div class="row boxcontent">
                        <?php                            
                            $img=$img_path.$img;
                            echo '<div class="row mb spct">
                                    <img src="'.$img.'"> </div>';
                            echo $mota;
                        ?>
                    </div>
                </div>

                <script 
                    src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js">
                </script>
                <script>
                    $(document).ready(function(){
                    
                        $("#binhluan").load("../view/binhluan/binhluanform.php", {idpro: <?=$id?>});
                    
                    });
                </script>
                <div class="row" id="binhluan">
                   
                </div>

            </div>


        </div>

    </div>

</div>