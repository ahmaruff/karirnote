<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Auth;
use Illuminate\Http\Request;
use Exception;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => ['required', 'string', 'max:255'],
            'user_id' => ['required'],
            'date' => ['required', 'date'],
            'description' => ['required', 'string', 'max:400'],
            'project_objective' => ['required', 'string', 'max:400'],
            'my_contribution' => ['required', 'string', 'max:400'],
            'result' => ['required', 'string', 'max:400'],
        ];
        $validatedData = $request->validate($rules);

        try{
            Project::create($validatedData);
            return redirect()->route('user.dashboard');
        } catch (Exception $e) {
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
