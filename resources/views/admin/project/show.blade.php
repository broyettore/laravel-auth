@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-3">Project: {{ $project->name }}</h2>
    <div class="project_content">
        <ul class="list-group">
            <li class="list-group-item">Description :{{ $project->description }}</li>
            <li class="list-group-item">Client : {{ $project->client }}</li>
            <li class="list-group-item">Starting Date: {{ $project->start }}</li>
            <li class="list-group-item">End date: {{ $project->end }}</li>
            <li class="list-group-item">Progress: {{ $project->progress_status }}</li>
          </ul>
    </div>
</div>
@endsection