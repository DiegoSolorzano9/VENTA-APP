<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="w-full p-4">

    <a href="{{ route('tipodocumentos.create') }}" class="p-3 mb-8 block w-1/7 text-center bg-blue-400 rounded-lg text-white font-bold">Crear Tipo Documento</a>

    <table class="w-full mb-4">
        <thead>
            <tr class="bg-amber-950 text-white ">
                <th class="border p-4">Nombre</th>
                <th class="border p-4">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tipodocumentos as $tipodocumento)
                <tr class="bg-amber-50">
                    <td class="border text-center p-4 w-3/3">
                        {{ $tipodocumento->nombre }}
                    </td>

                    <td class="border flex p-4 gap-2 w-3/3">

                        <a href="{{ route('tipodocumentos.edit', $tipodocumento->id) }}" class="block w-1/2 p-2 content-center text-center bg-yellow-400 rounded-lg text-white font-bold">Editar</a>

                        <form action="{{ route('tipodocumentos.destroy', $tipodocumento->id) }}" method="post" class="block w-1/2 p-2 content-center text-center bg-red-500 rounded-lg text-white font-bold">
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
