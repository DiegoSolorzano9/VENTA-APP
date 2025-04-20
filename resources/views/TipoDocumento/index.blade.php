<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tipodocumentos as $tipodocumento)
                <tr>
                    <td>{{ $tipodocumento->nombre }}</td>

                    <td>
                        <a href="{{ route('tipodocumentos.edit', $tipodocumento->id) }}">Editar</a>

                        <form action="{{ route('tipodocumentos.destroy', $tipodocumento->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                        
                    </td>   
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('tipodocumentos.create') }}">Crear Tipo Documento</a>
</body>

</html>
