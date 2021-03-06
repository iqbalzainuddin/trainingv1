@extends('layouts.template')

@section('content')
<div class="container pt-5">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Hall Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $hall->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Place:</strong>
                {{ $hall->place }}
            </div>
        </div>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('halls.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection