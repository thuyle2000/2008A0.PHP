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
        <h2>Indexed Array - PHP</h2>
        <hr>
        <?php

        //khai bao 1 mang co index la so nguyen
        $a = array("Dung", "Thu", "Phuc", "Thinh", "Thien", "Nhan", "Thang", "Tam");

        echo "<h3>Danh sach sinh vien</h3>";
        foreach ($a as $key => $value) {
            echo "$key ,  $value  <br>";
        }

        
        ?>

    </div>
</body>

</html>