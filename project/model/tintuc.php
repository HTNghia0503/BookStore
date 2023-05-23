<?php //4Apr by nam

    function insert_tintuc($tieuDe, $hinh, $moTa, $thoiGian){
        $sql= "insert into tintuc(title, img, mota, time) 
            values('$tieuDe', '$hinh', '$moTa', '$thoiGian')";
        pdo_execute($sql);
    }
    function delete_tinTuc($id){
        $sql= "delete from tintuc where id=".$id;
        pdo_execute($sql);
    }
    function loadAll_tinTuc(){
        $sql= "select * from tintuc order by id desc";
        $listTinTuc= pdo_query($sql);
        return $listTinTuc;
    }
    //Nam 28Mar
    function loadAll_tintuc_home(){
        $sql= "select * from tintuc where 1 order by id desc limit 0,8";
        $listTinTuc= pdo_query($sql);
        return $listTinTuc;
    }

    //Nam 28Mar
    function loadOne_tinTuc($id){
        $sql= "select * from tintuc where id=".$id;
        $tt= pdo_query_one($sql);
        return $tt;
    }

    function load_tintuc_cungloai($id,$iddm){
        $sql= "select * from tintuc where iddm=".$iddm." AND id<>".$id;
        $listtintuc= pdo_query($sql);
        return $listtintuc;
    }

    function update_tinTuc($id, $hinh, $title, $mota, $time){
        if($hinh="")
            $sql="update tintuc set id='".$id."', img='".$hinh."', title='".$title."', mota='".$mota."', time='".$time."' where id=".$id;
        else
            $sql="update tintuc set id='".$id."', title='".$title."', mota='".$mota."', time='".$time."' where id=".$id;
        pdo_execute($sql);
    }
    
    //nam16Apr
    function getTTNum(){
        $sql= "select count(*) from tintuc";
        $tTNum= pdo_query_value($sql);
        return $tTNum;
    }
?>
    
