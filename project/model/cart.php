
<style>
        .cart table{
            width: 100%;
            margin-right: 5%;
            text-align: center;
        }
        

        .cart table td:nth-child(1){
            width: 10%;
        }

        .cart table td:nth-child(2){
            width: 20%;
        }

        .cart table td:nth-child(3){
            width: 12%;
        }
        .cart table td:nth-child(4){
            width: 22%;
        }
        .cart table td:nth-child(5){
            width: 15%;
        }
        .cart table td:nth-child(6){
            width: 5%;
        }
    </style>
<?php
function viewcart($del){
    
    global $img_path;
    $tong=0;
    $i=0;
    if($del==1){
        $xoasp_th='<th>Thao tác</th>';
        $xoasp_td2='<td></td>';
    } else {
        $xoasp_th='';
        $xoasp_td2='';
    }
    echo '    
        <tr class="boxcenter cart">
        <table>
            <th>Hình</th>
            
           
            <th>Sản phẩm</th>
           
            
            <th>Đơn giá</th>
            
           
            <th>Số lượng</th>
            
            
            <th>Thành tiền</th>
            
           
            <th>'.$xoasp_th.'</th>
            </table>
         
        </tr>';
    
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh=$img_path.$cart[2];
        $ttien=$cart[3]*$cart[4];
        $tong+=$ttien;
        if($del==1){
            $xoasp_td='<td><a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a></td>';
        } else {
            $xoasp_td='';
        }

        
        echo '
            <tr class ="boxcenter cart">
            <table>
                <td><img src="'.$hinh.'" alt="" height="80px"></td>
               
                
                <td>'.$cart[1].'</td>
                
                
                <td>'.$cart[3].'</td>
                
                
                <td>'.$cart[4].'</td>
                
                
                <td>'.$ttien.'</td>
                
                
                <td>'.$xoasp_td.'</td>
            </table>
            </tr>';
           
        $i+=1;
    }
    echo '<tr class ="boxcenter cart">
    
    <table>
        
            <td></td>
            <td></td>
            <td></td>
            
            <td colspan="8"><h2>Tổng đơn hàng: </h2></td>            
            <td>'.$tong.'</td>
            <td></td>
            '.$xoasp_td2.'
    </table>        </tr>';
    
}

function bill_chi_tiet($listbill){
    global $img_path;
    $tong=0;
    $i=0;
    echo '<tr>
            <th>Hình</th>
            <th>Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>';
    
    foreach ($listbill as $cart) {
        $hinh=$img_path.$cart['img'];
        $tong+=$cart['thanhtien'];
        
        echo '<tr>
                <td><img src="'.$hinh.'" alt="" height="80px"></td>
                <td>'.$cart['name'].'</td>
                <td>'.$cart['price'].'</td>
                <td>'.$cart['soluong'].'</td>
                <td>'.$cart['thanhtien'].'</td>
            </tr>';
        $i+=1;
    }
    echo '<tr>
            <td colspan="4">Tổng đơn hàng</td>
            <td>'.$tong.'</td>
        </tr>';
}

function tongdonhang(){
    $tong=0;
    
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien=$cart[3]*$cart[4];
        $tong+=$ttien;
    }
    return $tong;
}

function insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang){
    $sql="insert into bill(iduser, bill_name, bill_email, bill_address, bill_tel, bill_pttt, ngaydathang, total) values('$iduser', '$name', '$email', '$address', '$tel', '$pttt', '$ngaydathang', '$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}

function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill){
    $sql="insert into cart(iduser, idpro, img, name, price, soluong, thanhtien, idbill) values('$iduser', '$idpro', '$img', '$name', '$price', '$soluong', '$thanhtien', '$idbill')";
    return pdo_execute($sql);
}

function loadone_bill($id){
    $sql= "select * from bill where id=".$id;
    $bill= pdo_query_one($sql);
    return $bill;
}

function loadall_cart($idbill){
    $sql= "select * from cart where idbill=".$idbill;
    $bill= pdo_query($sql);
    return $bill;
}

function loadall_cart_count($idbill){
    $sql= "select * from cart where idbill=".$idbill;
    $bill= pdo_query($sql);
    return sizeof($bill);
}

function loadall_bill_admin($kyw="", $iduser=0){
    $sql= "select * from bill where 1";
    if($iduser>0) $sql.=" AND iduser=".$iduser;
    if($kyw!="") $sql.=" AND id like '%".$kyw."%'";
    $sql.=" order by bill_status asc";
    $listbill= pdo_query($sql);
    return $listbill;
}

function loadall_bill($iduser){
    $sql= "select * from bill where iduser=".$iduser;
    $listbill= pdo_query($sql);
    return $listbill;
}

function get_ttdh($n){
    switch ($n) {
        case '0':
            $tt = "Đơn hàng mới";
            break;
        case '1':
            $tt = "Đang xử lý";
            break;
        case '2':
            $tt = "Đang vận chuyển";
            break;
        case '3':
            $tt = "Đã giao hàng";
            break;
        case '4':
            $tt = "Đã hủy";
            break;
        default:
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}

// Start by Trường

function loadall_thongke(){
    $sql= "select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
    $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    $sql.=" group by danhmuc.id order by danhmuc.id desc";
    $listk= pdo_query($sql);
    return $listk;
}

function loadall_thongkeluotxem(){
    $sql= "select sanpham.id as masp, sanpham.name as tensp, sanpham.luotxem as luotxemsp 
    from sanpham where 1 order by luotxem desc limit 0,5";
    $listkluotxem= pdo_query($sql);
    return $listkluotxem;
}

function loadall_thongkedonhang(){
    // $sql= "select bill.id as madh, bill.bill_name as tenkh, bill.ngaydathang as ngaydh, bill.bill_status as tinhtrangdh 
    // from bill where ngaydathang BETWEEN '01/01/2022' AND '01/01/2022'";
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
                      
        //     if(isset($_POST["tungay"])) { $tungay = $_POST['tungay']; }
        //     if(isset($_POST["denngay"])) { $denngay = $_POST['denngay']; }
        if(isset($_REQUEST['searchsubmit'])){
            $tungay = $_REQUEST['tungay'];
            $denngay = $_REQUEST['denngay'];
    $sql= "select bill.id as madh, bill.bill_name as tenkh, bill.ngaydathang as ngaydh, bill.bill_status as tinhtrangdh 
    from bill where ngaydathang BETWEEN '$tungay-00:00:00' AND '$denngay-23:59:59'";
                         $listkdh= pdo_query($sql);
                         return $listkdh;
          }               
       
}
// End by Trường
    //nam16Apr
    function getDHNum(){
        $sql= "select count(*) from cart";
        $dHNum= pdo_query_value($sql);
        return $dHNum;
    }

?>