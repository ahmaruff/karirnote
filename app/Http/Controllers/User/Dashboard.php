<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Brag;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Target;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class Dashboard extends Controller
{
    private $user;

    public function __construct() {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            return $next($request);
        });
    }
    public function index(): View
    {
        $target = Target::orderBy('created_at', 'DESC')->limit(10)->get(['id', 'target'])->toArray();
        $projects = Project::all()->toArray();
        $skills = Skill::all()->toArray();
        $brags = Brag::all()->toArray();
        // $target = Target::all()->toArray();
        $data = [
            'name' => $this->user->name,
            'about' => $this->user->about,
            'target' => $target,
            'projects' => $projects,
            'skills' => $skills,
            'brags' => $brags,
        ];

        return view('user.dashboard', $data);
    }
}
