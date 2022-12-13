<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,th{
            border: 1px solid;
        }
    </style>

</head>

<body>
    <table>
        <tr>
            <th>DNI</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>EMAIL</th>
            <th>Fecha nacimiento</th>
            <th>Discapacidad</th>
            <th>Sexo</th>
        </tr>
        @foreach ($users as $user)
             <tr>
             <th>{{$user['DNI']}}</th>
            <th>{{$user['name']}}</th>
            <th>{{$user['lastName']}}</th>
            <th>{{$user['email']}}</th>
            <th>{{$user['date']}}</th>
            <th>{{$user['Discapacidad']}}</th>
            <th>{{$user['sexo']}}</th>
           
            </tr>
            @endforeach
    </table>

</body>

</html>