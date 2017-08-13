@extends('layouts.app')
@section('title','Index an Article')
@section('content')
    {{--table--}}
    <div class="container">
        <table class="table table-bordered" id="users-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
            </thead>
        </table>
        <a href="{{url('articles/create')}}">
            <button type="button" class="btn btn-primary">Create</button>
        </a>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('datatable') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'title'},
                    {data: 'body', name: 'body'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'action', name: 'Action'}
                ],
                pagelenth: 10,
            });
        });
    </script>
@endsection
