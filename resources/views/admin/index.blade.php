@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                
            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="card mt-3">
            <div class="card-header">
                <a href="{{ route('course.index') }}">Courses</a>
                <a class="btn btn-primary btn-sm float-right" href="{{ route('course.create') }}">Create</a>
            </div>
            
            <div class="card-body">
                <b>Count of courses: {{ $counter['courses'] }}</b>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mt-3">
            <div class="card-header">
                <a href="{{ route('team.index') }}">Team</a>
                <a class="btn btn-primary btn-sm float-right" href="{{ route('team.create') }}">Create</a>
            </div>

            <div class="card-body">
                <b>Count of teams: {{ $counter['teams'] }}</b>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mt-3">
            <div class="card-header">
                <a href="{{ route('blog.index') }}">Blogs</a>
                <a class="btn btn-primary btn-sm float-right" href="{{ route('blog.create') }}">Create</a>
            </div>

            <div class="card-body">
                <b>Count of blogs: {{ $counter['blogs'] }}</b>
            </div>
        </div>
    </div>


</div>
@endsection
