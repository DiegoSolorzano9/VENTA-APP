<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="w-full h-screen content-center bg-amber-50">
    <form action="{{ route("productos.update",$producto->id) }}" method="post" class="border w-1/4 display m-auto h-1/2 p-8 rounded-lg bg-amber-950 shadow-lg shadow-black">
        @csrf
        @method('PUT')

        <div class="h-2/10 w-full">
            <label for="nombre" class="text-white font-bold">Nombre</label>
            <input type="text" name="nombre" id="nombre" required value="{{ $producto->nombre }}" class="border w-full border-white rounded-lg text-white pl-2">
        </div>

        <div class="h-2/10 w-full">
            <label for="descripcion" class="text-white font-bold">Descripción</label>
            <input type="text" name="descripcion" id="descripcion" required value="{{ $producto->descripcion }}" class="border w-full border-white rounded-lg text-white pl-2">
        </div>

        <div class="h-2/10 w-full">
            <label for="precio" class="text-white font-bold">Precio</label>
            <input type="number" name="precio" id="precio" required value="{{ $producto->precio }}" class="border w-full border-white rounded-lg text-white pl-2">
        </div>

        <div class="h-2/10 w-full">
            <label for="stock" class="text-white font-bold">Stock</label>
            <input type="number" name="stock" id="stock" required value="{{ $producto->stock }}" class="border w-full border-white rounded-lg text-white pl-2">
        </div>

        <button type="submit" class="bg-blue-400 w-full h-1/7 rounded-lg text-white mt-4">Editar Producto</button>

    </form>
    
</body>
</html>