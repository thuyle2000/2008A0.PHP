<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h2>Sort - Array PHP</h2>
    <hr>
<?php

include_once ("data_sv.inc");

echo "<h3>Danh sach sinh vien 1</h3>";
echo "<ol>";
foreach ($student as $key => $value) {
    echo "<li> $key ,  $value  </li>";
}
echo "</ol>";

echo "<br>";
echo "<h3>Danh sach sinh vien 2</h3>";
echo "<ol>";
foreach ($student_2 as $key => $value) {
    echo "<li> $key ,  $value  </li>";
}
echo "</ol>";

$new_a = array_merge($student, $student_2);
echo "<br>";
echo "<h3>Danh sach sinh vien 1 va 2</h3>";
echo "<ol>";
foreach ($new_a as $key => $value) {
    echo "<li> $key ,  $value  </li>";
}
echo "</ol>";

//sort danh sach theo ten
echo "<br>";
echo "<h3>Danh sach sinh vien 1 va 2 - sap xep theo ten</h3>";
echo "<ol>";
$temp = $new_a;
// asort($temp);
arsort($temp);
foreach ($temp as $key => $value) {
    echo "<li> $value, $key   </li>";
}
echo "</ol>";

//sort danh sach theo ma so
echo "<br>";
echo "<h3>Danh sach sinh vien 1 va 2 - sap xep theo ma so</h3>";
echo "<ol>";
$temp = $new_a;
ksort($temp);
foreach ($temp as $key => $value) {
    echo "<li> $key ,  $value  </li>";
}
echo "</ol>";

?>
    </div>
</body>
</html>