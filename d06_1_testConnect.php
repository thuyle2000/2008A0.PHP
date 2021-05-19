<?php 
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db2008a0";

//goi ham tao ket noi den csdl [db2008a0] cua mySQL
$cn = mysqli_connect($host,$username,$password, $dbname);

if($cn){
    echo "<h2>Ket noi thanh cong !</h2>";
}
else{
    echo "<h2>THAT BAI ROI ! </h2>";
    mysqli_connect_error();
}

?>