<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data = [];
        return view('admin.dashboard', $data);
    }

    public function profile() {
        $data = [];
        return view('admin.profile',$data);
    }
}
