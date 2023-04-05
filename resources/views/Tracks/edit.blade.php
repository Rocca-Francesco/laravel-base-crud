@extends('_partials.layout')

@section('pageName')
  Edit Tracks
@endsection

@section('contentPage')
<form action="{{ route('tracks.update', $track) }}" method="POST">
  @csrf
  @method('PUT')

  <div class="row">
    <div class="col-3">
        <label for="title" class="form-label">Song Title</label>
        <input type="title" class="form-control" id="title" name="title" placeholder="Song Title" value="{{ $track->title }}">
    </div>
    <div class="col-3">
        <label for="album" class="form-label">Song Album</label>
        <input type="album" class="form-control" id="album" name="album" placeholder="Song Album" value="{{ $track->album }}">
    </div>
    <div class="col-3">
        <label for="author" class="form-label">Song Author</label>
        <input type="author" class="form-control" id="author" name="author" placeholder="Song Author" value="{{ $track->author }}">
    </div>
    <div class="col-3">
        <label for="editor" class="form-label">Song Editor</label>
        <input type="editor" class="form-control" id="editor" name="editor" placeholder="Song Editor" value="{{ $track->editor }}">
    </div>
    <div class="col-3">
        <label for="length" class="form-label">Song Length (minutes)</label>
        <input type="length" class="form-control" id="length" name="length" placeholder="00:00:00" value="{{ $track->length }}">
    </div>
    <div class="col-3">
        <label for="poster" class="form-label">Song Poster (url)</label>
        <input type="poster" class="form-control" id="poster" name="poster" placeholder="http:\\example.jpg" value="{{ $track->poster }}">
    </div>
    <div class="col-6 mt-auto">
      <button type="submit">Aggiorna</button>
    </div>
  </div>
</form>
@endsection