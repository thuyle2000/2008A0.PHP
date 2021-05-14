<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
        <h2>Fibonacci series : 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89 ... </h2>
        <hr>

        <form action="">
            Input N : <br>
            <input type="number" name="n" id="n" value="5" required
            min=0 max="20"> <br> <br>
            
            <input type="submit" value="Execute" name="btOK" class="btn btn-danger">
            <input type="reset" value="Reset" class="btn btn-info">

        </form>

        <?php
        if (isset($_GET["btOK"]) == true) {
            //doc gia tri cua o n
            $n = $_GET["n"];

            echo "<hr>";
            echo "<h2> Fibonacci $n-numbers : </h2>";

            $r = 1;
            for($i=2 ; $i <= $n ; $i++){
                $r *= $i;
            }
            
            

        }

        ?>

    </div>
</body>
</html>