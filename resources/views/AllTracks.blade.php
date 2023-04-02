<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>All Tracks</title>

  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>
<body>
  <div class="container">
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
  </div>
</body>
</html>