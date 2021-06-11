<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Test Blade</h2>
        <hr>

        <div class="row">
            <div class="col-md-6">

                <form action="{{url('test/store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">name</label>
                        <input type="text" name="name" id="name" required value="popcorn">
                    </div>
                    <div class="form-group">
                        <label for="">price</label>
                        <input type="number" name="price" id="price" required value="100" min="100" max="10000">
                    </div>

                    <div>
                        <input type="submit" value="submit" class="btn btn-danger">
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
