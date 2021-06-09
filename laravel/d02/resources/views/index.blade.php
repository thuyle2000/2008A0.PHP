<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .login{
            text-align: right;
        }
        .login a{
            padding: .2rem .5rem;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Book List</h2>
        <hr>
        <div class="login">
            <a href="{{url('login')}}" class="btn btn-danger">Login</a>

        </div>

        {{-- in ra cac quyen sach: hinh anh, tua va don gia --}}
        <div class="row">
            @foreach ($ds as $item )
                <div class="col-sm-6 col-md-4">
                    <img src="{{asset("images/$item->picture")}}" alt="{{$item->title}}">
                    <p>{{$item->title}} <br> {{$item->price}} </p>
                </div>
            @endforeach
        </div>

    </div>
</body>
</html>
