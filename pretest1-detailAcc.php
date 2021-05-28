<?php
session_start();
if (isset($_SESSION["customer"]) == false) {
    header("location:pretest1-index.php");
    exit;
} else {
    if (isset($_GET["btOK"])) {

        $accNO = $_GET["maTK"];
        $cust = $_SESSION["customer"];

        if ($accNO == $cust["AccountNo"]) {
            echo json_encode($cust);
        } else {
            echo "1";
        }
        exit;
    }
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

                <form action="" method="GET" role="form">
                    <legend>Detailed Account</legend>

                    <div class="form-group">
                        <label for="">Account No</label>
                        <input type="text" class="form-control" id="accno" name="accno">

                        <input type="button" value="Show detail" id="btSHOW" name="btSHOW" class="btn btn-info">
                    </div>

                    <div class="form-group">
                        <label for="">Customer Name</label>
                        <input type="text" class="form-control" id="custname" name="custname" readonly>
                    </div>

                    <div class="form-group">
                        <label for="">Customer Address</label>
                        <input type="text" class="form-control" id="custAddress" name="custAddress" readonly>
                    </div>

                    <div class="form-group">
                        <label for="">Account Type</label>
                        <input type="text" class="form-control" id="accType" name="accType" readonly>

                    </div>

                    <div class="form-group">
                        <label for="">Opening Deposit</label>
                        <input type="number" class="form-control" id="balance" name="balance" readonly>
                    </div>


                    <button type="submit" class="btn btn-danger" name="btOK">Submit</button>

                </form>

            </div>

        </div>
    </div>

    <script>
        jQuery(function($) {
            $("#btSHOW").click(function(e) {
                accno = $("#accno").val();
                $.ajax({
                    type: "get",
                    data: {
                        maTK: accno,
                        btOK: 1
                    },
                    success: function(response) {

                        data = response + "";
                        if (data == "1") {
                            alert("Invalid account !");
                        } else {
                            // console.log(data);
                            // console.log(data.AccountNo);
                            data = JSON.parse(data);
                            $("#custname").val(data.CustName)
                            $("#custAddress").val(data.CustAddress)
                            $("#accType").val(data.AccType)
                            $("#balance").val(data.BalAmount)
                        }

                    }
                });
            });
        });
    </script>
</body>

</html>