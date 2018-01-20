<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends MasterController
{
    public function showLoginForm()
    {
    	return view('admin.login');
    }

    public function showDashboard()
    {
    	return view('admin.dashboard');
    }
}
