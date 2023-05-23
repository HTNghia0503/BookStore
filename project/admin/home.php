<div class="boxcenter">
    <div class="row">

        <div class="row mb">
            <div class="boxtrai mr">
                <div class="row mb">
                    <div class="boxtitle">TÓM TẮT</div>
                    <div class="boxcontent">
                        <div class="boxcontent--summary" title="SÁCH">                            
                            <br><i class="fa-solid fa-book-open fa-2xl"></i> 
                            <div class="boxcontent--sum"><?=$sumOfSPNum?></div><br>  
                        </div>
                        <div class="boxcontent--summary" title="DANH MỤC">
                            <br><i class="fa-solid fa-rectangle-list fa-2xl"></i> 
                            <div class="boxcontent--sum"><?=$sumOfDMNum?></div><br> 
                        </div>
                        <div class="boxcontent--summary" title="KHÁCH HÀNG">
                            <br><i class="fa-solid fa-users fa-2xl"></i> 
                            <div class="boxcontent--sum"><?=$sumOfTKNum?></div><br> 
                        </div>
                        <div class="boxcontent--summary" title="BÌNH LUẬN">
                            <br><i class="fa-solid fa-comment-dots fa-2xl"></i> 
                            <div class="boxcontent--sum"><?=$sumOfBLNum?></div><br>
                        </div>
                        <div class="boxcontent--summary" title="ĐƠN HÀNG">
                            <br><i class="fa-solid fa-envelopes-bulk fa-2xl"></i>
                            <div class="boxcontent--sum"><?=$sumOfDHNum?></div><br>
                        </div>
                        <div class="boxcontent--summary" title="TIN TỨC">
                            <br><i class="fa-solid fa-newspaper fa-2xl"></i> 
                            <div class="boxcontent--sum"><?=$sumOfTTNum?></div><br>
                        </div>

                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">MỐC THỜI GIAN</div>
                    <div class="boxcontent2 menudoc">
                        <!-- <input type="time" name="" id=""> -->
                        <!-- <input type="date" name="" id=""> -->
                        <?php                            
                            echo "<div class='menudoc--time'>
                                <div>Tháng $monVal</div><br>
                                <div>Còn: $numDaysConLaiOfMon </div>
                                <div>/$numDaysOfMon ngày</div>                                
                                <div id='countTime'></div>
                            </div>";                          
             
                        ?>
                        <script type="text/javascript">
                            var count_id= "<?php echo $date_today; ?>"; //send to home.js
                        </script>
                        

                    </div>
                    <div class="boxfooter"></div>
                </div>
                <div class="row">
                    <div class="boxtitle">GHI CHÚ</div>
                    <div class="boxcontent">
                        <textarea name="" id="" cols="35" rows="10">
                        </textarea>              
                    </div>
                </div>

            </div>

            <div class="boxphai">
                <div class="row">
                    <div class="banner">
                        <img src="" alt="">
                    </div>
                </div>
                <div class="row">
                    
                    <div class="boxAFunction boxAd" title="DANH MỤC">                        
                        <a  class="row_aFunctionAd" href="index.php?act=adddm">
                            <div class="row_imgAFuntionAd"><img src="icon/dmIndex.png" alt=""></div>
                            <div>DANH MỤC</div>
                        </a>
                    </div>
                    <div class="boxAFunction boxAd" title="SÁCH">            
                        <a class="row_aFunctionAd" href="index.php?act=addsp">
                            <div class="row_imgAFuntionAd"><img src="icon/sIndex.png" alt=""></div>
                            <div>SÁCH</div>
                        </a>
                    </div>
                    <div class="boxAFunction boxAd" title="KHÁCH HÀNG">
                        <a class="row_aFunctionAd" href="index.php?act=dskh">
                            <div class="row_imgAFuntionAd"><img src="icon/khIndex.png" alt=""></div>
                            <div>KHÁCH HÀNG</div>
                        </a>
                    </div>
                    <div class="boxAFunction boxAd" title="BÌNH LUẬN">
                        <a class="row_aFunctionAd" href="index.php?act=dsbl">
                            <div class="row_imgAFuntionAd"><img src="icon/blIndex.png" alt=""></div>
                            <div>BÌNH LUẬN</div>
                        </a>
                    </div>
                    
                    <div class="boxAFunction boxAd" title="THỐNG KÊ" >
                        <a class="row_aFunctionAd" href="index.php?act=thongke">
                            <div class="row_imgAFuntionAd"><img src="icon/tkIndex.png" alt=""></div> 
                            <div>THỐNG KÊ</div>
                        </a>    
                                             
                    </div> 
                    
                    <div class="boxAFunction boxAd" title="ĐƠN HÀNG">
                        <a class="row_aFunctionAd" href="index.php?act=listbill">
                            <div class="row_imgAFuntionAd"><img src="icon/dhIndex.png" alt=""></div>
                            <div>ĐƠN HÀNG</div>
                        </a>
                    </div>
                    <div class="boxAFunction boxAd" title="TIN TỨC">
                        <a class="row_aFunctionAd" href="index.php?act=addtt">
                            <div class="row_imgAFuntionAd"><img src="icon/ttIndex.png" alt=""></div>
                            <div>TIN TỨC</div>
                        </a>
                    </div>
                    <div class="boxAFunction boxAd" title="THOÁT" >
                        <a class="row_aFunctionAd" href="../view/index.php?act=thoat">
                            <div class="row_imgAFuntionAd"><img src="icon/tIndex.png" alt=""></div>
                            <div>THOÁT</div>                      
                        </a>
                    </div>

                    
                </div>


            </div>


        </div>

    </div>

</div>