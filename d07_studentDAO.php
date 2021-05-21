<?php 
include_once "myLib.php";

//ham lay danh sach sinh vien trong bang [tbstudent]
function getStudentList(){
    $cn = connectDB();  //ket noi voi DB [db2008A0]

    //doc het du lieu trong bang [tbStudent] -> $result
    $sql = "select * from tbStudent";
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


//ham them 1 sinh vien moi vo bang [tbstudent]
function createStudent($name, $mail, $gender, $dob){
    $cn = connectDB();  //ket noi voi DB [db2008A0]

    //chen du lieu nhap moi trong bang [tbStudent] 
    $sql = "INSERT INTO `tbstudent` (`student_id`, `student_name`, `email`, `gender`, `dob`) 
    VALUES (NULL, '$name' , '$mail' , '$gender' ,  '$dob')";

    $result = mysqli_query($cn, $sql);
    disconnectDB($cn);

    return $result;
}


//ham xoa sinh vien theo ma so id
function deleteStudent($id){
    
    $cn = connectDB();  //ket noi voi DB [db2008A0]

    //xoa sinh vien trong bang [tbStudent] theo ma so 
    $sql = "DELETE FROM `tbstudent` WHERE `tbstudent`.`student_id` = '$id'";
    $result = mysqli_query($cn, $sql);

    disconnectDB($cn);
    return $result;
}

//ham sua thong tin sinh vien
function editStudent($id, $name, $mail, $gender, $dob){
    $cn = connectDB();  //ket noi voi DB [db2008A0]

    //chen du lieu nhap moi trong bang [tbStudent] 
    $sql = "UPDATE `tbstudent` SET `student_name` = '$name', `email` = '$mail', `gender` = '$gender', `dob` = '$dob' WHERE `tbstudent`.`student_id` = $id";

    $result = mysqli_query($cn, $sql);
    disconnectDB($cn);

    return $result;
}

?>