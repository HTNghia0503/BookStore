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
                    <div class="boxtitle"> 
                        <a class= "del_under" href="index.php">Trang chủ</a> > 
                        <a class= "del_under" href="index.php?act=tintuc">TIN TỨC</a>
                    </div>
                    <div class="row boxcontent-tintuc">
                        <?php  
                            $i=0;                          
                            foreach ($dstt as $tt) {
                                extract($tt);
                                $linksp="index.php?act=tintucct&idtt=".$id;
                                $hinh= $img_path.$img;
       
                                echo '<div class="boxnews">
                                        <div class="boxnews-left-img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                                        <div class="boxnews-right-infor">
                                            <a class="boxnews-title" href="'.$linksp.'">'.$title.'</a>
                                            <p class="boxnews-time">'.$time.' 
                                            | <a href="index.php?act=tintuc">TIN TỨC</a> | <i>0 Bình luận</i></p>
                                            <p class="boxnews-mota">'.$mota.'</p>
                                        </div>
                                        <br>
                                        
                                    </div>';
                                $i+=1;
                            }
                        ?>
                    </div>
                </div>
                
            </div>


        </div>

    </div>

</div>