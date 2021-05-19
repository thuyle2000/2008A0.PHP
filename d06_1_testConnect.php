<?php 

//nhung chuong trinh co ham connectDB
include_once("myLib.php");

$cn = connectDB();

echo "<h2>Connect DB [db2008a0] thanh cong !</h2>";

disconnectDB($cn);


?>