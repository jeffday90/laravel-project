<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use this to shorten the naming convention so you can just use Project
use App\Project;

class ProjectsController extends Controller
{
    public function index() 
    {
        // a slash ('\') at the beginning of the route signifies to go to home directory 
        // --> this is a PHP convention
        // $projects = \App\Project::all();
        
        $projects = Project::all();

        // interpets and returns JSON automatically
        // return $projects;
        
        return view('projects.index', compact('projects'));
    }

    public function create() 
    {
        return view('projects.create');
    }

    public function store() 
    {
        $project = new Project();
        $project->title = request('title');
        $project->description = request('description');
        $project->save();

        return redirect('/projects');

    }

    public function show () 
    {

    }

    public function edit() // example.com/projects/project/edit
    {
        return view('projects.edit')
    }

    public function update() 
    {

    }

    public function delete() 
    {

    }
}
