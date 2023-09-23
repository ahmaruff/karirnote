<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Brag;
use Illuminate\Http\Request;

class BragController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'user_id' => ['required'],
            'date' => ['required', 'date'],
            'brag' => ['required', 'string', 'max:400'],
        ];
        $validatedData = $request->validate($rules);

        try{
            Brag::create($validatedData);
            return redirect()->route('user.dashboard');
        } catch (Exception $e) {
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Brag $brag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brag $brag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brag $brag)
    {
        $rules = [
            'user_id' => ['required'],
            'date' => ['required', 'date'],
            'brag' => ['required', 'string', 'max:400'],
        ];
        $validatedData = $request->validate($rules);

        try{
            $brag->update($validatedData);
            return redirect()->route('user.dashboard');
        } catch (Exception $e) {
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brag $brag)
    {
        try{
            $brag->delete();
            return redirect()->route('user.dashboard');
        } catch (Exception $e) {
            return redirect()->back();
        }
    }
}
