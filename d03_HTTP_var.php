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
<h2>HTTP system variable PHP </h2>
<hr>
<?php 
echo "Server software: ". $_SERVER["SERVER_SOFTWARE"] ."<br>";
echo "Server name: ". $_SERVER["SERVER_NAME"] ."<br>";
echo "Server protocol: ". $_SERVER["SERVER_PROTOCOL"] ."<br>";
echo "Server port: ". $_SERVER["SERVER_PORT"] ."<br>";
echo "Browser: ". $_SERVER["HTTP_USER_AGENT"] ."<br>";
echo "Content: ". $_SERVER["HTTP_ACCEPT"] ."<br>";
?>

</div>
    
</body>
</html>