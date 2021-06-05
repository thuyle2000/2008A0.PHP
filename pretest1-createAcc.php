<?php 
//xu ly du lieu nhap cua form create phia server
if(isset($_POST["btOK"])){
    // form da duoc submit

    $accno = $_POST["accno"];
    $custname = $_POST["custname"];
    $custAddress = $_POST["custAddress"];
    $accType = $_POST["accType"];
    $balance = $_POST["balance"];
    $password = $_POST["password"];

    include_once "pretest1-customerDAO.php";
    $b = new Customer($accno,$custname,$custAddress,$accType,$balance,$password);
    if (Customer::create($b)){
        header("location:pretest1-login.php");
    }
    else{
        echo "<h2>Error : Create new Customer Failed !!! </h2> <br>";
    }
    
    exit();

} 



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acc-create-account</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Welcome to Netbank Ltd</h2>
        <hr>

        <div class="row">

            <div class="col-sm-6">

                <form action="" method="POST" role="form">
                    <legend>Open new Account</legend>

                    <div class="form-group">
                        <label for="">Account No</label>
                        <input type="text" class="form-control" id="accno" name="accno" required placeholder="Input account no">
                    </div>

                    <div class="form-group">
                        <label for="">Customer Name</label>
                        <input type="text" class="form-control" id="custname" name="custname" required placeholder="Input customer name">
                    </div>

                    <div class="form-group">
                        <label for="">Customer Address</label>
                        <input type="text" class="form-control" id="custAddress" name="custAddress" required placeholder="Input customer address">
                    </div>

                    <div class="form-group">
                        <label for="">Account Type</label>
                        <select name="accType" id="accType" required>
                            <option value="SA">Saving Account</option>
                            <option value="CA">Current Account</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Opening Deposit</label>
                        <input type="number" class="form-control" id="balance" name="balance" required placeholder="Input customer address">
                    </div>

                    <div class="form-group">
                        <label for="">password</label>
                        <input type="password" class="form-control" id="password" name="password" required placeholder="Input password">
                    </div>

                    <button type="submit" class="btn btn-danger" name="btOK">Submit</button>
                    <button type="reset" class="btn btn-info" name="submit">Reset</button>
                </form>

            </div>

        </div>
    </div>
</body>

</html>