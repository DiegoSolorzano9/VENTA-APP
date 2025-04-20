<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="w-full h-screen content-center bg-amber-50">
    <form action="{{ route('clientes.store') }}" method="POST" class="border w-1/4 display m-auto h-1/2 p-8 rounded-lg bg-amber-950 shadow-lg shadow-black">
        @csrf
        <div class="h-2/7 w-full">
            <label for="tipo_documento" class="font-bold text-white">Tipo de Documento:</label>
            <select name="tipo_documento" id="tipo_documento" required class="border w-full border-white rounded-lg text-white pl-2">
                @foreach($tipos as $tipo)
                    <option value="{{ $tipo->id }}" class="border text-black">{{ $tipo->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="h-2/7 w-full">
            <label for="numero_documento" class="font-bold text-white">Número de Documento:</label>
            <input type="text" name="numero_documento" id="numero_documento" required class="border w-full border-white rounded-lg text-white pl-2">
        </div>

        <div class="h-2/7 w-full">
            <label for="razon_social" class="font-bold text-white">Razón Social:</label>
            <input type="text" name="razon_social" id="razon_social" required class="border w-full border-white rounded-lg text-white pl-2">
        </div>

        <button type="submit" class="h-1/7 w-full font-bold bg-blue-500 text-white rounded-lg">Guardar</button>
    </form>
    
</body>
</html>