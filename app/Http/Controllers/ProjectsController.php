<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
      public function index()
      {
        $projects = Project::all();

        return view('project.index');
      }
      public function show()
      {

      }
      public function edit()
      {
        $project = Project::find($id);
        return view('projects.edit', compact('project'));
      }
      public function update()
      {

      }
      public function destroy()
      {

      }
      public function create()
      {
        return view ('create');
      }
      public function store ()
      {
        $project = new Project();
        // dd(request());
        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');

      }
}
