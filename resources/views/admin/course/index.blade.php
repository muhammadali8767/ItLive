  @extends('layouts.app')

  @section('content')
  <style>
    .uper {
      margin-top: 40px;
    }
  </style>
  <div class="uper">
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div><br />
    @endif
    <div class="card mt-3">
        <div class="card-header">
          <a href="{{ route('course.index') }}">Courses</a>
          <a class="btn btn-primary float-right" href="{{ route('course.create') }}">Create</a>
        </div>
        

        <div class="card-body">
          <table class="table table-striped">
            <thead>
                <tr>
                  <td>ID</td>
                  <td>Title</td>
                  <td>Text</td>
                  <td>Featured image</td>
                  <td>User</td>
                  <td colspan="2">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                <tr>
                    <td>{{$course->id}}</td>
                    <td>{{$course->title}}</td>
                    <td>{{$course->text}}</td>
                    <td>{{$course->featured_image}}</td>
                    <td>{{$course->user_id}}</td>
                    <td><a href="{{ route('course.edit',$course->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('course.destroy', $course->id)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>

  <div>
  @endsection
