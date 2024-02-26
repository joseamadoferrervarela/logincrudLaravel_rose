<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/alumno')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nombre">nombre</label>
        <input type="text" name="nombre" id="nombre">
        <label for="apellidoPaterno">apellido Paterno</label>
        <input type="text" name="apellidoPaterno" id="apelidoPaterno">
        <label for="apellidoMaterno">apellidoMaterno</label>
        <input type="text" name="apellidoMaterno" id="apellidoMaterno">
        <label for="correo">correo</label>
        <input type="text" name="correo" id="correo">
        <label for="foto">foto</label>
        <input type="file" name="foto" id="foto">
        <input type="submit" value="enviar">
    </form>
</body>
</html>