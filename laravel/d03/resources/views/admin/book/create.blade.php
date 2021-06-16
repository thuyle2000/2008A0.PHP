@extends('admin-layout.layout')
@section('title', 'create-book')
@section('main-content')

<div class="row">
    <div class="offset-md-1 col-md-6">
        <div class="card card-primary">

            <div class="card-header">
                <h3 class="card-title">Create New Book</h3>
            </div>
            <!-- /.card-header -->

            @if ($message = Session::get('loi'))
            <div class="alert alert-info alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            <!-- form start -->
            <form role="form" action="{{url('admin/book/createPost')}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Product ID</label>
                        <input type="number" class="form-control" id="id" name="id" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Nhap tua sach"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="">Author</label>
                        <input type="text" class="form-control" id="author" name='author' placeholder="Nhap ten tac gia"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="number" class="form-control" id="price" name='price' placeholder="Nhap don gia"
                            min='0' max="10000" value="100" required>
                    </div>

                    <div class="form-group">
                        <label for="">Edition</label>
                        <input type="number" class="form-control" id="edition" name='edition'
                            placeholder="Nhap lan xuat ban" min='1' max="100" required value="1">
                    </div>

                    <div class="form-group">
                        <label for="">Image File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="picture" name="picture" multiple
                                    accept="image/*">
                                <label class="custom-file-label" for="">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

@section('script-section')

{{-- <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script> --}}

<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
            bsCustomFileInput.init();
        });
</script>




@endsection
