<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agrega | Producto</title>
</head>
<body>
    <form action="/producto" method="post">
        @csrf
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Refrigerador">
        </div>
        <div>
            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio" placeholder="$999">
        </div>
        <div>
            <label for="descuento">Descuento</label>
            <input type="number" name="descuento" id="descuento" placeholder="%5">
        </div>
        <div>
            <label for="existencia">Existencia</label>
            <input type="number" name="existencia" id="existencia" placeholder="555">
        </div>
        <div>
            <label for="categoria">Categoria</label>
            <input type="text" multiple name="categoria" id="categoria" list="categorias">
            <datalist id='categorias'>
                <option value="Electrodomestico">Electrodomestico</option>
                <option value="Ropa">Ropa</option>
                <option value="Celulares">Celulares</option>
            </datalist>
        </div>
        <input type="submit" value="Enviar info">
    </form>
</body>
</html>