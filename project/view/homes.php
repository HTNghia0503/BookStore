<div class="boxcenter">
    <div class="row">      

        <div class="row mb">
            <div class="boxtrai mr">
                <?php
                    include "boxleft.php";
                ?>
                <script>
                    $(document).ready(function(){
                        $('[data-toggle="tooltip"]').tooltip(); 
                    });
                </script> 
                
            </div>

            <div class="boxphai">
                <div class="row">
                    <div class="banner">
                     <!-- Slideshow container -->
                        <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                        <!-- <div class="numbertext">1 / 3</div> -->
                        <img src="../upload/slideshow_1.jpg" alt="" style="width:100%">
                        <div class="text">Sách Mới Tháng 3</div>
                        </div>

                        <div class="mySlides fade">
                        <!-- <div class="numbertext">2 / 3</div> -->
                        <img src="../upload/slideshow_4.jpg" style="width:100%">
                        <div class="text">Cô Gái Nơi Xứ Ngoài</div>
                        </div>

                        <div class="mySlides fade">
                        <!-- <div class="numbertext">3 / 3</div> -->
                        <img src="../upload/slideshow_2.jpg" style="width:100%">
                        <div class="text">Thám Tử Lừng Danh - Conan</div>
                        </div>

                        <!-- Next and previous buttons -->
                        <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $i= 0;
                        foreach ($spMore as $sp) {
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
                                    <a  class="row_a-name" data-toggle="tooltip" href="'.$linksp.'" title="'.$name.'">'.$name.'</a>
                                    <p class="boxsp-gia">'.number_format($price, 3).'đ</p>
                                    <span class="boxsp-star">4.5<i class="fas fa-star"></i></span>
                                    <br>
                                    <div class="row btnaddtocart">
                                        <form action="index.php?act=addtocart" method="post">
                                            <input type="hidden" name="id" value="'.$id.'">
                                            <input type="hidden" name="name" value="'.$name.'">
                                            <input type="hidden" name="img" value="'.$img.'">
                                            <input type="hidden" name="price" value="'.$price.'">
                                            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                        </form>
                                    </div>
                                </div>';
                            $i+=1;
                        }
                        
                    ?>        
                    
                </div>

                <div class="row btn">
                    <a href='index.php?act=more&num=<?=$i+4?>#loadSPMore'>
                        <input class="loadSPMore" id="loadSPMore" type="button" value="Xem thêm" >
                    </a>
                    <input type="hidden" name="" id='endSPMore' value="<?=$endSPMore?>">                    
                </div>
                
        
                
            </div>
            
        </div>
  
    </div>

</div>
