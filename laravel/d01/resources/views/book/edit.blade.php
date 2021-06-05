<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>book-create</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>
            Edit Book Information
        </h2>
        <hr>
        <div class="row">
            <div class="col-md-6">

                <form action="{{URL::to("/book/postedit/$book->id")}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">title</label>
                        <input type="text" class="form-control" id="title" name="title"
                        value="{{$book->title}}"  required>
                    </div>

                    <div class="form-group">
                        <label for="">author</label>
                        <input type="text" class="form-control" id="author" name="author"
                        value="{{$book->author}}"  required>
                    </div>

                    <div class="form-group">
                        <label for="">price</label>
                        <input type="number" class="form-control" id="price" name="price"
                        value="{{$book->price}}" required>
                    </div>

                    <div class="form-group">
                        <label for="">edition</label>
                        <input type="number" class="form-control" id="edition" name="edition" value="{{$book->edition}}" required>
                    </div>


                    <div>
                        <button type="submit" class="btn btn-danger">Submit</button>
                        <button type="reset" class="btn btn-info">Reset</button>

                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

</html>
