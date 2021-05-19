<?php 

function connectDB(){
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db2008a0";


    //goi ham tao ket noi den csdl [db2008a0] cua mySQL
    $cn = mysqli_connect($host,$username,$password, $dbname) or die("Cannot connect to Database Server !!!");

    return $cn;
}

function disconnectDB($cn){
    mysqli_close($cn);
    // $cn->close();
}

?>