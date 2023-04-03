@extends('_partials.layout')

@section('pageName')
  All Tracks
@endsection

@section('contentPage')
<div class="row my-4">
  @foreach ($tracksList as $track)
    <div class="card" style="width: 18rem;">
      <img src="{{ $track->poster }}" class="card-img-top rounded my-2" alt="...">
      <div class="card-body">
        <h2 class="fw-bold">{{ $track->title }}</h2>
        <span>{{ $track->author }}</span>
      </div>
    </div>
  @endforeach
</div>
@endsection
