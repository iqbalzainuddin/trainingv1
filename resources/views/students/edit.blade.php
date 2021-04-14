@extends('layouts.template')

@section('content')
    <div class="container pt-5">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Details</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('students.update', Auth::user()->id ) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $student->name }}" class="form-control" placeholder="Subject Code">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" class="form-control" name="email" value="{{ $student->email }}" placeholder="Subject Name"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Lecture Group:</strong>
                <select class="form-control" name="group_id">
                    <option value="">-- Choose Lecture Groups --</option>
                    @foreach ($groups as $id => $name)
                        <option
                            value="{{$id}}" {{ (isset($student['group_id']) && $student['group_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
    </div>
@endsection