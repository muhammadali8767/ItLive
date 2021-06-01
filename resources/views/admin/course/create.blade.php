@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('course.store') }}">
          <div class="form-group">
              @csrf
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>
          <div class="form-group">
              <label for="text">Text:</label>
              <textarea class="form-control" name="text"></textarea>
          </div>
          <div class="form-group">
              <label for="featured_image">Featured image:</label>
              <input type="text" class="form-control" name="featured_image"/>
          </div>
          <div class="form-group">
              <label for="user_id">User id:</label>
              <input type="text" class="form-control" name="user_id"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection