@extends('layouts.app')

@section('content')
<div class="col-10 m-auto mt-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Project's Title</th>
                <th scope="col">Description</th>
                <th scope="col">Type</th>
                <th scope="col">Language used</th>
                <th scope="col">Data created</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>
                    {{$project->id}}
                </td>
                <th>
                    {{$project->title}}
                </th>
                <td>
                    {{$project->description}}
                </td>
                <td>
                    {{$project->type}}
                </td>
                <td>
                    {{$project->language}}
                </td>
                <td>
                    {{$project->created_date}}
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

    {{$projects->links()}}
</div>
@endsection