@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Edit project</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter the name of the project">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description"
                value="{{ old('description') }}" placeholder="Enter the description of the project">
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">Url</label>
            <input type="text" class="form-control" id="url" name="url" value="{{ old('url') }}" placeholder="Enter the URL of the project">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{ route('admin.projects.index')}}" class="btn btn-secondary">Return</a>
    </form>
</div>
@endsection
