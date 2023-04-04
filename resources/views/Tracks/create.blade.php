@extends('_partials.layout')

@section('pageName')
  New Tracks
@endsection

@section('contentPage')
<form action="{{ route('tracks.store') }}" method="POST">
  @csrf

  <div class="row">
    <div class="col-3">
        <label for="title" class="form-label">Song Title</label>
        <input type="title" class="form-control" id="title" name="title" placeholder="Song Title">
    </div>
    <div class="col-3">
        <label for="album" class="form-label">Song Album</label>
        <input type="album" class="form-control" id="album" name="album" placeholder="Song Album">
    </div>
    <div class="col-3">
        <label for="author" class="form-label">Song Author</label>
        <input type="author" class="form-control" id="author" name="author" placeholder="Song Author">
    </div>
    <div class="col-3">
        <label for="editor" class="form-label">Song Editor</label>
        <input type="editor" class="form-control" id="editor" name="editor" placeholder="Song Editor">
    </div>
    <div class="col-3">
        <label for="length" class="form-label">Song Length (minutes)</label>
        <input type="length" class="form-control" id="length" name="length" placeholder="00:00:00">
    </div>
    <div class="col-3">
        <label for="poster" class="form-label">Song Poster (url)</label>
        <input type="poster" class="form-control" id="poster" name="poster" placeholder="http:\\example.jpg">
    </div>
    <div class="col-6 mt-auto">
      <button type="submit">Salva</button>
    </div>
  </div>
</form>
@endsection