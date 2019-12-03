@extends('layouts.default')
@section('content')


<html lang="en">
    <head>
        <title>List</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container" style="margin-top: 85px; margin-left: 85px;">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Section List</h2>
                    </div>
                    <br>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ action('SectionController@create')}}"> Add Section</a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <table class="table table-bordered" border="1">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($sections as $section)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $section->section_name}}</td>
                    <td><a class="fa fa-pencil-square-o" href="{{ route('sections.edit',$section->id) }}"></a></td>
                   <td>
                        {!! Form::open(['method' => 'DELETE','route' => ['sections.destroy', $section->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                
                </tr>
                 @endforeach
                  </table>
                 {!! $sections->render() !!}
               
           
        </div>

    </body>
</html>

@stop