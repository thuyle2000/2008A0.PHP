<!-- trang nay danh cho admin -->
<?php
session_start();

if(isset($_SESSION["user"])== false){
    header("location:d07_login.php");
    exit();
}

$user = $_SESSION["user"];
if($user["role"]==0){
    header("location:d07_user_profile.php");
    exit();    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user-index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h2>List of users. <small>Hi, <?php echo $user["username"]?>! </small></h2>
    <hr>
    
    
    
    </div>
</body>
</html>