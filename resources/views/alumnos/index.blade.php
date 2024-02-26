<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


  <table>
    <thead>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>apellidoPaterno</th>
            <th>apellidoMaterno</th>
            <th>email</th>
            <th>foto</th>
            <th>funciones</th>
        </tr>
    </thead>

<tbody>
    @foreach($datos as $alumno)
    <tr>
        <td>{{$alumno->id}}</td>
        <td>{{$alumno->nombre}}</td>
        <td>{{$alumno->apellidoPaterno}}</td>
        <td>{{$alumno->apellidoMaterno}}</td>
        <td>{{$alumno->correo}}</td>
        <td>
        <img src="{{asset('storage').'/'.$alumno->foto}}">
        </td>
        <td>
        hola
        </td>
    </tr>
    @endforeach
</tbody>
</table>
</body>
</html>