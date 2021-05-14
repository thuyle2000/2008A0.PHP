<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php7</title>
</head>
<body>
    <h2>New Features PHP 7.x</h2>
    <hr>
    <?php 
    $x = 10;
    $y = 3;
    $r1 = $x / $y;
    $r2 = intdiv($x, $y);

    echo "<h3>ham intdiv() </h3>";
    echo "$x / $y = $r1 <br>";
    echo "intdiv($x, $y) = $r2 <br><br>";

    echo "<h3>Toan tu spaceship </h3>";
    echo "$x <=> $y = " . ( $x<=>$y )  ."<br>";
    echo "$y <=> $x = " . ( $y<=>$x )  ."<br>";
    echo "$x <=> $x = " . ( $x<=>$x )  ."<br><br>";

    echo "<h3>Toan tu kiem tra NULL ?? </h3>";
    $r3 = $x??100;
    $z = null;
    $r4 = $z??"unknown variable !";
    echo '$x??100 = '. $r3 . "<br>";
    echo '$z??"unknown variable !" = '. $r4 . "<br><br>";

    ?>
</body>
</html>