<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();

        return view('admin.team.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=> 'required',
            'featured_image'=> 'required',
        ]);
        $team = new Team([
            'name' => $request->get('name'),
            'description'=> $request->get('description'),
            'featured_image'=> $request->get('featured_image'),
        ]);
        $team->save();
        return redirect('/admin/team')->with('success', 'Stock has been added');
    }

    public function show(Team $team)
    {
        //
    }

    public function edit($id)
    {
        $team = Team::find($id);

        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'description'=> 'required',
            'featured_image'=> 'required',
        ]);
    
        $team = Team::find($id);
        $team->name = $request->get('name');
        $team->description = $request->get('description');
        $team->featured_image = $request->get('featured_image');
        $team->save();
    
        return redirect('/admin/team')->with('success', 'Stock has been updated');
    }

    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();
    
        return redirect('/admin/team')->with('success', 'Stock has been deleted Successfully');
    }
}