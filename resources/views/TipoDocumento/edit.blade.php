<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tipo Documento</title>
    @vite('resources/css/app.css')
</head>
<body class="w-full h-screen content-center bg-amber-50">

    <form action="{{ route('tipodocumentos.update', $tipodocumento->id) }}" method="POST" class="border w-1/4 display m-auto h-1/3 p-8 rounded-lg bg-amber-950 shadow-lg shadow-black">
        @csrf
        @method('PUT')

        <div class="h-2/3 w-full">
            <label for="nombre" class="text-white font-bold">Editar tipo de documento:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $tipodocumento->nombre }}" required class="border w-full border-white rounded-lg text-white pl-2 mt-6 mb-8 h-1/3">
        </div>
        
        <button type="submit" class="bg-blue-400 w-full h-1/4 rounded-lg text-white ">Actualizar</button>

    </form>

</body>
</html>
