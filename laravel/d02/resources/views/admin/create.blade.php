<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create-user</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Create new user</h2>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <form action="{{url("admin/post")}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label>username</label>
                        <input class="form-control" type="text" name="username" id="username" required
                        value="tam">
                    </div>

                    <div class="form-group">
                        <label>password</label>
                        <input type="password" name="password" id="password" class="form-control" required
                        value="abc">

                    </div>

                    <div class="form-group">
                        <label>email</label>
                        <input type="email" name="email" id="email" required class="form-control"
                        value="abc">

                    </div>

                    <div class="form-group">
                        <label>role</label>
                        <input type="radio" name="role" id="role" value="0" checked>user -
                        <input type="radio" name="role" id="role" value="1">admin
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
