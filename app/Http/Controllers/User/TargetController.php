<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Target;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class TargetController extends Controller
{
    private $user_id;
    public function __construct() {
        $this->middleware(function ($request, $next) {
            $this->user_id = Auth::user()->id;
            return $next($request);
        });
    }

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
            'user_id' => ['required',],
            'target' => ['required', 'string', 'max:300'],
        ];

        $validatedData = $request->validate($rules);

        try{
            Target::create($validatedData);
            return redirect()->route('user.dashboard');
        } catch (Exception $e) {
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Target $target)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Target $target)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Target $target)
    {
        $rules = [
            // 'id' => ['required',],
            'target' => ['required', 'string', 'max:300'],
        ];

        $validatedData = $request->validate($rules);

        try{
            $target->update($validatedData);
            return redirect()->route('user.dashboard');
        } catch (Exception $e) {
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Target $target)
    {
        //
    }
}
