<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khách hàng</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> -->
    
    
    <link rel="stylesheet" type="text/css" href="../view/css/footer.css">
    <link rel="stylesheet" type="text/css" href="../view/css/list.css">   
    <link rel="stylesheet" type="text/css" href="../view/css/style.css">
    <link rel="stylesheet" type="text/css" href="../view/css/add.css">
    <link rel="stylesheet" type="text/css" href="../view/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css">
</head>
<body>
    <div class="boxcenter">
        <div class="row mb header">
            <h3>NHÀ SÁCH CTBOOK</h3>       
        </div>
    
        <div class="row mb menu">
            <ul class="mb menu-second">
                <div class="menu-second--fleft">
                    <!-- <li><a href="index.php?act=thongke">SáchS</a></li> -->
                    <li><a href="index.php"><i class="fa-solid fa-book"></i></a></li>
                    <li><a href="index.php"><i class="fa-sharp fa-regular fa-book-open-cover menu-icon"></i></a></li>
                </div>            
                <li>
                    <form action="index.php?act=sanpham" method="post" class="menu-second--form">
                        <input class="menu-second--input" type="text" placeholder="Tìm kiếm..." name="kyw">
                        <button class="menu-second--search" type="submit" name="timkiem" >
                            <i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </li> 
                <div class="menu-second--fright">
                    <!-- <li><a href="index.php?act=thongbao"><i class="fa-regular fa-bell menu-icon"></i></a></li>   -->            
                    <li><a href="index.php?act=viewcart"><i class="fa-solid fa-cart-shopping menu-icon"></i></a></li> 
                </div>  
            </ul>
        </div>
        <div class="row mb navbar">
            <ul>
                <li><a href="index.php"> Trang chủ</a></li>
                <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                <li><a href="index.php?act=tintuc">Tin Tức</a></li>
            </ul>
        </div>
    </div>
</body>
</html>