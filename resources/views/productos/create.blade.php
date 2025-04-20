<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="w-full h-screen content-center bg-amber-50">
    <form action="{{ route("productos.store") }}" method="post" class="border w-1/4 display m-auto h-1/2 p-8 rounded-lg bg-amber-950 shadow-lg shadow-black">
        @csrf
        <div class="h-2/10 w-full">
            <label for="nombre" class="font-bold text-white">Nombre</label>
            <input type="text" name="nombre" id="nombre" required class="border w-full border-white rounded-lg text-white pl-2">
        </div>
        
        <div class="h-2/10 w-full">
            <label for="descripcion" class="font-bold text-white">Descripción</label>
            <input type="text" name="descripcion" id="descripcion" required class="border w-full border-white rounded-lg text-white pl-2">
        </div>

        <div class="h-2/10 w-full">
            <label for="precio" class="font-bold text-white">Precio</label>
            <input type="number" name="precio" id="precio" required class="border w-full border-white rounded-lg text-white pl-2">
        </div>

        <div class="h-2/10 w-full">
            <label for="stock" class="font-bold text-white">Stock</label>
            <input type="number" name="stock" id="stock" required class="border w-full border-white rounded-lg text-white pl-2">
        </div>

        <button type="submit" class="h-1/7 w-full font-bold bg-blue-500 text-white rounded-lg mt-4">Crear Producto</button>
    </form>
    
</body>
</html>