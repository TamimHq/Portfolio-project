@extends('projects.layout')

@section('content')
<a href="{{ route('projects.create') }}" class="btn btn-success mb-3">Add New Project</a>
<table class="table table-bordered">
    <tr>
        <th>Title</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    @foreach ($projects as $project)
    <tr>
        <td>{{ $project->title }}</td>
        <td>{{ $project->status }}</td>
        <td>
            <a href="{{ route('projects.show', $project) }}" class="btn btn-info btn-sm">View</a>
            <a href="{{ route('projects.edit', $project) }}" class="btn btn-primary btn-sm">Edit</a>
            <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this project?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
