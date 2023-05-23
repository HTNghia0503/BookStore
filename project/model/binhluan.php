<?php
      function insert_binhluan($noidung,$nameuser,$idpro,$ngaybinhluan){
        $sql= "insert into binhluan(noidung, nameuser, idpro, ngaybinhluan) values('$noidung','$nameuser', '$idpro', '$ngaybinhluan')"; 
          
        pdo_execute($sql);
    } 
    function loadall_binhluan($idpro){
        $sql= "select * from binhluan where idpro='".$idpro."' order by id desc"; 
        $listbl=pdo_query($sql);
        return $listbl;
    }


    //*******************Admin start by nam 
    //24Mar load all account in taikhoan table
    function loadall_binhluan_noFilter(){
        $sql= "select * from binhluan order by id desc";
        $listTaiKhoan= pdo_query($sql);
        return $listTaiKhoan;
    }
    //nam16Apr
    function getBLNum(){
        $sql= "select count(*) from binhluan";
        $bLNum= pdo_query_value($sql);
        return $bLNum;
    }
    //*******************end by nam
    function delete_binhluan($id){
        $sql="delete from binhluan where id= ".$id;
        pdo_execute($sql);
    }
?>