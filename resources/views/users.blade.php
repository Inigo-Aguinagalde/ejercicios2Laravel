<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>DNI</th>
            <th>Fecha nacimiento</th>
            <th>Discapacidad</th>
            <th>Sexo</th>
        </tr>
        @for ($i = 0; $i < count($users); $i++)
             <tr>
            <th>$users[{{$i}}]['name']</th>
            </tr>
            @endfor
    </table>

</body>

</html>