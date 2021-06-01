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
          <a href="{{ route('team.index') }}">teams</a>
          <a class="btn btn-primary float-right" href="{{ route('team.create') }}">Create</a>
        </div>
        

        <div class="card-body">
          <table class="table table-striped">
            <thead>
                <tr>
                  <td>ID</td>
                  <td>Name</td>
                  <td>Description</td>
                  <td>Featured image</td>
                  <td colspan="2">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $team)
                <tr>
                    <td>{{$team->id}}</td>
                    <td>{{$team->name}}</td>
                    <td>{{$team->description}}</td>
                    <td>{{$team->featured_image}}</td>
                    <td><a href="{{ route('team.edit',$team->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('team.destroy', $team->id)}}" method="post">
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
