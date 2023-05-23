<?php

/**
* Mo ket noi CSDL su dung PDO
*/
function pdo_get_connection(){
    $dburl= "mysql:host=localhost;dbname=shop;charset=utf8";
    $username= 'root';
    $password= '';

    $conn= new PDO($dburl, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}
/**
 * insert, update, detete
 */

function pdo_execute($sql){
    $sql_args= array_slice(func_get_args(), 1);
    try{
        $conn= pdo_get_connection();
        $stmt= $conn->prepare($sql);
        $stmt-> execute($sql_args);
        //echo "exe";
        
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

// Nghĩa thêm
function pdo_execute_return_lastInsertId($sql){
    $sql_args= array_slice(func_get_args(), 1);
    try{
        $conn= pdo_get_connection();
        $stmt= $conn->prepare($sql);
        $stmt-> execute($sql_args);
        return $conn->lastInsertId();
        //echo "exe";
        
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

/**
 * Thuc thi cau lenh sql truy van du lieu (SELECT)
 * @param string 
 */

 function pdo_query($sql){
    $sql_args= array_slice(func_get_args(), 1);
    try {
        $conn= pdo_get_connection();
        $stmt= $conn->prepare($sql);
        
        $stmt->execute($sql_args);
        $rows= $stmt->fetchAll();
        return $rows;


    } catch (PDOException $e) {
        throw $e;
    }
    finally{
        unset($conn);
    }
 }

 /**
  * Truy van mot ban ghi
  */
function pdo_query_one($sql){
    $sql_args= array_slice(func_get_args(), 1);
    try {
        $conn= pdo_get_connection();
        $stmt= $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row= $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    } catch (PDOException $e) {
        throw $e;
    }
    finally{
        unset($conn);
    }
}
/**
 * Truy van mot gia tri
 */
function pdo_query_value($sql){
    $sql_args= array_slice(func_get_args(), 1);
    try {
        $conn= pdo_get_connection();
        $stmt= $conn->prepare($sql);
        $stmt-> execute($sql_args);
        $row= $stmt->fetch(PDO::FETCH_ASSOC);
        return array_values($row)[0];

    } catch (PDOException $e) {
        throw $e;        
    }
    finally{
        unset($conn);
    }

}


?>