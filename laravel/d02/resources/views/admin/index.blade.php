<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>List of Users</h2>
        <hr>
        <a href="{{url("admin/create")}}">Create New User</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>user</th>
                    <th>email</th>
                    <th>role</th>
                    <th>status</th>
                    <th>action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($ds as $user)
                <tr>
                    <td> {{$user->id }}</td>
                    <td> {{$user->username }}</td>
                    <td> {{$user->email}}</td>
                    <td> {{$user->role}}</td>
                    <td> {{$user->active?"active":"inactive" }}</td>
                    <td><a href="{{url("admin/resetpass/$user->id")}}">reset password</a></td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</body>

</html>
