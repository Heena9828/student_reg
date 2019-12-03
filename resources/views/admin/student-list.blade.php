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
                        <h2>Student List</h2>
                    </div>
                    <br>
                    <div class="pull-right">
                       <a class="btn btn-primary" href="{{ route('export') }}">Export User Data</a>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" style="margin-right: 10px;" href="{{ action('StudentController@add_multi_students')}}"> Add Multiple Students</a>
                    </div>
                    <div class="pull-right" style="margin-right: 10px;">
                        <a class="btn btn-primary" href="{{ action('StudentController@create')}}"> Add Student</a>
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
                    <th>Roll No</th>
                    <th>Student Name</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Father Name</th>
                    <th>Mother Name</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($students as $student)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $student->roll_no }}</td>
                    <td>{{ $student->student_name}}</td> 
                    <td>{{ $student->gender}}</td> 
                    <td>{{ date('d/m/Y', strtotime($student->dob)) }}</td> 
                    <td>{{ $student->father_name}}</td> 
                    <td>{{ $student->mother_name}}</td>
                    
                     @if(isset($student->classes->class_name))
                    <td>{{ $student->classes->class_name }}</td>
                    @else
                    <td></td>
                    @endif
                    
                    @if(isset($student->sections->section_name))
                    <td>{{ $student->sections->section_name }}</td>
                    @else
                    <td></td>
                    @endif

                    <td><a class="fa fa-pencil-square-o" href="{{ route('students.edit',$student->id) }}"></a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE','route' => ['students.destroy', $student->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>                
                </tr>
                @endforeach
            </table>
            {!! $students->render() !!}


        </div>

    </body>
</html>

@stop