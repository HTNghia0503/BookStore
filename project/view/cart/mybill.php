
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
            width: 15%;
        }

        .cart table td:nth-child(3){
            width: 15%;
        }
        .cart table td:nth-child(4){
            width: 15%;
        }
        .cart table td:nth-child(5){
            width: 15%;
        }
    </style>

<div class="boxcenter">
    <div class="row mb">
        <div class="boxtrai mr">
            <?php include "../view/boxleft.php"; ?>
        </div>
        <div class="boxphai">
            <div class="row mb">
                <div class="boxtitle">ĐƠN HÀNG CỦA BẠN</div>
                <div class="row boxcontent cart">
                   
                    <table>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Ngày đặt</th>
                            <th>Số lượng đặt hàng</th>
                            <th>Tổng giá trị đơn hàng</th>
                            <th>Tình trạng đơn hàng</th>
                        </tr>

                        <?php
                            if(is_array($listbill)){
                                foreach($listbill as $bill){
                                    extract($bill);
                                    $ttdh=get_ttdh($bill['bill_status']);
                                    $countsp=loadall_cart_count($bill['id']);
                                    echo '<tr>';
                                    echo'        <td>DH-'.$bill['id'].'</td>';
                                    echo'        <td>'.$bill['ngaydathang'].'</td>';
                                    echo'        <td>'.$countsp.'</td>';
                                    echo'        <td>'.$bill['total'].'</td>';
                                    echo'        <td>'.$ttdh.'</td>';
                                    echo'    </tr>';
                                }
                            }
                        ?>
                        
                    </table></div>
                </div>
            </div>
        </div>
</div>
