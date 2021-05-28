<?php
include_once "d08_BookDAO.php";

//kiem tra nut [search] duoc bam chua
if (isset($_GET["btOK"])) {
    $from = $_GET["from"];
    $to = $_GET["to"];

    $ds = Book::getListPrice($from, $to);
    echo json_encode($ds);
    exit();

} else {
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
        <h2>List of Books - version 1.2 (ajax) </h2>
        <hr>
        <a href="d08_Book_Create.php">Create new Book</a> <br> <br>
        <form action="" method="get" name="formSeries" id="formSeries" > 
            Price
            $Form <input type="number" min='0' name="from" id="from" required value="50">
            $To <input type="number" min='0' name="to" id="to" required value="100">
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
            <tbody id="book-data">
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


    <script>

jQuery(function($){
        
        $("#formSeries").submit(function(e){
            e.preventDefault();

            let n1 = parseInt( $("#from").val() );
            let n2 = parseInt( $("#to").val() );
            if(n1>n2){
                let temp = n1;
                n1 = n2;
                n2 = temp;
                $("#from").val(n1);
                $("#to").val(n2);
            }           

            $.ajax({
                type: "get",
                // url: "d09_book_index_ajax.php",
                data: {
                    from : n1,
                    to : n2,
                    btOK :1
                },
                dataType: "json",
                success: function (response) {
                    
                    console.log(response);

                    // var ds = JSON.parse(response);   // convert chuoi response -> mang json
                    var ds = response;
                    var s = "";
                    ds.forEach(item => {
                        s += (`<tr> <td>${item.id}</td>  <td>${item.title}</td> <td>${item.author}</td> <td>${item.price}</td> <td>${item.edition}</td> </tr>`);    
                    });

                    // console.log(s);
                    $("#book-data").empty();
                    $("#book-data").append(s);

                }
            });

        });

    })    
    
    
    
    </script>
   
</body>

</html>