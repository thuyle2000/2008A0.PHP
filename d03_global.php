<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>global-var</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h2>Global variable PHP demo</h2>
<hr>

<?php 

$name = "Le Duc Tam";
echo ">> My name is $name <br>";

fnGlobal();

echo ">> My name is $name <br>";

function fnGlobal()
{
    echo "<hr>";
    echo "<h3> Trong ham fnLocal() </h3>";
    global $name;
    $name = "Nguyen Hong Phuc";
    echo "My name is $name <br>"; 
    echo "<hr>";  
}



?>

</div>
    
</body>
</html>