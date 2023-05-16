@extends('layouts.app')

@section('content')
<div class="container py-4">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Project's Name</th>
                <th scope="col">Description</th>
                <th scope="col">Client</th>
                <th scope="col">Start_of_project</th>
                <th scope="col">End_of_project</th>
                <th scope="col">Progress_Status</th>
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
              </tr>
              @endforeach
            </tbody>
          </table>  
</div>
@endsection