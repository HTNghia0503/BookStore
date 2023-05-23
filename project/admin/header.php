<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> -->
    
    
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/list.css">    -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/add.css">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css">
</head>
<body>
    <div class="boxcenter">
        <div class="row mb headeradmin">
           
            <h3 id='nameAd'>Xin chào, Quản trị viên</h3>
        </div>
    
        <div class="row mb menu">
            <ul>
                <li><a href="index.php"></a></li>
                <li><a href="index.php?act=adddm">Danh mục</a></li>
                <li><a href="index.php?act=addsp">Sản Phẩm</a></li>
                <li><a href="index.php?act=dskh">Khách hàng</a></li>
                <li><a href="index.php?act=dsnv">Nhân viên</a></li>
                <li><a href="index.php?act=dsbl">Bình luận</a></li>
                <li><a href="index.php?act=thongke">Thống kê</a></li>
                <li><a href="index.php?act=listbill">Đơn hàng</a></li>
                <li><a href="index.php?act=addtt">Tin tức</a></li>
                <li><a href="../view/index.php?act=thoat">Thoát</a></li>
            </ul>
            <ul class="mb menu-second">
                <div class="menu-second--fleft">
                    <!-- <li><a href="index.php?act=thongke">SáchS</a></li> -->
                    <li><a href="index.php"><i class="fa-solid fa-book"></i></a></li>
                    <!-- <li><a href="index.php"><i class="fa-sharp fa-regular fa-book-open-cover menu-icon"></i></a></li> -->
                </div>            
                <li>
                    <form action="#" class="menu-second--form">
                        <!-- <input class="menu-second--input" type="text" placeholder="Tìm kiếm..." name="search"> -->
                        <!-- <button class="menu-second--search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button> -->
                    </form>
                </li> 
                <div class="menu-second--fright">
                    <!-- <li><a href="index.php?act=cart"><i class="fa-solid fa-cart-shopping menu-icon"></i></a></li> -->
                    <li><a href="../view/index.php?act=edit_taikhoan"><i class="fa-regular fa-user menu-icon"></i></a></li>                                           
                    <li title="Thoát khỏi trang admin"><a href="../view/index.php">
                        <i class="fa-solid fa-right-from-bracket"></i></a>
                    </li>               
                </div>  
            </ul>
   
        </div>
    </div>
</body>
</html>