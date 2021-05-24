<?php
include_once "d08_BookDAO.php";

//kiem tra nut [search] duoc bam chua
if(isset($_GET["btOK"])){
    $from = $_GET["from"];
    $to = $_GET["to"];
   
    if($from > $to){
        $temp = $to;
        $to = $from;
        $from = $temp; 
    }

    $ds = Book::getListPrice($from, $to);
}
else{
    $ds = Book::getList();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book-index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>List of Books </h2>
        <hr>
        <a href="d08_Book_Create.php">Create new Book</a> <br> <br>
        <form action="" method="get">
            Price
            $Form <input type="number" min='0' name="from" id="from"  required
            value="<?php
                        if(isset($from)) echo $from; else echo '100' 
                    ?>" >
            $To <input type="number" min='0' name="to" id="to"  required
            value="<?php
                        if(isset($to)) echo $to; else echo '300' 
                    ?>">
            <input type="submit" value="Search" name="btOK">
        </form>
        <br>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Edition</th>
                </tr>
            </thead>
            <tbody>
                <?php

                //doc tung dong -> [$sv]
                foreach ($ds as $row) {
                    echo "<tr>";
                    echo "<td> {$row['id']} </td>";
                    echo "<td> {$row['title']} </td>";
                    echo "<td>" . $row["author"] . " </td>";
                    echo "<td>" . $row["price"] . " </td>";
                    echo "<td>" . $row["edition"] . "  </td>";
                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>


    </div>
    <div>
</body>

</html>