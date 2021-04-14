@extends('layouts.template')

@section('content')
<div class="container pt-5">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Student Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student Name:</strong>
                {{ Auth::user()->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student Email:</strong>
                {{ Auth::user()->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Group:</strong>
                @foreach ($student as $s)
                    @if(!$s->lecture_groups == null)
                    {{ $s->lecture_groups->name }}
                    @endif
                @endforeach 
            </div>
        </div>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
                <a class="btn btn-primary" href="{{ route('students.edit', Auth::user()->id) }}"> Edit</a>
        </div>
    </div>
</div>
@endsection