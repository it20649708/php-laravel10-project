<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function AdminDashboard() {
        return view('admin.index');
    }

    public function allAction()
    {
        return view('admin.all');
    }
    public function singleAction()
    {
        return view('admin.single');
    }

    public function adminlogin()
    {
        return view('admin.login');


    }

    public function adminLogout(Request $request)
    {
          Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

}


