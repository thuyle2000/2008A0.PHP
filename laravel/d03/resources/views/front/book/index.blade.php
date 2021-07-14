<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Pagination with Next Previous Button Link using Ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <br />
        <h3>Laravel Pagination With Previous Next Button Link Using Ajax</h3>
        <br />
        @csrf

            {{-- <div class="col-md-5">
                <table class="table table-responsive table-hover table-condensed" id="table_data">
                    <thead>
                        <tr>
                            <th>Title</th>
                        </tr>
                    </thead>

                    @include('front.book.index_pagination')
                </table>
            </div> --}}

            @include('front.book.index_pagination')



    </div>
</body>

</html>


<script>
    $(document).ready(function () {

        $(document).on('click', '.page-link', function (event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page) {
            var _token = $("input[name=_token]").val();
            $.ajax({
                url: "{{ route('pagination.fetch') }}",
                method: "POST",
                data: { _token: _token, page: page },
                success: function (data) {
                    $('#table_data').html(data);
                }
            });
        }

    });
</script>
