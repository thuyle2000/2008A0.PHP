@extends('admin-layout.layout')
@section('title','book')

@section('main-content')
<h2>List of Books</h2>
<hr>
<div>
    <a href="{{url('/admin/book/create')}}">Create New Book</a>
</div>

<table class="table table-hover" id="book">
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>author</th>
            <th>picture</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ds as $item )
            <tr>
                <td> {{$item->id}} </td>
                <td> {{$item->title}}</td>
                <td> {{$item->author}}</td>
                <td> <img src="{{asset("images/$item->picture")}}" alt="" class='pic-in-list' > </td>
                <td><a href="">View</a> |
                <a href="{{url("/admin/book/edit/{$item->id}")}}">Edit</a> |
                <a href="{{url("/admin/book/delete/{$item->id}")}}">Delete</a></td>
            </tr>
        @endforeach
    </tbody>

</table>


@endsection

@section('script-section')
<script>
    $(function () {
        $('#book').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>

@endsection
