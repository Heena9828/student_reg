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
                        <h2>Attendance List</h2>
                    </div>
                    <br>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ action('AttendanceController@create')}}"> Add Attendance</a>
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
                    <th>Date</th>
                    <th>Student Name</th>
                    <th>Class Name</th>
                    <th>Section Name</th>
                    <th>Status</th>
                </tr>
                @foreach ($attendances as $attendance)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ date('d/m/Y', strtotime($attendance->attendance_date)) }}</td>
                    
                    @if(isset($attendance->students->student_name))
                    <td>{{ $attendance->students->student_name }}</td>
                    @else
                    <td></td>
                    @endif
                    
                    
                     @if(isset($attendance->classes->class_name))
                    <td>{{ $attendance->classes->class_name }}</td>
                    @else
                    <td></td>
                    @endif
                    
                    @if(isset($attendance->sections->section_name))
                    <td>{{ $attendance->sections->section_name }}</td>
                    @else
                    <td></td>
                    @endif
                    
                                        
                    <td>{{ $attendance->status }}</td>

                                  
                </tr>
                @endforeach
            </table>
           {!! $attendances->render() !!}


        </div>

    </body>
</html>

@stop