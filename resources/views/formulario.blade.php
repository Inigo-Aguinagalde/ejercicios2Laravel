<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('validacion')}}" method="POST">
        @csrf
        <p><input type="hidden" name="id" /></p>
        <p>nombre <input type="text" name="nombre" value="{{ old('nombre') }}"/></p>
        @error('nombre')
        <div style="color: red;">{{$message}}</div>
        @enderror
        <p>Apellido <input type="text" name="apellido" value="{{ old('apellido') }}"/></p>
        @error('apellido')
        <div style="color: red;">{{$message}}</div>
        @enderror
        <p>DNI <input type="text" name="dni" /></p>
        <p>@if($errors->has('dni'))
        <h4>{{$errors->first('dni')}}</h4>
        @endif</p>
        <p>Fecha_nacimiento <input type="date" name="fecha_nacimiento" /></p>
        <p>Direccion <input type="text" name="direccion" /></p>
        @if($errors->has('direccion'))
        <h4>{{$errors->first('direccion')}}</h4>
        @endif</p>
        <p><input type="radio" id="hombre" value="hombre" name="sexo" />Hombre</p>
        <p><input type="radio" id="mujer" value="mujer" name="sexo" />Mujer</p>
        <p>Discapacidad <input type="number"  max="100" name="discapacidad"></p>
        <p>Codigo de seguridad <input type="number"  max="999" name="seguridad">
        @if($errors->has('seguridad'))
        <h4>{{$errors->first('seguridad')}}</h4>
        @endif</p>
        <p><input type="submit"></p>
    </form>

</body>

</html>