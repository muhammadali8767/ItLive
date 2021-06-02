<?php

namespace App\Http\Controllers\Front;

use App\Models\Course;
use App\Models\Team;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StartController extends Controller
{
    public function index()
    {
        return view('start.index');
    }

    public function cources()
    {
        $courses = Course::paginate(6);
        return view('start.cources', compact('courses'));
    }

    public function team()
    {
        $teams = Team::paginate(6);
        return view('start.team', compact('teams'));
    }

    public function blog()
    {
        $blogs = Blog::paginate(6);
        return view('start.blog', compact('blogs'));
    }
}
