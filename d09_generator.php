<?php
if (isset($_GET["btOK"])) {
    //khoi lenh nay se chay khi user bam <submit>

    $start = $_GET["start"];
    $stop = $_GET["stop"];
    $n = $_GET["numbers"];
    $result = fnRandom($start, $stop, $n);
    foreach ($result as $value) {
        echo $value . ",  ";
    }
    exit();
}


function fnRandom($min = 0, $max = 100, $n = 10)
{
    for ($i = 0; $i < $n; $i++) {
        yield rand($min, $max);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>generator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <h2>Generator demo</h2>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-4">

                <form action="" role="form" id="formSeries" >
                    <legend>Random Series</legend>

                    <div class="form-group">
                        <label for="">start</label>
                        <input type="number" class="form-control" id="start" name="start" value="0" min="0" required>
                    </div>

                    <div class="form-group">
                        <label for="">stop</label>
                        <input type="number" class="form-control" id="stop" name="stop" value="100" min="10" required>
                    </div>

                    <div class="form-group">
                        <label for="">numbers</label>
                        <input type="number" class="form-control" id="numbers" name="numbers" value="10" min="10" max="30" required>
                    </div>

                    <button type="submit" class="btn btn-danger" name="btOK">Submit</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                    <br><br>


                    <div class="form-group">
                        <label for="">series of random numbers</label>
                        <textarea class="form-control" name="result" id="result" rows="5" readonly></textarea>

                    </div>

                </form>

                <br><br>

            </div>
        </div>

    </div>

    <script>


    jQuery(function($){
        
        $("#formSeries").submit(function(e){
            e.preventDefault();

            let from = $("#start").val();
            let to = $("#stop").val();
            let n = $("#numbers").val();

            $.ajax({
                type: "get",
                url: "d09_generator.php",
                data: {
                    start : from,
                    stop : to,
                    numbers : n,
                    btOK :1
                },
                dataType: "text",
                success: function (response) {
                    $("#result").html(response);
                }
            });

        });

    })
    
    </script>
</body>

</html>