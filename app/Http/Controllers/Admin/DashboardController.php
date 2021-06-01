<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Team;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $counter = array();
        $counter['courses'] = count(Course::all());
        $counter['teams'] = count(Team::all());
        $counter['blogs'] = count(Blog::all());
        return view('admin/index', compact('counter'));
    }
}
