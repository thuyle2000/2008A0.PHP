<?php 
declare (strict_types=1)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
</head>
<body>
    <h2>Function PHP with type declaration</h2>
    <hr>
    <?php
    
    function add(int $a, int $b){
        echo "<h2> In function add()</h2>";
        echo "a = $a <br>";
        echo "b = $b <br>";

        $z = $a + $b;
        echo "$a + $b = $z <br>";
    }

    add(12, 8);
    add(12.8, 60);
    add("12","24");
    add("12.6", "40");
    // add("hello", "PHP");


    ?>
</body>
</html>