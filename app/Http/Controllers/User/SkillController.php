<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use Exception;

class SkillController extends Controller
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
        return view('user.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'user_id' => ['required'],
            'date' => ['required', 'date'],
            'skill' => ['required', 'string'],
            'description' => ['required', 'string', 'max:400'],
        ];
        $validatedData = $request->validate($rules);

        try{
            Skill::create($validatedData);
            return redirect()->route('user.dashboard');
        } catch (Exception $e) {
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        $data = [
            'skill' => $skill,
        ];
        return view('user.skill.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $rules = [
            'user_id' => ['required'],
            'date' => ['required', 'date'],
            'skill' => ['required', 'string'],
            'description' => ['required', 'string', 'max:400'],
        ];
        $validatedData = $request->validate($rules);

        try{
            $skill->update($validatedData);
            return redirect()->route('user.dashboard');
        } catch (Exception $e) {
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        try{
            $skill->delete();
            return redirect()->route('user.dashboard');
        } catch (Exception $e) {
            return redirect()->back();
        }
    }
}
