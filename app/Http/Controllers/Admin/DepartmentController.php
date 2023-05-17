<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('pages.admin.departments.index');
    }

    public function create()
    {
        return view('pages.admin.departments.create');
    }
    public function edit()
    {
        return view('pages.admin.departments.edit');
    }
}