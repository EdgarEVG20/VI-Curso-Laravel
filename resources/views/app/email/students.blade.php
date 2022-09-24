<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <table class="" border="1" width="100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>No Cuenta</th>
                <th>Grado</th>
                <th>Grupo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $info[0]->name }}</td>
                <td>{{ $info[0]->age }}</td>
                <td>{{ $info[0]->num }}</td>
                <td>{{ $info[0]->grade }}</td>
                <td>{{ $info[0]->group }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>