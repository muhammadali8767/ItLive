<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('admin.course.index', compact('courses'));
    }

    public function create()
    {
        return view('admin.course.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'text'=> 'required',
            'featured_image'=> 'required',
            'user_id' => 'required|integer'
        ]);
        $course = new Course([
            'title' => $request->get('title'),
            'text'=> $request->get('text'),
            'featured_image'=> $request->get('featured_image'),
            'user_id'=> $request->get('user_id')
        ]);
        $course->save();
        return redirect('/admin/course')->with('success', 'Stock has been added');
    }

    public function show(Course $course)
    {
        //
    }

    public function edit($id)
    {
        $course = Course::find($id);

        return view('admin.course.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'text'=> 'required',
            'featured_image'=> 'required',
            'user_id' => 'required|integer'
        ]);
    
        $course = Course::find($id);
        $course->title = $request->get('title');
        $course->text = $request->get('text');
        $course->featured_image = $request->get('featured_image');
        $course->user_id = $request->get('user_id');
        $course->save();
    
        return redirect('/admin/course')->with('success', 'Stock has been updated');
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
    
        return redirect('/admin/course')->with('success', 'Stock has been deleted Successfully');
    }
}
