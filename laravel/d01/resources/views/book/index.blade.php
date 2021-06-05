<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>book-index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>List of BOOKs</h2>
        <hr>
        <a href="{{url('/book/create')}}">Create New Book</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Edition</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($ds as $item)
                <tr>
                    <td> {{ $item->id }} </td>
                    <td> {{ $item->title }}</td>
                    <td> {{ $item->author }}</td>
                    <td> {{ $item->price }}</td>
                    <td> {{ $item->edition }}</td>
                    <td><a href="{{URL::to("book/edit/{$item->id}")}}">Edit</a></td>
                    <td><a href="{{url("book/delete/{$item->id}")}}"
                        onclick="javascript:return confirm('are u sure ?')">Delete</a></td>
                </tr>
                @endforeach
            </tbody>

        </table>


    </div>



</body>

</html>
