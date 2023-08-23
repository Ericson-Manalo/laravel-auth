<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $projects = Project::paginate(10);
        // dd($projects);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $data = $request->validate([
            'title' => ['required', 'unique:projects', 'min:6'],
            'description' => ['max:500'],
            'type' => ['required'],
            'language' => ['redquired'],
            'created_data' => ['required'],
        ]);

        $newProject = Project::create($data);
        $newProject->save();

        return redirect()->route('admin.projects.index');

        // $data = $request-> all();

        // $newProject = new Project();
        // $newProject->title = $data['title'];
        // $newProject->description = $data['description'];
        // $newProject->type = $data['type'];
        // $newProject->language = $data['language'];
        // $newProject->created_data = $data['created_data'];
        // $newProject->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
