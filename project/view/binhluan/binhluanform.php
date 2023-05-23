<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
        $nameuser=$_SESSION['user']['user'];
    }
    
    $idpro=$_REQUEST['idpro'];
    $dsbl= loadall_binhluan($idpro);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../view/css/style.css">
    <style>
        .binhluan table{
            width: 90%;
            margin-left: 5%;
        }

        .binhluan table td:nth-child(1){
            width: 50%;
        }

        .binhluan table td:nth-child(2){
            width: 20%;
        }

        .binhluan table td:nth-child(3){
            width: 30%;
        }
    </style>
</head>
<body>

<div class="row mb">
                    <div class="boxtitle">BÌNH LUẬN</div>
                    <div class="boxcontent2 binhluan">
                    <table>
                        <?php
                            
                            foreach($dsbl as $bl){
                                extract($bl);
                                
                                echo '<tr><td>'.$noidung.'</td>';
                                echo '<td>'.$nameuser.'</td>';
                                echo '<td>'.$ngaybinhluan.'</td></tr>';
                            }
                        ?>
                    </table>
                    </div>
                    <div class="boxfooter binhluanform">
                            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                                <input type="hidden" name="idpro" value="<?=$idpro?>">
                                <?php if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){?>
                                <input type="text" name="noidung">
                                <input type="submit" name="guibinhluan" value="Gửi bình luận">
                                <?php }else{ 
                                    ?>
                                    <div class="thongbao">
                                       Vui lòng đăng nhập để bình luận.
                                    </div>
                                    <?php } ?>
                            </form>
                    </div>

                    <?php
                        if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
                            $noidung=$_POST['noidung'];
                            $idpro=$_POST['idpro'];                       
                            $nameuser=$_SESSION['user']['user'];
                            date_default_timezone_set("Asia/Ho_Chi_Minh");       
                            $ngaybinhluan=date('H:i:s d/m/Y');
                            insert_binhluan($noidung,$nameuser,$idpro,$ngaybinhluan);
                            header("Location: ".$_SERVER['HTTP_REFERER']);
                        }
                    ?>
                </div>
</body>
</html>