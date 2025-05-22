@extends('projects.layout')

@section('content')
<h2>Add New Project</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Please fix the following errors:
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('projects.form', ['project' => null])
</form>
@endsection
