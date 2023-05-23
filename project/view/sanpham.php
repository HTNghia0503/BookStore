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
                    <div class="boxtitle"> SẢN PHẨM <strong><?=$tendm?></strong></div>
                    <div class="row boxcontent">
                        <?php  
                            $i=0;                          
                            foreach ($dssp as $sp) {
                                extract($sp);
                                
                                $linksp="index.php?act=sanphamct&idsp=".$id;                                   
                                $hinh= $img_path.$img;
                                if(($i== 2)|| ($i== 5)||($i== 8)||($i== 11)){
                                    $mr= "";
                                }else{
                                    $mr="mr";
                                }          
                                echo '<div class="boxsp '.$mr.'">
                                        <div class="row_img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                                        
                                        <a  class="row_a-name" href="'.$linksp.'">'.$name.'</a>
                                        <p class="boxsp-gia">'.$price.'đ</p>
                                        <span class="boxsp-star">4.5<i class="fas fa-star"></i></span>
                                        <br>
                                        <input type="button" value="Thêm giỏ hàng">
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