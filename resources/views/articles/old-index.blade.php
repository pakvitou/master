@extends('layouts.app')
@section('content')

    <div class="container">
        <h2>Table</h2>
        <p>Using all the table classes on one table:</p>
        <table class="table table-striped table-bordered table-hover table-condensed" id="data-table">
            <thead>
            <tr>
                <th>hello</th>
                <th>Title</th>
                <th>Body</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $user_login as $num =>$get_user)
                <tr>
                    <td>{{$num+1}}</td>
                    <td>{{$get_user->title}}</td>
                    <td>{{$get_user->body}}</td>
                    <td>
                        <a href="{{url('articles/edits').'/'.$get_user->id}}">
                            <button type="button" class="btn btn-success ">Edit</button>
                        </a>
                        <a href="{{url('articles/delete'.'/'.$get_user->id)}}">
                            <button type="button" class="btn btn-danger ">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{url('articles/create')}}">
            <button type="button" class="btn btn-primary">Create</button>
        </a>
    </div>


@endsection