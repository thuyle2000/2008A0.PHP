<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trigger-error</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Trigger Error Function - PHP</h2>
        <hr>

        <form action="">
            input 1st number:
            <input type="number" name="n1" id="n1" value="100" required> <br><br>

            input 2nd number:
            <input type="number" name="n2" id="n2" value="3" required> <br><br>

            <input type="submit" value="submit" name="btOK" class="btn btn-danger ">
        </form>



        <?php

        function abc($eno, $estr, $efile, $eline)
        {
            echo "<b>Custom error:</b> [$eno] - $estr <br>";
            echo " Error on line [$eline] in [$efile] file<br>";
        }

        // Set user-defined error handler function
        set_error_handler("abc");


        if (isset($_GET["btOK"])) {
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];

            echo "<hr>";
            if ($n2 == 0) {
                //raise error !
                trigger_error("Cannot divide by ZERO !!!", E_USER_ERROR);

            } else {
                echo "$n1 / $n2 = " . round($n1 / $n2, 2) . "<br>";
            }
        }


        ?>
    </div>
</body>

</html>