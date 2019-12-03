@extends('layouts.default')
@section('content')
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="" style="text-align: center">

            <div class="container" style="margin-top: 85px; margin-left: 85px;">

                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Add Students</h2>
                        </div>
                        <br>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
                <br>

                <h3 align="center">Import Excel File in Laravel</h3>
                <br />
                
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        {!! Form::label('uploade', 'Uploade File:', ['class' => 'col-lg-2 control-label']) !!}

                        <div class="col-md-4" class="form-group">
                            <input type="file" name="studentsxls">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-9 offset-sm-3">
                            <button type="submit" name="submit"  class="btn btn-primary mr-2" style="margin-right: 360px;"> <i class="fa fa-save" aria-hidden="true"></i> Import Data</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>
</html>

@endsection