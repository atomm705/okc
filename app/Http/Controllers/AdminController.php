<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function user()
    {
        return view('admin.user-management');
    }

    public function doctors()
    {
        return view('admin.admin-doctors');
    }

    public function services()
    {
        return view('admin.admin-services');
    }

    public function users()
    {
        return view('admin.user-profile');
    }
}
