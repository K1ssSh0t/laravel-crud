<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Formulario de creacion de viedojuegos</h1>
    <p><a href="{{route('games')}}">Listar todos los juegos</a></p>

    <form action="{{ route('createVideogame')}}" method="POST">
        @csrf

        <input type="text" placeholder="Nombre del Viedojuego" name="name">
        @error('name')
        {{$message}}
        @enderror
        <select name="category_id" id="">
            @foreach($categorias as $categoria)
            <option value="{{ $categoria->id}}">{{$categoria->name}}</option>
            @endforeach


        </select>
        <input type="submit" value="Enviar">
    </form>
</body>


</html>