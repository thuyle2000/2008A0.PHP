<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexed-array</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Associated Array - PHP</h2>
        <hr>
        <?php

        //khai bao 1 mang co index la so nguyen
        $a = array("S01" => "Dung", "S12" => "Thu", "S08" => "Phuc", "S09" => "Thinh", "S10" => "Thien", "S03" => "Nhan", "S05" => "Thang", "S21" => "Tam");

        echo "<h3>Danh sach sinh vien</h3>";
        foreach ($a as $key => $value) {
            echo "$key ,  $value  <br>";
        }


        //khai bao mang mon hoc bang cu phap dinh danh
        $modules = ["M1" => "Java 1", "M2" => "Java 2", "M3" => "PHP", "M6" => "SQL Server"];
        echo "<br>";
        echo "<h3>Danh sach cac mon hoc </h3>";
        echo "<ul>";
        foreach ($modules as $key => $value) {
            echo "<li>$key, $value </li>";
        }
        echo "</ul>";

        ?>

    </div>
</body>

</html>