<?php
if(isset($_POST["btOK"])==false){
    //tinh huong: trang login chua duoc chay
    header("location:d03_login.php");
    exit();
}

$name = $_POST["user"];
$password = $_POST["pass"];
$country = $_POST["rCountry"];

//kiem tra remember co ton tai ko ?
if(isset( $_POST["remember"])){
    // $remember = $_POST["remember"];
    setcookie("uid", $name,time()+ 120); // cookie ton tai 2 phut
}



if($name == "admin" && $password=="123"){
    echo "<h2> Welcome, Web-Master !</h2>";
}
else{
    echo "<h2> Welcome, Mr/Ms. $name ! </h2>";
    echo "<p> You come from $country? </p>";
}

?>