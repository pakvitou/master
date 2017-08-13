@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-sm-12">
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
                <a href="{{url('algoindex')}}">
                    <button type="button" class="btn btn-primary">TNT Search</button>
                </a>
            </div>
            <div class="col-sm-6">
                {!! Form::open(['url'=>'/algosearch']) !!}
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
    <div class="container">
        <div class="col-md-12">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                @if(isset($Articles))
                    @if(count($Articles)>0)
                        <h2>Menu</h2>
                        {{--<p>Using all the table classes on one table:</p>--}}
                        <table class="table table-striped table-bordered table-hover table-condensed" id="data-table">
                            <thead>
                            <tr>
                                <th style="text-align: center">Title</th>
                                <th style="text-align: center">Body</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $Articles as $Article)
                                <tr>
                                    <td>{{$Article->title}}</td>
                                    <td>{{$Article->body}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                 @else
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="col-md-12">
            <div class="col-md-6"></div>
            <div class="col-md-2">
                @if(isset($name))
                    <div class="alert alert-danger">
                        {{$name}}
                    </div>
                @endif
            </div>
            <div class="col-md-4"></div>
        </div>
        @endif
    </div>
@endsection