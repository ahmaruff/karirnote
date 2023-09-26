<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Brag;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Target;
use App\Models\User;
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
        $target = Target::where('user_id','=',$this->user->id)->orderBy('created_at', 'DESC')->get(['id', 'target'])->toArray();
        $projects = Project::where('user_id','=',$this->user->id)->orderBy('date', 'DESC')->get(['id', 'date', 'project_background', 'my_contribution', 'impact'])->toArray();
        $skills = Skill::where('user_id','=',$this->user->id)->orderBy('date', 'DESC')->get(['id', 'date', 'skill', 'description'])->toArray();
        $brags = Brag::where('user_id','=',$this->user->id)->orderBy('date', 'DESC')->get(['id', 'date', 'brag'])->toArray();
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

    public function profile(): View
    {
        $data = [
            'user' => $this->user,
        ];
        return view('user.profile', $data);
    }
}
