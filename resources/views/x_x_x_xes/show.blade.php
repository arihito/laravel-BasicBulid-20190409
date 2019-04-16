@extends('layout')
@section('header')
<div class="page-header">
        <h1>XXXXES / Show #{{$x_x_x_x->id}}</h1>
        <form action="{{ route('x_x_x_xes.destroy', $x_x_x_x->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('x_x_x_xes.edit', $x_x_x_x->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
                <div class="form-group">
                     <label for="title">TITLE</label>
                     <p class="form-control-static">{{$x_x_x_x->title}}</p>
                </div>
                    <div class="form-group">
                     <label for="price">PRICE</label>
                     <p class="form-control-static">{{$x_x_x_x->price}}</p>
                </div>
                    <div class="form-group">
                     <label for="body">BODY</label>
                     <p class="form-control-static">{{$x_x_x_x->body}}</p>
                </div>
                    <div class="form-group">
                     <label for="published">PUBLISHED</label>
                     <p class="form-control-static">{{$x_x_x_x->published}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('x_x_x_xes.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection