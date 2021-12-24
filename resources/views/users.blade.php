<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Datatables Tutorial - ItSolutionStuff.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
</head>
<body>

<div class="container">
    <h1>Laravel 8 Datatables Tutorial <br/> shouts.dev</h1>
    <table class="table table-bordered data-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th width="100px">Action</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

</body>

<script>
    $(document).ready(function () {
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('users.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

    });
</script>
</html>
