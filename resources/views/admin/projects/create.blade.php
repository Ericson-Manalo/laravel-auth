@extends('layouts.app')

@section('content')
<div class="col-7 m-auto mt-5">
    <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title Project</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" cols="95 "rows="10"></textarea>
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" id="type" name="type">
    </div>
    <div class="mb-3">
        <label for="language" class="form-label">Language</label>
        <input type="text" class="form-control" id="language" name="language">
    </div>
    <div class="mb-3">
        <label for="created_date" class="form-label">Date of creation</label>
        <input type="date" class="form-control" id="created_date" name="created_date">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>

    </form>
</div>
@endsection