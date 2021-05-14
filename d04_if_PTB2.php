<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTB2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Giai Phuong trinh bac 2 : ax<sup>2</sup> + bx + c = 0 </h2>
        <hr>

        <form action="">
            Nhap he so a : <br>
            <input type="number" name="ha" id="ha" value="1" required> <br> <br>

            Nhap he so b : <br>
            <input type="number" name="hb" id="hb" value="1" required> <br> <br>

            Nhap he so c : <br>
            <input type="number" name="hc" id="hc" value="1" required> <br> <br>

            <input type="submit" value="Calculate" name="btOK" class="btn btn-danger">
            <input type="reset" value="Reset" class="btn btn-info">

        </form>

        <?php
        if (isset($_GET["btOK"]) == true) {
            //doc gia tri cua cac o ha, hb, hc
            $a = $_GET["ha"];
            $b = $_GET["hb"];
            $c = $_GET["hc"];
            echo "<br><br>";
            echo "<hr>";
            echo "<h2> Nghiem cua phuong trinh bac 2: " . $a . "x<sup>2</sup> + " . $b . "x + " . $c . " = 0 </h2>";

            $delta = $b*$b - 4*$a*$c;
            if($delta <0){
                echo "<p> Phuong trinh Vo nghiem ! </p>";
            }
            else if($delta ==0){
                echo "<p> Phuong trinh co nghiem kep : x1 = x2 = ". (-$b/(2*$a));
            }
            else{
                $x1 = (-$b + sqrt($delta)) / (2*$a);
                $x2 = (-$b - sqrt($delta)) / (2*$a);
                echo "<p> Phuong trinh co 2 nghiem phan biet : </p>";
                echo " x1  = ". $x1 . "<br>";
                echo " x2  = ". $x2 . "<br>";
            }

        }

        ?>

    </div>
</body>


</html>