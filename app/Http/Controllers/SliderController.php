<?php

namespace App\Http\Controllers;

use App\Project;

class SliderController extends Controller
{
        public function index()
        {
          $projects = Project::all();

          return view ('projects', compact('projects'));
        }


        public function create()
        {
          return view ('create');
        }
        // public function store()
        // {
        //     $project = new Project;
        //
        //
        //     $project->title = request('title');
        //     $project->description = request('description');
        //
        //     $project->save();
        //
        //     return redirect('/projects');
        // }

}
