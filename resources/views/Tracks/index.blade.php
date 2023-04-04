@extends('_partials.layout')

@section('pageName')
  All Tracks
@endsection

@section('contentPage')
<div class="row my-4 justify-content-between">
  @foreach ($tracksList as $track)
  <div class="card g-4">
    <a href="{{ route('tracks.show', $track) }}">
      <img src="{{ $track->poster }}" class="card-img-top rounded my-2" alt="...">
      <div class="card-body">
        <h2 class="fw-bold">{{ $track->title }}</h2>
        <span>{{ $track->author }}</span>
      </div>
    </a>
  </div>
  @endforeach
</div>
@endsection
