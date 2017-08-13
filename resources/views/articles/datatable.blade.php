{{--@extends('layouts.app')--}}
{{--@section('content')--}}
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>


    <script>
        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('articles.dt.dd') !!}',
                columns: [
                    {data: 'id', name:'id'},
                    {data: 'title', name:'title'},
                    {data: 'body', name:'body'}
                ]

            });

        });
    </script>
</head>
<body>
<div class="container">
    <div class="row">
        <div>
            <table class="table table-striped table-bordered" id="users-table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th >Id</th>
                    <th ></th>
                    <th >Body</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>


{{--@endsection--}}



{{--@section('scripts')--}}


</body>
</html>
{{--@endsection--}}