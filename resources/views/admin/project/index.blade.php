@extends('layouts.app')

@section('content')
<div class="container py-4">
  <div class="mb-3">
    <a href="{{ route("projects.create") }}" class="btn btn-primary text-light">
      Add a Project
    </a>
  </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Project's Name</th>
                <th scope="col">Description</th>
                <th scope="col">Client</th>
                <th scope="col">Start_of_project</th>
                <th scope="col">End_of_project</th>
                <th scope="col">Progress_Status</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
              <tr>
                <th scope="row">
                    <a href="{{ route("projects.show", $project->id)}}">
                        {{ $project->name }}
                    </a>
                </th>
                <td>{{ $project->description }}</td>
                <td>{{ $project->client }}</td>
                <td>{{ $project->start }}</td>
                <td>{{ $project->end }}</td>
                <td>{{ $project->progress_status }}</td>
                <td>
                  <div class="d-flex">
                      <a href="{{ route("projects.edit", $project->id)}}" class="btn btn-primary me-1">
                        <i class="fa-solid fa-pen text-light"></i>
                      </a>
                      <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">
                          <i class="fa-solid fa-trash text-light"></i>
                        </button>
                    </form>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>  
</div>
@endsection