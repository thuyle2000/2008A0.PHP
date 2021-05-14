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
        <form action="d03_login_process.php" method="POST">
            username : <br>
            <input type="text" name="user" id="user" 
            value="<?php 
                        if(isset($_COOKIE["uid"])){
                            echo $_COOKIE["uid"];
                        }
                        else{
                            echo "long";
                        }
                  ?>" 
            required> <br> <br>

            password: <br>
            <input type="password" name="pass" id="pass" value="123" required> <br> <br>

            country: <br>
            <input type="radio" name="rCountry" id="rCountryVN" value="Vietnam" checked> Viet Nam -
            <input type="radio" name="rCountry" id="rCountryTL" value="Thailand"> Thai Land -
            <input type="radio" name="rCountry" id="rCountryIN" value="India"> India
            <br> <br>

            remember me:
            <input type="checkbox" name="remember" id="remember" value="yes">
            <br> <br>

            <input type="submit" value="submit" name="btOK" class="btn btn-danger">
            <input type="reset" value="reset" name="btRESET" class="btn btn-info">


        </form>
    </div>
</body>

</html>