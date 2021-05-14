<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uniform-php</title>
</head>

<body>
    <h2>Uniform variable demo</h2>
    <hr>
    <?php
    error_reporting(0);
    function e()
    {
        echo "This is e() <br>";
    };

    function f()
    {
        echo "This is f() <br>";
        return e;
    };

    function g()
    {
        echo "This is g()<br>";
        return f;
    };

    g();
    echo "***********<br>";
    g()();
    echo "***********<br>";
    g()()();

    ?>
</body>

</html>