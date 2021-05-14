<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>generator</title>
</head>

<body>
    <h2>Generator Demo</h2>
    <hr>

    <?php

    //dinh nghia 1 generator
    function random_numbers($n = 10)
    {
        for($i=0; $i<$n; $i++){
            $r = rand(0, 100);
            yield $r;
        }

        return "FINISH !";
    }

    echo "<h3>Random numbers</h3>";
    $a = random_numbers(12);    // sinh 12 so nn
    foreach ($a as $key => $value) {
        echo " $key. $value <br>";
    }

    echo $a->getReturn() . "<br>";


    ?>

</body>

</html>