@extends('layouts.app')

@section('content')
<div class="container py-4">
    <form action="{{ route('projects.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Project's Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
    </div>
    <div class="mb-3">
        <label for="client" class="form-label">Client</label>
        <input type="text" class="form-control" id="client" name="client" value="{{ old('client') }}">
    </div>
    <div class="mb-3">
        <label for="start" class="form-label">Starting Dtae</label>
        <input type="date" class="form-control" id="start" name="start" value="{{ old('start') }}">
    </div>
    <div class="mb-3">
        <label for="end" class="form-label">End Date</label>
        <input type="date" class="form-control" id="end" name="end" value="{{ old('end') }}">
    </div>
    <div class="mb-3">
        <label for="progress_status" class="form-label">Progress/Status</label>
        <input type="text" class="form-control" id="progress_status" name="progress_status" value="{{ old('progress_status') }}">
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">
    </div>
    <div class="mb-3">
        <input type="submit" value="submit" class="btn btn-primary">
    </div>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<button type="button" class="btn btn-primary mb-3">
    <a href="{{ route("projects.index") }}" class="text-light">Torna al menu principale</a>
</button>
</div>
@endsection