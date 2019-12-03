<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>



    </head>
    <body>
        <div class="" style="text-align: center">

            <div class="container" style="margin-top: 85px; margin-left: 85px;">

                <div class="form-group row" >
                    {!! Form::label('roll_no', 'Roll No:', ['class' => 'col-lg-2 control-label']) !!}

                    <div class="col-md-4" class="form-group">
                        {!! Form::text('roll_no', null, array('placeholder' => 'Roll No','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="form-group row" >
                    {!! Form::label('student_name', 'Student Name:', ['class' => 'col-lg-2 control-label']) !!}

                    <div class="col-md-4" class="form-group">
                        {!! Form::text('student_name', null, array('placeholder' => 'Student Name','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="form-group row" >
                    {!! Form::label('gender', 'Gender:', ['class' => 'col-lg-2 control-label']) !!}

                    <div class="col-md-4" class="form-group">
                        <select name="gender" class="form-control">
                            <option value="">--- Select Gender ---</option>
                            <option value="Boy" {{ ( isset($student) && $student['gender'] == 'Boy') ? 'selected="selected"' : '' }}>Boy</option>
                            <option value="Girl" {{ ( isset($student) && $student['gender'] == 'Girl') ? 'selected="selected"' : '' }}>Girl</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row" >
                    {!! Form::label('dob', 'DOB:', ['class' => 'col-lg-2 control-label']) !!}

                    <div class="col-md-4" class="form-group">
                        {!! Form::date('dob', null, array('placeholder' => 'dd/mm/yyyy','class' => 'form-control date')) !!}
                    </div>
                </div>

                <div class="form-group row" >
                    {!! Form::label('father_name', 'Father Name:', ['class' => 'col-lg-2 control-label']) !!}

                    <div class="col-md-4" class="form-group">
                        {!! Form::text('father_name', null, array('placeholder' => 'Father Name','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="form-group row" >
                    {!! Form::label('mother_name', 'Mother Name:', ['class' => 'col-lg-2 control-label']) !!}

                    <div class="col-md-4" class="form-group">
                        {!! Form::text('mother_name', null, array('placeholder' => 'Mother Name','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="form-group row" >
                    {!! Form::label('address', 'Address:', ['class' => 'col-lg-2 control-label']) !!}

                    <div class="col-md-4" class="form-group">
                        {!! Form::textarea('address', null, array('placeholder' => 'Address','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="form-group row" >
                    {!! Form::label('class_id', 'Class Name:', ['class' => 'col-lg-2 control-label']) !!}

                    <div class="col-md-4" class="form-group">
                        <select name="class_id" class="form-control">
                            <option value="">--- Select Class ---</option>
                            @foreach ($arr_class as $value)
                            <option value="{{ $value['id'] }}" {{ ( isset($student) && $student['class_id'] == $value['id']) ? 'selected="selected"' : '' }}>{{ $value['class_name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row" >
                    {!! Form::label('section_id', 'Section Name:', ['class' => 'col-lg-2 control-label']) !!}

                    <div class="col-md-4" class="form-group">
                        <select name="section_id" class="form-control">
                            <option value="">--- Select Section ---</option>
                            @foreach ($arr_section as $value)
                            <option value="{{ $value['id'] }}" {{ ( isset($student) && $student['section_id'] == $value['id']) ? 'selected="selected"' : '' }}>{{ $value['section_name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-9 offset-sm-3">
                        <button type="submit" name="save"  id="button" class="btn btn-primary mr-2" style="margin-right: 360px;"> <i class="fa fa-save" aria-hidden="true"></i> Save</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
<script>
    $(document).ready(function () {
        $('.date').datetimepicker({
            format: 'MM/DD/YYYY'
        });
    });
</script>