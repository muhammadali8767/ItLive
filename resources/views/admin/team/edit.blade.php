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
      <form method="post" action="{{ route('team.update', $team->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="name">name:</label>
            <input type="text" class="form-control" name="name" value={{ $team->name }}>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" name="description">{{ $team->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="featured_image">Featured image:</label>
            <input type="text" class="form-control" name="featured_image" value={{ $team->featured_image }}>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection