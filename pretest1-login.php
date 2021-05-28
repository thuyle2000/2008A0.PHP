<?php 
session_start();

if(isset($_POST["btOK"])){
    $uid = $_POST["username"];
    $pwd = $_POST["password"];

    include_once "pretest1-customerDAO.php";
    $r = Customer::getByAccNo($uid);

     if($r){
        if($r["Password"]==$pwd){
            $_SESSION["customer"] = $r;
            header("location:pretest1-detailAcc.php");
        }
        else{
            echo "<h3>Mat khau ko dung !!! <h3>";
        }       
    }else{
        echo "<h3>Tai khoan ko hop le !!! <h3>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acc-login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Welcone to Netbank Ltd</h2>
        <hr>

        <div class="row">

            <div class="col-sm-6">

                <form action="" method="POST" role="form">
                    <legend>Plz login for using our services</legend>

                    <div class="form-group">
                        <label for="">username</label>
                        <input type="text" class="form-control" id="username" name="username" 
                        required placeholder="Input user name">
                    </div>

                    <div class="form-group">
                        <label for="">password</label>
                        <input type="password" class="form-control" id="password" name="password" 
                        required placeholder="Input password">
                    </div>

                    <button type="submit" class="btn btn-danger" name="btOK">Submit</button>
                    <button type="reset" class="btn btn-info" name="submit">Reset</button>
                </form>

            </div>

        </div>
    </div>
</body>

</html>