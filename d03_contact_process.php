<?php 

if(isset($_GET["btOK"])==false){
    //tinh huong: trang login chua duoc chay
    header("location:d03_contact.php");
    exit();
}


echo "<h2>Welcome to Our Website !!!</h2>";

$name = $_GET["username"];
$email = $_GET["email"];
$phone = $_GET["phone"];
$mess = $_GET["message"];

echo "<hr>";
echo "<p>Hello, $name ($email, $phone)</p>";
echo "<p>Your message is [$mess].<p>";


?>