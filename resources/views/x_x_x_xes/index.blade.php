@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> XXXXES
            <a class="btn btn-success pull-right" href="{{ route('x_x_x_xes.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($x_x_x_xes->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TITLE</th>
                        <th>PRICE</th>
                        <th>BODY</th>
                        <th>PUBLISHED</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($x_x_x_xes as $x_x_x_x)
                            <tr>
                                <td>{{$x_x_x_x->id}}</td>
                                <td>{{$x_x_x_x->title}}</td>
                    <td>{{$x_x_x_x->price}}</td>
                    <td>{{$x_x_x_x->body}}</td>
                    <td>{{$x_x_x_x->published}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('x_x_x_xes.show', $x_x_x_x->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('x_x_x_xes.edit', $x_x_x_x->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('x_x_x_xes.destroy', $x_x_x_x->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $x_x_x_xes->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection