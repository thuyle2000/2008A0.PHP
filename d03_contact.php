<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact-us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<h2>Contact us</h2>
<hr>
<form action="d03_contact_process.php" method="GET">
user name: <br>
<input type="text" name="username" id="xusername" required value="tam" /> <br> <br>
email : <br>
<input type="email" name="email" id="xemail" value="tam@gmail.com" required> <br> <br>

phone: <br>
<input type="text" name="phone" id="xphone" value="123 456 000"> <br><br>

message: <br>
<textarea name="message" id="xmessage" cols="30" rows="5">nothing</textarea> <br> <br>

<input type="submit" value="submit" name="btOK" class="btn btn-danger">
<input type="reset" value="reset" name="btRESET" class="btn btn-info">
</form>

</div>

</body>

</html>