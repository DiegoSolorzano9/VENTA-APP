<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Tipo Documento</title>
    @vite('resources/css/app.css')
</head>

<body class="w-full h-screen content-center bg-amber-50">
    <form action="{{ route('tipodocumentos.store') }}" method="post" class="border w-1/4 display m-auto h-1/3 p-8 rounded-lg bg-amber-950 shadow-lg shadow-black">
        @csrf
        <div  class="h-2/3 w-full">
            <label for="tipoDocumento" class="font-bold text-white">Crea tipo de documento:</label>
            <input type="text" name="nombre" id="nombre" required class="border w-full border-white rounded-lg text-white pl-2 h-1/3 mt-4">
        </div>

        <button type="submit" class="h-1/4 w-full font-bold bg-blue-500 text-white rounded-lg mt-4">Crear</button>
    </form>
</body>

</html>
