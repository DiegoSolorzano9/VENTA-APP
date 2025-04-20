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
                <th>Tipo Documento</th>
                <th>Número Documento</th>
                <th>Razón Social</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->tipo_Documento->nombre }}</td>
                    <td>{{ $cliente->numero_documento }}</td>
                    <td>{{ $cliente->razon_social }}</td>
                    
                    <td><a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>

                    </form>

                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('clientes.create') }}">Crear Cliente</a>
</body>
</html>