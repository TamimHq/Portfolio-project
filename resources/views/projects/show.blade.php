@extends('projects.layout')

@section('content')
    <h2>Project Details</h2>

    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ $project->title }}</strong>
            <span class="badge bg-secondary float-end">{{ ucfirst($project->status) }}</span>
        </div>
        <div class="card-body">
            @if ($project->image)
                <img src="{{ asset('storage/' . $project->image) }}" alt="Project Image" class="img-fluid mb-3" style="max-height: 300px;">
            @endif

            @if ($project->description)
                <p><strong>Description:</strong> {{ $project->description }}</p>
            @endif

            @if ($project->project_url)
                <p><strong>URL:</strong> <a href="{{ $project->project_url }}" target="_blank">{{ $project->project_url }}</a></p>
            @endif
        </div>
    </div>

    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Back to List</a>
    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary">Edit</a>
@endsection
