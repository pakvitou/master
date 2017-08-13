@extends('layouts.app')
@section('title','Create an Article')
@section('content')

    <div class="container" style="width: 40%;margin:auto 30%;">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    <li>{{$error}}</li>
                </div>
            @endforeach
        @endif
        <div class="col-md-12">
            {!! Form::open(['url'=>'/go']) !!}
            <div class="form-group">

                <div class="col-md-9">
                    {{Form::text('title',null,['class'=>'form-control'])}}
                </div>
                <div class="col-md-3">
                    {{Form::submit('Search',['class'=>'btn btn-success form-control '])}}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        <div class="alert alert-success" role="alert" style=""><h3
                    style="padding-left: 15px;padding-top: 20px">{{$exist}}</div>
    </div>


@endsection

