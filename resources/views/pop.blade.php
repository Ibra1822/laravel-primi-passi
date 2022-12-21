<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Pop Songs</title>
</head>
<body>
    <h1>{{$title}}</h1>

    <nav>
        <ul>
            <li><a href="/">Popular Songs Songs</a></li>
            <li><a href="/rock_songs">Rock Songs</a></li>
        </ul>
      </nav>

    <div class="cont-cards">
        @foreach ($pop_songs as $song)
      <div class="card">
        <div class="cont-img">
            <img src="{{$song['poster']}}" alt="">
        </div>
        <div class="cont-text">
            <h3>{{$song['title']}}</h3>
            <h4>{{$song['authors']}}</h4>
            <p>{{$song['duration']}}</p>
        </div>
      </div>
      @endforeach
      </div>


</body>
</html>
