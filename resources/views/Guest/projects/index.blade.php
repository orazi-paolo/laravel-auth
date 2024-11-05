@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Projects</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Url</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->url }}</td>
                <td>
                    <a href="{{ route('guest.projects.show', $project->id )}}" class="btn btn-primary btn-sm">Show</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('additional-script')
<script>
    @vite('resources/js/delete-project.js')
</script>
@endsection
