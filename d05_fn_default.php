<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h2>Function with default value - PHP</h2>
    <hr>

    <form action="">
    <input type="number" name="n" id="n" value="5" required> 
    <input type="submit" value="submit" name="btOK" class="btn btn-danger">
    </form>
    
    <?php 
    if(isset($_GET["btOK"])){
        $n = $_GET["n"];


        echo "<hr>";
        if($n>=0){
            echo " $n! = ". fatorial($n) . "<br>";
        }
        else{
            echo "5! = ". fatorial() . "<br>";
        }
    }
    
    function fatorial($n = 5){
        $r = 1;
        for($i=2 ; $i<=$n; $i++){
            $r *= $i;
        }

        return $r;
    }
    
    ?>
    
    </div>
</body>
</html>