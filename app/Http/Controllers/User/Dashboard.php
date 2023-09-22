<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class Dashboard extends Controller
{
    public function index(): View
    {
        $user = Auth::user();

        $target = [];
        $data = [
            'name' => $user->name,
            'about' => $user->about,
            'target' => $target
        ];

        return view('user.dashboard', $data);
    }
}
