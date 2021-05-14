<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fibo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Fibonacci</h2>
        <p>0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, ...</p>
        <hr>

        <input type="number" name="n" id="n" value="3" min="0" max="100" step="1" required="required" title="nhap 1 so nguyen">
        <input type="button" value="execute" name="btOK" id="btOK">
        <br> <br>
        <input type="number" name="fibo" id="fibo" readonly>

    </div>

    <script>
        $("#btOK").on("click", function() {
            let number = $("#n").val();
            $.ajax({
                url: "test_fibo_ajax.php",
                type: "get",
                data: {
                    n: number
                },
                success: function(result) {
                    data = JSON.parse(result);
                    $("#fibo").val(data.fibo);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert("ERROR !");
                    console.log(textStatus, errorThrown);
                }
            });
        });
        
    </script>
</body>

</html>