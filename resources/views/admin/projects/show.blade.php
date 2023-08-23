@extends('layouts.app')

@section('content')
<div class="col-7 m-auto mt-5">
    <div class="card text-center">
        <div class="card-header">
            #{{$project->id}} - {{$project->title}}
        </div>
        <div class="card-body">
            <h5 class="card-title">
                {{$project->title}}
            </h5>
            <p class="card-text">
                {{$project->description}}
            </p>
            <p class="card-text">
                {{$project->type}} - {{$project->language}}
            </p>
            <div class="card-footer text-muted">
                {{$project->created_date}}
            </div>
            
        </div>
        <div class="card-footer text-muted">
            <a href="{{ route('admin.projects.edit', $project->id) }}" class="badge bg-success p-2 m-1">Edit</a>
            <a href="" class="badge bg-danger p-2 m-1">Delete</a>
        </div>
    </div>
</div>
@endsection