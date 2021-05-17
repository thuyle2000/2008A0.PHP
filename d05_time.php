<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date-time</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
    <h2> Date-time Function PHP Demo    </h2>

    <form action="">
    Input your birthday: 
    <input type="date" name="bd" id="bd" value="2000-05-17">
    <input type="submit" value="Submit" name="btOK">
    </form>
    <hr>
<?php 

if(isset($_GET["btOK"])){
    date_default_timezone_set("Asia/Saigon");
    $time = time();
    echo '$time =' . $time . "<br/>" ;
    echo date("l, d m Y. H:i:s", $time) . "<br>";
    echo date("l, d M Y. h:i:s a", $time) . "<br>";

    $bd = $_GET["bd"];
    echo 'Your birthday is ' . $bd ."<br>";
    $t_bd = strtotime($bd);  // doi chuoi nhap ngay sinh-> timestamp

    $a_bd = getdate($t_bd);
    $a_today = getdate();
    $age = $a_today["year"] - $a_bd["year"];

    echo "You are $age years old. <br>";

    // echo $a_bd;  // ERROR !
    // echo "<pre>";
    // print_r($a_bd);
    // var_dump($a_bd);
}




?>


    </div>
</body>
</html>