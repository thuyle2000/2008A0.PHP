<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>
<body>
    <h2>Header demo</h2>
    <hr>
    <?php
       date_default_timezone_set('Asia/Saigon');
       echo "Current time is " . date("H:i:s"); 

       $h = date("H");
       if ($h >= 15){
           header("location:https://vnexpress.net/");
       }
       else{
           echo "<hr>";
           echo "<h3>Hoc Di thoi - 15h se duoc giai lao !</h3>";
       }

    ?>
</body>
</html>