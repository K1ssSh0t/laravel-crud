<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    @if($categoryGame)
    <h1>EL nombre del video juegos es:{{$nameVideoGame}} y la categoria es: {{$categoryGame}}. </h1>
    @else
    <h1>EL nombre del video juegos es:{{$nameVideoGame}}. </h1>
    @endif


    <h3>{{$fecha}}</h3>
</body>

</html>