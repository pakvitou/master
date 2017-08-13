@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-sm-12">
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
                <a href="{{url('tntindex')}}"><button type="button" class="btn btn-primary">TNT Search</button></a>
            </div>
            <div class="col-sm-6">
                {!! Form::open(['url'=>'/tntsearch']) !!}
                <div class="col-sm-4">
                    <div class="form-group">
                        {{Form::text('title',null,array('class'=>'form-control','placeholder'=>'Type Words','required'))}}
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="btn-group">
                        {{Form::submit('Search',['class'=>'btn btn-default'])}}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div  class="col-md-3"></div>
        <div  class="col-md-6">
            @if(isset($Articles))
            <h2>Menu</h2>
            {{--<p>Using all the table classes on one table:</p>--}}
            <table class="table table-striped table-bordered table-hover table-condensed" id="data-table">
                <thead>
                <tr>
                    <th style="text-align: center">Title</th>
                    <th style="text-align: center">Body</th>
                </tr>
                </thead>
                @foreach( $Articles as $Article)
                    <tbody>
                        <tr>
                            <td>{{$Article->title}}</td>
                            <td>{{$Article->body}}</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            {{--<a href="{{url('articles/create')}}"><button type="button" class="btn btn-primary">Create</button></a>--}}
        </div>
        @endif
        <div  class="col-md-3"></div>
    </div>
    @if(isset($words))
        <div class="col-md-12">
            <div class="col-md-6"></div>
            <div class="col-md-2">
                @if(isset($words))
                    <div class="alert alert-danger">
                        {{$words}}
                    </div>
                @endif
            </div>
            <div class="col-md-4"></div>
        </div>
    @endif
@endsection