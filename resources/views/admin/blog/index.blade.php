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
          <a href="{{ route('blog.index') }}">Blogs</a>
          <a class="btn btn-primary float-right" href="{{ route('blog.create') }}">Create</a>
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
                @foreach($blogs as $blog)
                <tr>
                    <td>{{$blog->id}}</td>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->text}}</td>
                    <td>{{$blog->featured_image}}</td>
                    <td>{{$blog->user_id}}</td>
                    <td><a href="{{ route('blog.edit',$blog->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('blog.destroy', $blog->id)}}" method="post">
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
