@extends('layouts.app')
@section('title','Edit an Article')
@section('content')
    <div class="panel panel-info" style="width: 40%;margin:auto 30%;">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    <li>{{$error}}</li>
                </div>
            @endforeach

        @endif
        <div class="panel-heading">
            <h3 class="panel-title">Edit article</h3>
        </div>
        <div class="panel-body">
            {!! Form::model($key,['url'=>'save_update/'.$key->id,'method'=>'GET']) !!}
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title',null,['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('body','Body')}}
                {{Form::textarea('body',null,['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::submit('Save',['class'=>'btn btn-primary form-control'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection