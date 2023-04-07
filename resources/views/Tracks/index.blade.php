@extends('_partials.layout')

@section('pageName')
  All Tracks
@endsection

@section('contentPage')
<div class="row my-2">
  <div class="col-6 d-flex align-items-center">
    <h3 class="mb-0">ALL TRACKS</h3>
  </div>
  <div class="col-6 text-end">
    <a href="{{ route('tracks.create') }}" class="btn btn-primary">
      <h5 class="mb-0">New Track</h5>
    </a>
  </div>
</div>

<div>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Length</th>
        <th scope="col">Details</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($tracksList as $track)
      <tr>
        <td>{{ $track->id }}</td>
        <td>{{ $track->title }}</td>
        <td>{{ $track->author }}</td>
        <td>{{ $track->length }}</td>
        <td>
          <a href="{{ route('tracks.show', $track) }}" class="infoButton">
            More Info
          </a>
        </td>
        <td>
          {{-- modifica --}}
          <a href=" {{ route('tracks.edit', $track) }} ">Edit Track</a>
        </td>
        <td>
          {{-- elimina --}}
          <form action="{{ route('tracks.destroy', $track) }}" method="POST">
          @csrf
          @method('DELETE')
            
          <button type="submit" class="text-danger">Delete Track</button>
          </form>
        </td>
      </tr>

      @empty
      <tr>
        <td>NESSUNA TRACCIA</td>
      </tr>
      @endforelse
    </tbody>
  </table>

  {{ $tracksList->links('pagination::bootstrap-5') }}
</div>
@endsection
