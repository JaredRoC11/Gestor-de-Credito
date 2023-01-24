<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio | Productos</title>
</head>
<body>
    @foreach ($productos as $producto)
         <table class="default" border="0">
                <tr>
                    <td>Nombre</td>
                    <td>Precio</td>
                    <td>Descuento</td>
                    <td>Existencia</td>
                    <td>Categoria</td>
                </tr>
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->descuento }}</td>
                    <td>{{ $producto->existencia }}</td>
                    <td>{{ $producto->categoria }}</td>
                    <td>
                        <a href="/producto/{{ $producto->id }}/edit">Editar</a>
                    </td>
                    <td>
                        <form action="/producto/{{ $producto->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="borrar">
                        </form>
                    </td>
                </tr>
        </table>       
    @endforeach
</body>
</html>