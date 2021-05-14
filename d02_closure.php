<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>closure</title>
</head>
<body>
    <h2>Closure PHP demo</h2>
    <hr>
    <?php

    class Greeting{
        private $word = "Hello";
    }

    class Farewell{
        private $word = "Good bye";
    }

    //dinh nghia ham closure
    $c = function($name){
        echo "$this->word, $name ! <br>";
    };

    //tao 2 doi tuong a, b
    $a = new Greeting;
    $b = new Farewell();

    //thi hanh ham closure ket hop voi 2 doi tuong a,b
    $c->call($a, "Hau");
    $c->call($b, "Tam");


    ?>
</body>
</html>