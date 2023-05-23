<?php
    function insert_taikhoan($email, $user, $pass){
        $sql= "insert into taikhoan(email, user, pass) values('$email','$user','$pass')";
        pdo_execute($sql);
    }

    

    function checkuser($user, $pass){
        $sql= "select * from taikhoan where user='".$user."' AND pass='".$pass."'";
        $sp= pdo_query_one($sql);
        return $sp;
    }

    function checkemail($email){
        $sql= "select * from taikhoan where email='".$email."'";
        $sp= pdo_query_one($sql);
        return $sp;
    }

    function update_matkhau($id,$pass){
        $sql="update taikhoan set pass='".$pass."'where id=".$id;
        pdo_execute($sql);
    }

    function update_taikhoan($id,$user,$pass,$email,$address,$tel){
        $sql="update taikhoan set user='".$user."', pass='".$pass."'
        , email='".$email."', address='".$address."', tel='".$tel."'
        where id=".$id;
        pdo_execute($sql);
    }


//*******************Admin start by nam 
    //24Mar load all account in taikhoan table
    function loadAll_taikhoan(){
        $sql= "select * from taikhoan order by id desc";
        $listTaiKhoan= pdo_query($sql);
        return $listTaiKhoan;
    }
    //25Mar
    function insert_taikhoan_byAD($user,$pass,$email,$address,$tel){
        $sql="insert into taikhoan(user, pass, email, address, tel) values('$user','$pass','$email','$address','$tel')";
        pdo_execute($sql);
    }
    //25Mar
    function delete_taikhoan($id){
        $sql="delete from taikhoan where id= ".$id;
        pdo_execute($sql);
    }
    function loadone_taikhoan($id){
        $sql= "select * from taikhoan where id=".$id;
        $tk= pdo_query_one($sql);
        return $tk;
    }
//*******************end by nam
    //nam16Apr
    function getTKNum(){
        $sql= "select count(*) from taikhoan";
        $tKNum= pdo_query_value($sql);
        return $tKNum;
    }
//-----------------start by truong
function loadAll_taikhoannv(){
    $sql= "select * from taikhoan where role=2 order by id desc";
    $listTaiKhoan= pdo_query($sql);
    return $listTaiKhoan;
}

function loadAll_taikhoankh(){
    $sql= "select * from taikhoan where role=0 order by id desc";
    $listTaiKhoan= pdo_query($sql);
    return $listTaiKhoan;
}

function insert_taikhoan_nv($user,$pass,$email,$address,$tel,$role){
    $sql="insert into taikhoan(user, pass, email, address, tel, role) values('$user','$pass','$email','$address','$tel', '$role')";
    pdo_execute($sql);
}
//-----------------end by truong
?>