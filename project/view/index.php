<?php
    session_start();
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include "../model/taikhoan.php";    
    include "../model/cart.php";
    include "../view/header.php";  
    include "../model/tintuc.php";
    include "../global.php";
 

    // Kiểm tra tồn tại -> nếu ko có -> khởi tạo (Nghĩa)
    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

    $spnew= loadAll_sanpham_home();
    $dsdm= loadAll_danhmuc();
    $dstop10= loadAll_sanpham_top10();
    //nam15Apr


    date_default_timezone_set('Asia/Ho_Chi_Minh');
    //controller
    if(isset($_GET['act'])){
        $act= $_GET['act'];
        switch ($act) {          
            case 'sanpham':
                if(isset($_POST['kyw']) && ($_POST['kyw']!="")){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];                    
                    
                }else{
                    $iddm=0;                   
                }
                $dssp=loadAll_sanpham($kyw,$iddm);
                $tendm=load_ten_dm($iddm);
                include "../view/sanpham.php";
                break;
                case 'sanphamct':
                    if(isset($_GET['idsp']) && ($_GET['idsp']>0)){
                        $id=$_GET['idsp'];
                        $onesp= loadone_sanpham($id);
                        extract($onesp);
                        $sp_cung_loai=load_sanpham_cungloai($id,$iddm);
                       
                        include "../view/sanphamct.php";
                    }else{
                        include "../view/home.php";                    
                    }
                   
                    break;
                case 'dangky':
                if(isset($_POST['dangky']) && ($_POST['dangky'])){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    insert_taikhoan($email, $user, $pass);
                    $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập lại để bình luận hoặc đặt hàng";
                }

                    include "../view/taikhoan/dangky.php";
                    break;
                case 'dangnhap':
                    if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                        
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $checkuser= checkuser($user, $pass);
                        if(is_array($checkuser)){
                            $_SESSION['user']=$checkuser;                    
                            // $thongbao="Đã đăng nhập thành công.";
                            header('Location: index.php');
                        }else{
                            $thongbao="Tài khoản không tồn tại. Vui lòng kiểm tra lại! ";
                        }
                }
                    include "../view/taikhoan/dangky.php";
                    break;
                case 'edit_taikhoan':
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                        $email=$_POST['email'];
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];                        
                        $address=$_POST['address'];
                        $tel=$_POST['tel'];
                        $id=$_POST['id'];
                        
                        update_taikhoan($id,$user,$pass,$email,$address,$tel);
                        $thongbao="Đã cập nhật thành công! ";
                        $_SESSION['user']=checkuser($user,$pass);  
                        // header('Location: index.php?act=edit_taikhoan');
                        
                        
                }
                    include "../view/taikhoan/edit_taikhoan.php";
                    break; 
                case 'doimatkhau':
                if(isset($_POST['doimatkhau']) && ($_POST['doimatkhau'])){
                    $user=$_POST['user'];
                    $passcu=$_POST['passcu'];                                         
                    
                    $checkuser=checkuser($user,$passcu);
                    if(is_array($checkuser)){
                       
                        $passmoi=$_POST['passmoi'];
                        $xacnhanpass=$_POST['xacnhanpass'];
                        
                        if($passmoi==$xacnhanpass){
                            $id=$_POST['id'];
                            update_matkhau($id,$passmoi);
                            
                            // header('Location: index.php?act=doimatkhau');
                            $thongbao="Đã đổi mật khẩu thành công.";
                        }
                        else{
                           $thongbao="Xác nhận mật khẩu của bạn chưa đúng. Vui lòng nhập lại"; 
                        }
                    }else{
                        $thongbao="Mật khẩu của bạn chưa đúng. Vui lòng nhập lại";
                    }
                }

                    include "../view/taikhoan/doimk.php";
                    break;
                case 'quenmk':
                    if(isset($_POST['guiemail']) && ($_POST['guiemail'])){
                        $email=$_POST['email'];                                         
                        
                        $checkemail=checkemail($email);
                        if(is_array($checkemail)){
                            $thongbao="Mật khẩu của bạn là: ".$checkemail['pass'];
                        }else{
                            $thongbao="Email này không tồn tại";
                        }                       
                }   
                include "../view/taikhoan/quenmk.php";               
                    break;     
                case 'gioithieu':
                    include "../view/gioithieu.php";
                    break;
                case 'thoat':
                    session_unset();
                    header('Location: index.php');
                    include "../view/thoat.php";
                    break;
                case 'admin':
                    include "../admin/index.php";
                    break;
                case 'lienhe':
                    include "../view/lienhe.php";
                    break;                
                // Nam 28Mar Start
                case 'tintuc':                    
                    $dstt=loadAll_tintuc_home();
                    include "../view/tintuc.php";
                    break;
                case 'tintucct':
                    if(isset($_GET['idtt']) && ($_GET['idtt']>0)){
                        $id=$_GET['idtt'];
                        $onett= loadone_tintuc($id);
                        extract($onett);
      
                        include "../view/tintucct.php";
                    }else{
                        include "../view/tintuc.php";                    
                    }                  
                    break;
                // Nam 28Feb End
                // Begin: Xử lý giỏ hàng (Nghĩa)
                case 'addtocart':
                    // Đưa thông tin sản phẩm từ form vào
                    if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                        $id=$_POST['id'];
                        $name=$_POST['name'];
                        $img=$_POST['img'];
                        $price=$_POST['price'];
                        $soluong=1;
                        $ttien=$soluong * $price;
                        $spadd=[$id, $name, $img, $price, $soluong, $ttien];
                        array_push($_SESSION['mycart'], $spadd);
                    }
                    include "../view/cart/viewcart.php";
                    break;
                case 'delcart':
                    if(isset($_GET['idcart'])) {
                        array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
                    } else {
                        $_SESSION['mycart']=[];
                    }
                    header('Location: index.php?act=viewcart');
                    break;
                case 'viewcart':
                    include "../view/cart/viewcart.php";
                    break;
                case 'bill':
                    include "../view/cart/bill.php";
                    break;
                case 'billconfirm':
                    // Tạo bill
                    if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])) {
                        if(isset($_SESSION['user'])) $iduser=$_SESSION['user']['id'];
                        else $id = 0;
                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $address=$_POST['address'];
                        $tel=$_POST['tel'];
                        $pttt=$_POST['pttt'];
                        $ngaydathang=date('Y/m/d H:i:s');
                        $tongdonhang=tongdonhang();
                        // Tạo bill
                        $idbill=insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang);

                        // Insert into cart: $_SESSION['mycart'] & idbill
                        foreach ($_SESSION['mycart'] as $cart){
                            insert_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                        }
                        // Xóa
                        $_SESSION['cart']=[];
                    }
                    $bill=loadone_bill($idbill);
                    $billct=loadall_cart($idbill);
                    include "../view/cart/billconfirm.php";
                    break;
                case 'mybill':
                    $listbill=loadall_bill($_SESSION['user']['id']);
                    include "../view/cart/mybill.php";
                    break;
                //nam15Apr
                case 'more':
                    $sPNum= getSPNum();
                    $endSPMore= 0; //sp end
                    if(isset($_GET['num']) && ($_GET['num']>0)){
                        $countSPNum= $_GET['num'];
                        if($countSPNum<= $sPNum){
                            $spMore= loadAll_sanpham_home_more($countSPNum);                            
                        }else{
                            echo "here 1111";
                            $endSPMore= 1; 
                            $spMore= loadAll_sanpham_home_more($_GET['num']);
                        }
                        include "../view/homes.php";                                   
                    }else{
                        include "../view/home.php";                                   
                    }
            
           default:
           #code....
           break;
        }
    }else {
        include "../view/home.php";
        
    }

    include "../view/footer.php";
    

    //include "home.php";
?>