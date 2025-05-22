<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // GET /projects
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    // GET /projects/create
    public function create()
    {
        return view('projects.create');
    }

    // POST /projects
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required|string',
            'description' => 'nullable|string',
            'project_url' => 'nullable|url',
            'image'       => 'required|image',
            'status'      => 'required|in:draft,published',
        ]);

        $data['image'] = $request->file('image')->store('images', 'public');

        Project::create($data);
        return redirect()->route('projects.index');
    }

    // GET /projects/{project}
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    // GET /projects/{project}/edit
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    // PUT /projects/{project}
    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title'       => 'required|string',
            'description' => 'nullable|string',
            'project_url' => 'nullable|url',
            'image'       => 'nullable|image',
            'status'      => 'required|in:draft,published',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $project->update($data);
        return redirect()->route('projects.index');
    }

    // DELETE /projects/{project}
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');
    }
}
