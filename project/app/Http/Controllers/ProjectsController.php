<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use this to shorten the naming convention so you can just use Project
use App\Project;

// ROUTE MODEL BINDING looks like: Project $project


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
        
        // compact sends all of the projects to the view
        return view('projects.index', compact('projects'));
    }

    public function create() 
    {
        return view('projects.create');
    }

    public function store() 
    {

        // need validation to ensure that project entered will 


        //validate method

        // if validation fails redirects to the page and populates an errors variable
        request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);


        // creates a new project
        Project::create(request(['title', 'description']));


        // $project = new Project();
        // $project->title = = request('title');
        // $project->description = request('description');
        // $project->save();

        return redirect('/projects');

    }

    public function show (Project $project) 
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project) // example.com/projects/project/edit
    {
        // compact passes variables to view
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project) 
    {
        $project->update(request(['title', 'description']));
        return redirect('/projects');
    }

    public function destroy(Project $project) 
    {   
        $project->delete();
        return redirect('/projects');
    }
}
