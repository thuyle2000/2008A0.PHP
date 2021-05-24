<?php 
//xu ly du lieu nhap cua form create phia server
if(isset($_POST["btOK"])){
    // form da duoc submit

    $title = $_POST["title"];
    $author = $_POST["author"];
    $price = $_POST["price"];
    $edition = $_POST["edition"];

    include_once "d08_BookDAO.php";
    $b = new Book(null, $title, $author, $price, $edition);
    if (Book::create($b)){
        header("location:d08_Book_index.php");
    }
    else{
        echo "<h2>Error : Insert new Book Failed !!! </h2> <br>";
    }
    
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
        <h2>Create New Book</h2>
        <hr>

        <form action="" method="POST">
            Title : <br>
            <input type="text" name="title" id="title" required value="Lap Trinh C#">
            <br><br>

            Author : <br>
            <input type="text" name="author" id="author" required value="Aptech">
            <br><br>

            Price : <br>
            <input type="number" name="price" id="price" required value="10" min="0">
            <br><br>

            Edition : <br>
            <input type="number" name="edition" id="edition" required value="1" min="1">
            <br><br>

            <input type="submit" value="Submit" class="btn btn-danger" name="btOK">
            <input type="reset" value="Reset" class="btn btn-info">
        </form>

    </div>
</body>

</html>