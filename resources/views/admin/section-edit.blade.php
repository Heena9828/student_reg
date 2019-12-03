@extends('layouts.default')
@section('content')

<div class="" style="text-align: center">

    <div class="container" style="margin-top: 85px; margin-left: 85px;">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Section</h2>
                </div>
                <br>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('sections.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif
{!! Form::model($section, ['method' => 'PATCH','route' => ['sections.update', $section->id]]) !!}
@include('admin.section-form')
{!! Form::close() !!}
@endsection