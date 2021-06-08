<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <hr>
        <div>
            {{-- khoi bao loi dang nhap khong hop le --}}
            <h3 style="color: red;">
                @if (session('message'))
                {{ session('message') }}
                @endif
            </h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="{{url("checklogin")}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label>username</label>
                        <input class="form-control" type="text" name="username" id="username" required value="tam">
                    </div>

                    <div class="form-group">
                        <label>password</label>
                        <input type="password" name="password" id="password" class="form-control" required value="abc">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-danger" value="btok">Submit</button>
                        <button type="reset" class="btn btn-info">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
