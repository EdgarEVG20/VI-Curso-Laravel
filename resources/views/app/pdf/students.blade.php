<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>
<body>
    @foreach ($data as $item)
    <h1>Nombre: {{ $item->name }}</h1>
    <h1>Edad: {{ $item->age }}</h1>
    <h1>No.Cuenta: {{ $item->num }}</h1>
    <h1>Grado: {{ $item->grade }}</h1>
    <h1>Grupo: {{ $item->group }}</h1>
    <hr>
    @endforeach
    
</body>
</html>