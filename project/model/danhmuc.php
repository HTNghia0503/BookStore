<?php

    // function insert_danhmuc($tensp, $giasp, $hinh, $mota, $iddm){
    //     $sql= "insert into sanpham(name, price, img, mota, iddm) 
    //         values('$tensp', '$giasp', '$hinh', '$mota', '$iddm')";
    //     pdo_execute($sql);
    // }
    function insert_danhmuc($tenloai){
        $sql= "insert into danhmuc(name) values('$tenloai')"; 
          
        pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql= "delete from sanpham where id=".$id;
        pdo_execute($sql);
    }
    function loadAll_danhmuc(){
        $sql= "select * from danhmuc order by id desc";
        $listdanhmuc= pdo_query($sql);
        return $listdanhmuc;
    }
    function loadone_danhmuc($id){
        $sql= "select * from sanpham where id=".$id;
        $dm= pdo_query_one($sql);
        echo 'loadm';
        return $dm;
    }
    // function update_danhmuc($tenloai){
    //     $sql= "";
    //     pdo_execute($sql);
    // }
    function update_danhmuc($id,$tenloai){
        $sql= "update danhmuc set name='".$tenloai."' where id=".$id;
        pdo_execute($sql);
    }
    //nam16Apr
    function getDMNum(){
        $sql= "select count(*) from danhmuc";
        $dMNum= pdo_query_value($sql);
        return $dMNum;
    }
?>