<?php
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    // include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/cart.php";
    include "../model/tintuc.php";         

  
    include "header.php";
    include "../global.php";
    include "home/index.php"; //nam.16Apr

    $spnew= loadAll_sanpham_home();
    $dsdm= loadAll_danhmuc();
    $sumOfSPNum= getSPNum();
    $sumOfDMNum= getDMNum();
    // $sumOfTKNum= getTKNum();
    $sumOfDHNum= getDHNum();
    $sumOfBLNum= getBLNum();
    $sumOfTTNum= getTTNum();
    
    //controller
    if(isset($_GET['act'])){
        $act= $_GET['act'];
        switch ($act) {
            // case 'adddm':

            //     if(isset($_POST['themmoi'])&&($_POST['themmoi'])){ 
            //         $tenloai= $_POST['tenloai'];
            //         $sql= "insert into danhmuc(name) values('$tenloai')";
            //         pdo_execute($sql);
            //         $thongbao= "<i>Thêm thành công</i>";

            //     }
            //     include "danhmuc/add.php";
            //     break;

            // case 'listdm':
            //     $sql= "select * from danhmuc order by id desc";
            //     $listdanhmuc= pdo_query($sql);
            //     include "danhmuc/list.php"; echo "case listdm";
            //     break;
               

            // case 'xoadm':
            //     if(isset($_GET['id']) && ($_GET['id']> 0)){
            //         $sql= "delete from danhmuc where id=".$_GET['id'];
            //         pdo_execute($sql);
            //     }
            //     $sql= "select * from danhmuc order by id desc";
            //     $listdanhmuc= pdo_query($sql);                               
            //     include "danhmuc/list.php";
            //     break;

            // case 'suadm':
            //     if(isset($_GET['id']) && ($_GET['id']> 0)){               
            //         $sql= "select * from danhmuc where id=".$_GET['id'];
            //         $dm= pdo_query_one($sql);
                
            //     }
            //     include "danhmuc/update.php";
            //     break;
            
            // case 'updatedm':
            //     if(isset($_POST['capnhat']) && ($_POST['capnhat'])){  //co ton tai and clicked          
            //         $tenloai= $_POST['tenloai'];
            //         $id=$_POST['id'];
            //         $sql= "update danhmuc set name='".$tenloai."' where id=".$id ;
            //         pdo_execute($sql);
            //         $thongbao= "Cập nhật thành công.";                                                        
            //     }                                
            //     $sql= " select * from danhmuc order by id desc";
            //     $listdanhmuc= pdo_query($sql);
            //     include "danhmuc/list.php";
            //     break;
            
            //controller for sanpham BOOK
            case 'addsp':
                
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    
                    $iddm= $_POST['iddm'];
                    $tensp= $_POST['tensp'];
                    $giasp= $_POST['giasp'];
                    $mota= $_POST['mota'];
                    $hinh= $_FILES['hinh']['name'];
                    
                    $target_dir= "../upload/";
                    $target_file= $target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                        //echo "img";
                    }else{
                        //echo "not img";
                    }

                    insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                    $thongbao= "Thêm sách thành công.";
                }
                $listdanhmuc= loadAll_danhmuc();
                // var_dump($listdanhmuc);
                include "sanpham/add.php";
                break;
            case 'listsp':
                // $sql= "select * from sanpham order by id desc";
                $listsanpham= loadAll_sanpham();
                include "sanpham/list.php"; echo "case listsp";
                break;
            
            case 'xoasp':
                if(isset($_GET['id']) && ($_GET['id']> 0)){
                    delete_sanpham($_GET['id']);
                }
                $listsanpham= loadAll_sanpham();
                include "sanpham/list.php";
                break;
            
            case 'suasp':
                if(isset($_GET['id']) && ($_GET['id']> 0)){
                    $sanpham= loadone_sanpham($_GET['id']);
                }
                $listdanhmuc= loadAll_danhmuc();
                include "sanpham/update.php";
                break;
                        
            case 'updatesp':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id= $_POST['id'];
                    $iddm= $_POST['iddm'];
                    $tensp= $_POST['tensp'];
                    $giasp= $_POST['giasp'];
                    $mota= $_POST['mota'];
                    $hinh= $_FILES['hinh']['name'];
                    
                    $target_dir= "../upload/";
                    $target_file= $target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                        //echo "img";
                    }else{
                        //echo "not img";
                    }
                    update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                    $thongbao= "Cập nhật thành công";
                }
                $listdanhmuc= loadAll_danhmuc();
                $listsanpham= loadAll_sanpham();
                include "sanpham/list.php";
                break;
            // //KHACH HANG - TAI KHOAN
            // case 'dskh':
            //     $listTaiKhoan = loadAll_taikhoan();
            //     include "taikhoan/list.php";
            //     break;
            // case 'addkh':

            //     if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    
            //         $tentk = $_POST['tentk'];
            //         $matkhau = $_POST['matkhau'];
            //         $email = $_POST['email'];
            //         $diachi = $_POST['diachi'];
            //         $sdt = $_POST['sdt'];       

            //         insert_taikhoan_byAD($tentk, $matkhau, $email, $diachi, $sdt);
            //         $thongbao = "Thêm tài khoản thành công.";
            //     }
            //     $listTaiKhoan = loadAll_taikhoan();
            //     // var_dump($listdanhmuc);
            //     include "taikhoan/add.php";
            //     break;
            // case 'xoakh':
            //     if(isset($_GET['id']) && ($_GET['id']> 0)){
            //         delete_taikhoan($_GET['id']);
            //     }
            //     $listTaiKhoan= loadAll_taikhoan();
            //     include "taikhoan/list.php";
            //     break;
            
            // case 'suakh':
            //     if(isset($_GET['id']) && ($_GET['id']> 0)){
            //         $taikhoan= loadone_taikhoan($_GET['id']);
            //     }
            //     // $listTaiKhoan= loadAll_taikhoan();
            //     include "taikhoan/update.php";
            //     break;
            // case 'updatekh':
            //     if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
            //         $id= $_POST['id'];
            //         $user= $_POST['user'];
            //         $pass= $_POST['pass'];
            //         $email= $_POST['email'];
            //         $diachi= $_POST['diachi'];
            //         $sdt= $_POST['sdt'];
            //         $vaitro= $_POST['vaitro'];

            //         update_taikhoan($id, $user, $pass, $email, $diachi, $sdt, $vaitro);
            //         $thongbao= "Cập nhật tài khoản thành công";
            //     }
            //     //$listdanhmuc= loadAll_danhmuc();
            //     $listTaiKhoan= loadAll_taikhoan();
            //     include "taikhoan/list.php";
            //     break;               
            
            // BINH LUAN
            case 'dsbl':
                $listBinhLuan= loadall_binhluan_noFilter();
                include "binhluan/list.php";
                break;
            // case 'xoabl':
            //     if(isset($_GET['id']) && ($_GET['id']> 0)){
            //         delete_binhluan($_GET['id']);
            //     }
            //     $listBinhLuan= loadall_binhluan_noFilter();
            //     include "binhluan/list.php";
            //     break;
            // Thống kê
            // case 'thongke':
            //     $listthongke= loadall_thongke();
            //     $listtkluotxem= loadall_thongkeluotxem();
            //     $listtkdonhang= loadall_thongkedonhang();
            //     include "thongke/list.php";
            //     break;
            // //Biểu đồ
            // case 'bieudodanhmuc':
            //     $listthongke= loadall_thongke();
            //     include "thongke/bieudodanhmuc.php";
            //     break;
            // //Biểu đồ lượt xem
            // case 'bieudoluotxem':
            //     $listtkluotxem= loadall_thongkeluotxem();
            //     include "thongke/bieudoluotxem.php";
            //     break;
            // //Biểu đồ đơn hàng
            // case 'bieudodonhang':
                
            //     include "thongke/bieudodonhang.php";
            //     break;
            // Bill
            case 'listbill':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw=$_POST['kyw'];
                } else {
                    $kyw="";
                }
                $listbill=loadall_bill_admin($kyw,0);
                include "bill/listbill.php";
                break;
             // Truong 30/4/2023 start{
                case 'chitietdonhang':
                    $kyw=$_REQUEST['id'];
                    
                    $listbill=loadall_bill_admin($kyw,0);
    
                    $listbillct=loadall_cart($kyw);
                    include "bill/chitietdonhang.php";
                    break;
            // nam16Apr.start{
            case 'addtt':                
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $tieuDe= $_POST['tieuDe'];
                    $thoiGian= $_POST['thoiGian'];
                    $moTa= $_POST['moTa'];
                    $hinh= $_FILES['hinh']['name'];
                    
                    $target_dir= "../upload/";
                    $target_file= $target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                        //echo "img";
                    }else{
                       //echo "not img";
                    }

                    insert_tinTuc($tieuDe, $hinh, $moTa, $thoiGian);
                    $thongbao= "Thêm tin tức thành công.";
                }
                include "tintuc/add.php";
                break;

            case 'listtt':
                // $sql= "select * from sanpham order by id desc";
                $listTinTuc= loadAll_tinTuc();
                include "tintuc/list.php"; 
                break;
            
            case 'xoatt':
                if(isset($_GET['id']) && ($_GET['id']> 0)){
                    delete_tinTuc($_GET['id']);
                }
                $listTinTuc= loadAll_tinTuc();
                include "tintuc/list.php";
                break;
            
            case 'suatt':
                if(isset($_GET['id']) && ($_GET['id']> 0)){
                    $tinTuc= loadOne_tinTuc($_GET['id']);
                }
                $listTinTuc= loadAll_tinTuc();
                include "tintuc/update.php";
                break;
                        
            case 'updatett':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $matintuc= $_POST['matintuc'];
                    $hinh= $_FILES['hinh']['name'];
                    $tieude= $_POST['tieude'];
                    $mota= $_POST['mota'];
                    $thoigian= $_POST['thoigian'];

                    $target_dir= "../upload/";
                    $target_file= $target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                        //echo "img";
                    }else{
                        //echo "not img";
                    }
                    update_tinTuc($matintuc, $hinh, $tieude, $mota, $thoigian);
                    $thongbao= "Cập nhật thành công";
                }
                
                $listTinTuc= loadAll_tinTuc();
                include "tintuc/list.php";
                break;

            //}nam16Apr.end 
            
            default:
                include "home.php";
                break;
        }
    }else {
        include "home.php";
        
    }
    include "footer.php";

?>