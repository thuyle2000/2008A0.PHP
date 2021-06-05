<?php

session_start();
if(isset($_SESSION["customer"]) == false){
    header("location:index.php");
    exit();
}
else{
    if(isset($_GET["btOK"])){
        $accNo = $_GET["maTK"];
        $cust = $_SESSION["customer"];
        // echo "<PRE>";
        // print_r($cust);
        // echo "</PRE>";

        if ($accNo == $cust["AccountNo"]){
            echo json_encode($cust);
        }
        else {
            echo "1";
        }
        exit();

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
    <title>Account detail</title>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <h2>Account detail</h2>
    </div>
    <div class="navbar">
        <h3><a href="login.php" >Sign out</a></h3>
    </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="" method="GET" role="form">
                    <div class="formgroup">
                        Account no: <br>
                        <input type="text" class="form-control" name="accnum" id="accnum">
                        <input type="button" value="Show detail" class="btn btn-info" name="btSHOW" id="btSHOW">
                    </div>

                    <div class="formgroup">
                        Name: <br>
                        <input type="text" class="form-control" name="accname" id="accname" readonly>
                        <br><br>
                    </div>
                    <div class="formgroup">
                        Address: <br>
                        <input type="text" class="form-control" name="address" id="address" readonly>
                        <br><br>
                    </div>
                    <div class="formgroup">
                        Account type: <br>
                        <input type="text" class="form-control" name="acctype" id="acctype" readonly>
                        <br><br>
                    </div>
                    <div class="formgroup">
                        Balance: <br>
                        <input type="number" class="form-control" name="deposit" id="deposit" readonly>
                        <br><br>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        jQuery(function($) {
            $("#btSHOW").click(function(e) {
                accno = $("#accnum").val();
                $.ajax({
                    type: "get",
                    data: {
                        maTK: accno,
                        btOK: "1"
                    },
                    dataType:"json",
                    success: function(response) {
                        data = response ;
                        if (data == "1") {
                            alert("Invalid account !");
                        } else {
                            console.log(data);
                            console.log(data.AccountNo);
                            // data = JSON.parse(data);
                            $("#accname").val(data.CustName)
                            $("#address").val(data.CustAddress)
                            $("#acctype").val(data.AccType)
                            $("#deposit").val(data.BalAmount)
                        }

                    }
                });
            });
        });


    </script>
</body>
</html>

