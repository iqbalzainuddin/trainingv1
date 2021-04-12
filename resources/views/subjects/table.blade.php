<div class="row">
    <div class="col-lg-12 margin-tb mt-3 mb-3">
        <div class="pull-left">
            <h2>List of Subjects</h2>
        </div>
        @if (Route::has('subjects.create'))
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('subjects.create') }}"> Add New Subject</a>
        </div>
        @endif
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Subject Code</th>
        <th>Subject Name</th>
        <th>Semester</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($subjects as $s)
    <tr>
        <td>{{ $s->id }}</td>
        <td>{{ $s->course_code }}</td>
        <td>{{ $s->course_name }}</td>
        <td>{{ $s->semester }}</td>
        <td>
            <form action="{{ route('subjects.destroy',$s->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('subjects.show',$s->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('subjects.edit',$s->id) }}">Edit</a>

                @csrf
                @method('DELETE')
    
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>