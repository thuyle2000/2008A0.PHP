<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>generator-delegate</title>
</head>
<body>
    <h2> Generator delegate PHP </h2>
    <hr>
    <?php
    function f1(){
        yield from ["xuan", "ha", "thu", "dong"];
        yield 100;
        yield 200;
        yield from f2();
    }
    
    function f2(){
        yield from ["mai", "lan", "cuc", "truc"];
        yield from [5, 10, 15, 20];
    }

    echo "<ol>";
    foreach (f1() as $item) {
        echo "<li> $item </li>";
    }
    echo "</ol>";


    ?>
</body>
</html>