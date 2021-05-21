<?php 
//xu ly du lieu nhap cua form create phia server
if(isset($_POST["btOK"])){
    // form da duoc submit

    $name = $_POST["hoten"];
    $mail = $_POST["email"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];

    include_once "d07_studentDAO.php";
    createStudent($name, $mail, $gender, $dob);

    header("location:d07_student_index.php");
    exit();

} 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student-create</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Them Sinh Vien Moi - Version 1.2</h2>
        <hr>

        <form action="" method="POST">
            Ho ten : <br>
            <input type="text" name="hoten" id="hoten" required value="Nguyen Hau">
            <br><br>

            Email : <br>
            <input type="email" name="email" id="email" required value="nguyenhau@ftp.edu.vn">
            <br><br>

            Gioi tinh : <br>
            <input type="radio" name="gender" id="gender_male" checked value="1"> nam
            <input type="radio" name="gender" id="gender_female" value="0"> nu
            <br><br>

            Ngay sinh : <br>
            <input type="date" name="dob" id="dob" value="2002-04-15">
            <br><br>

            <input type="submit" value="Submit" class="btn btn-danger" name="btOK">
            <input type="reset" value="Reset" class="btn btn-info">
        </form>

    </div>
</body>

</html>