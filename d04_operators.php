<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operators</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Operators PHP</h2>
        <hr>

        <?php
        $a = "Hello ";
        $b = "Nhan";

        // $a += $b;
        $a .= $b;

        echo "$a <br><br>";
        $x = 10;
        echo "x = $x <br>";
        echo "x++ = " . $x++ . "<br>";
        echo "x = $x <br><br>";

        echo "++x = " . ++$x . "<br>";
        echo "x = $x <br><br>";

        echo "<hr>";
        $x = 's';
        for ($i = 0; $i <= 10; $i++) {
            echo $x++ . "<br>";
        }

        echo "<hr>";
        //demo phep toan dieu kien 3 ngoi
        $x =25; $y = 10;
        $min = ($x < $y) ? $x : $y ;
        $max = ($x > $y) ? $x : $y ;
        echo "x = $x , y= $y <br>";
        echo "max(x,y) = $max - min(x,y) = $min <br>";

        ?>

    </div>


</body>

</html>