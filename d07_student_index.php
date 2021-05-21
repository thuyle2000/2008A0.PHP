<?php

include_once "d07_studentDAO.php";

//xu ly xoa 1 dong du lieu sinh vien khi bam link delete, phia server
if (isset($_GET["id"])) {
    // neu link delete da duoc nhap

    $id = $_GET["id"];
    deleteStudent($id); // xoa sinh vien theo ma so id

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>students-index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Danh sach Sinh Vien - Version 1.2</h2>
        <hr>

        <a href="d07_student_create.php">Them sinh vien moi - NEW</a> <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ho ten</th>
                    <th>Email</th>
                    <th>Gioi tinh</th>
                    <th>Ngay sinh</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $ds = getStudentList();
                $so_sv = count($ds);

                //doc tung dong -> [$sv]
                foreach ($ds as $sv) {

                    echo "<tr>";
                    echo "<td> {$sv['student_id']} </td>";
                    echo "<td> {$sv['student_name']} </td>";
                    echo "<td>" . $sv["email"] . " </td>";
                    echo "<td>" . ($sv["gender"] ? "nam" : "nu") . "  </td>";
                    echo "<td>" . $sv["dob"] . "  </td>";
                    echo "<td>";
                    echo "<a href='d07_student_update.php?id={$sv['student_id']}'>update</a> | ";
                    echo "<a href='d07_student_index.php?id={$sv['student_id']}' 
                    onclick='return confirm(\"Are u sure ?\")'>delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>

    </div>
</body>

</html>