<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Pedidos</h1>
    @if(Session::has('success'))
        <p style="color: green">{{ Session::get('success') }}</p>
    @endif
    @if(Session::has('error'))
        <p style="color: red">{{ Session::get('error') }}</p>
    @endif
    <table>
        <thead>
            <tr>
                <th>Marca</th>
                <th>Color</th>
                <th>Tipo</th>
                <th>Año</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Estado</th>
                <th>Pais</th>
                <th>Direccion</th>
                <th>Codigo Postal</th>
                <th>Correo Eletronico</th>
                <th>Celular</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funciones as $funcion)
                <tr>
                    <td>{{$funcion->marca}}</td>
                    <td>{{$funcion->color}}</td>
                    <td>{{$funcion->tipo}}</td>
                    <td>{{$funcion->year}}</td>
                    <td>{{$funcion->nombre}}</td>
                    <td>{{$funcion->apellido}}</td>
                    <td>{{$funcion->estado}}</td>
                    <td>{{$funcion->pais}}</td>
                    <td>{{$funcion->direccion}}</td>
                    <td>{{$funcion->codigo_postal}}</td>
                    <td>{{$funcion->correo_electronico}}</td>
                    <td>{{$funcion->celular}}</td>
                    <td>
                        <form action="{{ route('funciones.destroy', $funcion -> id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>