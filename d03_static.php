<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>static-var</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h2>Static variable PHP demo</h2>
<hr>

<?php 
echo "<h3>Static </h3>";
for ($i=0; $i < 10; $i++) { 
  fnStatic();
}


echo "<hr>";
echo "<h3>Local </h3>";
for ($i=0; $i < 10; $i++) { 
    fnLocal();
}
  


function fnStatic()
{
    static $counter = 1;
    echo "<p> hit counter : $counter </p>";
    $counter++;
}

function fnLocal()
{
    $counter = 1;
    echo "<p> hit counter : $counter </p>";
    $counter++;
}


?>

</div>
    
</body>
</html>