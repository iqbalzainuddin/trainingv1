<div class="row">
    <div class="col-lg-12 margin-tb mt-3 mb-3">
        <div class="pull-left">
            <h2>List of Lecture Halls</h2>
        </div>
        @if (Route::has('groups.create'))
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('halls.create') }}"> Add New Hall</a>
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
        <th>Name</th>
        <th>Place</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($halls as $g)
    <tr>
        <td>{{ $g->id }}</td>
        <td>{{ $g->name }}</td>
        <td>{{ $g->place }}</td>
        <td>
            <form action="{{ route('halls.destroy',$g->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('halls.show',$g->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('halls.edit',$g->id) }}">Edit</a>

                @csrf
                @method('DELETE')
    
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>