@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
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
      <form method="post" action="{{ route('blog.update', $blog->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title"/ value={{ $blog->title }}>
        </div>
        <div class="form-group">
            <label for="text">Text:</label>
            <textarea class="form-control" name="text">{{ $blog->text }}</textarea>
        </div>
        <div class="form-group">
            <label for="featured_image">Featured image:</label>
            <input type="text" class="form-control" name="featured_image" value={{ $blog->featured_image }}>
        </div>
        <div class="form-group">
            <label for="user_id">User id:</label>
            <input type="text" class="form-control" name="user_id" value={{ $blog->user_id }}>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection