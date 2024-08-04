<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.welcome');
    }

    public function web1()
    {
        return view('pembelajaran.pemogramanweb');
    }

    public function listUser()
    {
        $users = User::where('level', 'Student')->get();
        return view('admin.listuser', compact('users'));
    }
}
