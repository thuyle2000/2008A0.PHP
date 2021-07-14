{{-- <tbody>
    @foreach($data as $row)
    <tr>
        <td>{{ $row->title }} </td>

</tr>
@endforeach
</tbody>
<tfoot>
    <tr>
        <td> {!! $data->links() !!}</td>
    </tr>
</tfoot> --}}

<div class="row">
@foreach($data as $row)
<div class="col-md-3">
    <p>{{$row->title}}</p>
    <img src="{{asset("images/$row->picture")}}" alt=""
    style="width:90%">
</div>
@endforeach
</div>

<p> {!! $data->links() !!}</p>

