<?php 
include_once "myLib.php";

//ham lay thong tin user trong bang [tbuser] dua vao tk dang nhap
function getUser($uid){
    $cn = connectDB();  //ket noi voi DB [db2008A0]

    //lay du lieu trong bang [tbuser] co ma so id -> $result
    $sql = "select * from tbuser where username like '$uid' ";
    $result = mysqli_query($cn, $sql);

    if ($result == false) {
        die("<h3>Not Found !<h3>");
    }

    //khai bao bien a chua 1 dong du lieu trong result 
    $a = array();

    while ($user= mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $a = $user;
    }

    disconnectDB($cn);
    return $a;
}


//ham lay danh sach user trong bang [tbuser]
function getUserList(){
    $cn = connectDB();  //ket noi voi DB [db2008A0]

    //doc het du lieu trong bang [tbuser] -> $result
    $sql = "select * from tbuser";
    $result = mysqli_query($cn, $sql);

    if ($result == false) {
        die("<h3>Not Found !<h3>");
    }

    //khai bao mang a[] chua cac dong du lieu trong result 
    $a = array();

    while ($sv = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $a[] = $sv;
    }

    disconnectDB($cn);
    return $a;
}

//ham them 1 user moi moi vo bang [tbuser]
function createUser($name, $password, $mail, $role){
    $cn = connectDB();  //ket noi voi DB [db2008A0]

    //chen du lieu nhap moi trong bang [tbStudent] 
    $sql = "INSERT INTO `tbuser` (`id`,`username`, `password`, `email`, `role`) 
    VALUES (NULL, '$name' , '$password' , '$mail' ,  '$role')";

    $result = mysqli_query($cn, $sql);
    disconnectDB($cn);

    return $result;
}

//ham xoa user theo ma so id
function deleteUser($id){
    
    $cn = connectDB();  //ket noi voi DB [db2008A0]

    //xoa user trong bang [tbuser] theo ma so 
    $sql = "DELETE FROM `tbuser` WHERE `tbuser`.`id` = '$id'";
    $result = mysqli_query($cn, $sql);

    disconnectDB($cn);
    return $result;
}
