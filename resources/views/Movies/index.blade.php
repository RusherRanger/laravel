<!DOCTYPE html>
<html>
<head>
    <title>Films</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <div class="content">
        <h1>Tout les Films</h1>
        <h2>{{ $title }}</h2>
        <ul>
            @foreach($acteurs as $acteur)
                <li>{{ $acteur['nom'] }} {{$acteur['prenom']}} a {{$acteur['age']}} ans et habite à {{$acteur['ville']}}</li>
            @endforeach
        </ul>

        <ul>
            @foreach($acteurs as $acteur)
                @if ($acteur['ville'] == 'Lyon')
                    <li>{{ $acteur['nom'] }}</li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
</body>
</html>