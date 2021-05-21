<?php
include_once "d07_studentDAO.php";

//xu ly du lieu nhap cua form edit phia server
if (isset($_POST["btOK"])) {
    // form da duoc submit

    $id = $_POST["id"];
    $name = $_POST["hoten"];
    $mail = $_POST["email"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];

    editStudent($id, $name, $mail, $gender, $dob);

    header("location:d07_student_index.php");
    exit();
}

if (isset($_GET["id"])==false){
    header("location:d07_student_index.php");
    exit();
}

//lay ma so sinh vien [id] tren query-string
$id = $_GET["id"];

//lay du lieu cua sv co ma so [id] trong bang [tbstudent]
$sv = getStudentByID($id);

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
        <h2>Thay doi thong tin Sinh Vien - Version 1.2</h2>
        <hr>

        <form action="" method="POST">
            ID : <br>
            <input type="text" name="id" id="id" readonly 
                    value="<?php echo $sv['student_id']?>">
            <br><br>

            Ho ten : <br>
            <input type="text" name="hoten" id="hoten" required 
                value="<?php echo $sv['student_name']?>">
            <br><br>

            Email : <br>
            <input type="email" name="email" id="email" required 
                value="<?php echo $sv['email']?>">
            <br><br>

            Gioi tinh : <br>
            <input type="radio" name="gender" id="gender_male" value="1"
                <?php if($sv['gender']==1) echo "checked" ?>
            > nam

            <input type="radio" name="gender" id="gender_female" value="0"
                <?php if($sv['gender']==0) echo "checked" ?>    
            > nu
            <br><br>

            Ngay sinh : <br>
            <input type="date" name="dob" id="dob" value="<?php echo $sv['dob']?>">
            <br><br>

            <input type="submit" value="Submit" class="btn btn-danger" name="btOK">
            <input type="reset" value="Reset" class="btn btn-info">
        </form>

    </div>
</body>

</html>