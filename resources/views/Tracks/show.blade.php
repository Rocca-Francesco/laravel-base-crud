@extends('_partials.layout')

@section('pageName')
  Track Details
@endsection

@section('contentPage')
  <div>
    <img src="{{ $track->poster }}" class="img-fluid rounded my-2" alt="...">
  </div>
  <h2 class="fw-bold">{{ $track->title }}</h2>
  <div class="d-flex flex-column">
    <span>Album: {{ $track->album }}</span>
    <span>Author: {{ $track->author }}</span>
    <span>Editor: {{ $track->editor }}</span>
    <span>Lengtth: {{ $track->length }}</span>
  </div>
@endsection