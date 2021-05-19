<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mySQL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h2>List of Databases </h2>
    <hr>
    <?php 
    
    include_once("myLib.php");

    //ket noi den DB server MySQL / DB [db2008A0]
    $cn = connectDB();

    //lay danh sach cac DBs
    $result = mysqli_query($cn,"show databases");

    if($result){
        // doc het du lieu (tat ca cac dong trong $result)
        $data = mysqli_fetch_all($result);

        foreach ($data as $row) {
            foreach ($row as $item) {
               echo "$item <br>" ;
            }
        }
    }

    echo "<br><br>";
    echo "<h2>List of Tables in Database [db2008A0] </h2>";
    echo "<hr>";
    //lay danh sach cac tables trong DB [db2008A0]
    $result = mysqli_query($cn,"show tables");

    if($result){
        // doc tung dong du lieu trong $result
        while($row = mysqli_fetch_row($result)){
            foreach ($row as $item) {
                echo "$item <br>" ;
            }

        }

    }

    disconnectDB($cn);

    
    ?>
    </div>
</body>
</html>