<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'text'=> 'required',
            'featured_image'=> 'required',
            'user_id' => 'required|integer'
        ]);
        $blog = new Blog([
            'title' => $request->get('title'),
            'text'=> $request->get('text'),
            'featured_image'=> $request->get('featured_image'),
            'user_id'=> $request->get('user_id')
        ]);
        $blog->save();
        return redirect('/admin/blog')->with('success', 'Stock has been added');
    }

    public function show(Blog $blog)
    {
        //
    }

    public function edit($id)
    {
        $blog = Blog::find($id);

        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'text'=> 'required',
            'featured_image'=> 'required',
            'user_id' => 'required|integer'
        ]);
    
        $blog = Blog::find($id);
        $blog->title = $request->get('title');
        $blog->text = $request->get('text');
        $blog->featured_image = $request->get('featured_image');
        $blog->user_id = $request->get('user_id');
        $blog->save();
    
        return redirect('/admin/blog')->with('success', 'Stock has been updated');
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
    
        return redirect('/admin/blog')->with('success', 'Stock has been deleted Successfully');
    }
}