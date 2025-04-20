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
    <form action="{{ route('clientes.update', $cliente->id) }}" method="post" class="border w-1/4 display m-auto h-1/2 p-8 rounded-lg bg-amber-950 shadow-lg shadow-black">
        @csrf
        @method('PUT')
    
        <div class="h-2/7 w-full"> 
            <label for="tipo_documento" class="text-white font-bold">Tipo de Documento:</label>
            <select name="tipo_documento" id="tipo_documento" required class="border w-full border-white rounded-lg text-white pl-2">
                <option value="" class="border border-black text-black">-- Selecciona un tipo --</option>
                @foreach ($tipos as $tipo)
                    <option class="border border-black text-black" value="{{ $tipo->id }}" {{ $tipo->id == $cliente->tipo_documento ? 'selected' : '' }}>
                        {{ $tipo->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="h-2/7 w-full">
            <label for="numero_documento" class="text-white font-bold">Número de Documento:</label>
            <input type="text" name="numero_documento" id="numero_documento" value="{{ $cliente->numero_documento }}" required class="border w-full border-white rounded-lg text-white pl-2">
        </div>

        <div class="h-2/7 w-full">
            <label for="razon_social" class="text-white font-bold">Razón Social:</label>
            <input type="text" name="razon_social" id="razon_social" value="{{ $cliente->razon_social }}" required class="border w-full border-white rounded-lg text-white pl-2">
        </div>

        <div class="h-1/7 w-full flex justify-center items-center mt-4">
            <button type="submit" class="bg-blue-400 w-full h-full rounded-lg text-white ">Editar</button>
        </div>
    </form>
    
</body>
</html>