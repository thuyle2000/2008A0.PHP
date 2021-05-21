<?php 
include_once "d07_userDAO.php";

if(isset($_POST["btOK"])){
    //da click button submit
    $uid = $_POST["user"];
    $pwd = $_POST["pass"];

    $user = getUser($uid);
    if ($user == null){
        echo "<h3> Tai khoan ko ton tai ! </h3>";
    }
    else {
        if ($pwd !== $user["password"]){
            echo "<h3> Password ko chinh xac ! </h3>";
        }
        else{
            //dang nhap thanh cong
            session_start();
            $_SESSION["user"] = $user;
            
            if($user["role"]==1){
                header("location:d07_user_Index.php");
            }
            else{
                header("location:d07_user_profile.php");
            }
            exit();
        }
    }


}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>login</title>
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <hr>
        <form method="POST">
            username : <br>
            <input type="text" name="user" id="user" 
            value="thang" required> <br> <br>

            password: <br>
            <input type="password" name="pass" id="pass" value="111" required> <br> <br>

            <input type="submit" value="submit" name="btOK" class="btn btn-danger">
            <input type="reset" value="reset" name="btRESET" class="btn btn-info">


        </form>
    </div>
</body>

</html>