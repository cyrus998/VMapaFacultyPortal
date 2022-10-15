<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subject;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        $totalusers = User::count();
        $totalteachers = User::where('position','teacher')->count();
        $totaladmins = User::where('role','1')->count();
        $activesubjects = Subject::count();

        $role = Auth::user()->role;
        if ($role=='1'){
            return view('dashboard', compact('totalusers','totalteachers', 'totaladmins', 'activesubjects'));
        }else
        {
            return view('dashboard', compact('totalusers','totalteachers', 'totaladmins', 'activesubjects'));
        }
    }
}
