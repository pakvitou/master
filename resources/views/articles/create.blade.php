@extends('layouts.app')
@section('title','Create an Article')
@section('content')
    <div class="panel panel-info" style="width: 40%;margin:auto 30%;">
        <div class="panel-heading">
            <h3 class="panel-title">Create article</h3>
        </div>
        <div class="panel-body">
            {{--check if have any error--}}
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        <li>{{$error}}</li>
                    </div>
                @endforeach

            @endif
            {!! Form::open(['url'=>'article']) !!}
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title',null,['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('body','Body')}}
                {{Form::textarea('body',null,['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::submit('Save',['class'=>'btn btn-success form-control '])}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection