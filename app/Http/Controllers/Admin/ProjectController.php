<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Validation\Rule;

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

        // dd($request->all());
        $data = $request->validate([
            'title' => ['required', 'unique:projects', 'min:6'],
            'description' => ['max:500'],
            'type' => ['required'],
            'language' => ['required'],
            'created_date' => ['required'],
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
    public function edit(Project $project)
    {
        //
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
        $data = $request->validate([
            'title' => ['required', 'unique:projects', 'min:6', Rule::unique('projects')->ignore($project->id)],
            'description' => ['max:500'],
            'type' => ['required'],
            'language' => ['required'],
            'created_date' => ['required'],
        ]);

        $project->update($data);

        return redirect()->route('admin.projects.index', compact('project'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
