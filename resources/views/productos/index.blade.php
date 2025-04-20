<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="w-full p-4">

    <a href="{{ route('productos.create') }}" class="p-3 mb-8 block w-1/7 text-center bg-blue-400 rounded-lg text-white font-bold">Crear Producto</a>


    <table class="w-full mb-4">
        <thead>
            <tr class="bg-amber-950 text-white ">
                <th class="border p-4">Nombre</th>
                <th class="border p-4">Descripción</th>
                <th class="border p-4">Precio</th>
                <th class="border p-4">Stock</th>
                <th class="border p-4">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr class="bg-amber-50">
                    <td class="border text-center p-4">{{ $producto->nombre }}</td>
                    <td class="border text-center p-4">{{ $producto->descripcion }}</td>
                    <td class="border text-center p-4">{{ $producto->precio }}</td>
                    <td class="border text-center p-4">{{ $producto->stock }}</td>
                    
                    <td class="border flex p-4 gap-2">
                        <a href="{{ route('productos.edit', $producto->id) }}" class="block w-1/2 p-2 content-center text-center bg-yellow-400 rounded-lg text-white font-bold">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="post" class="block w-1/2 p-2 content-center text-center bg-red-500 rounded-lg text-white font-bold">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>