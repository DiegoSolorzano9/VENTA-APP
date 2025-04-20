<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('clientes.update', $cliente->id) }}" method="post">
        @csrf
        @method('PUT')
    
        <label for="tipo_documento">Tipo de Documento:</label>
        <select name="tipo_documento" id="tipo_documento" required>
            <option value="">-- Selecciona un tipo --</option>
            @foreach ($tipos as $tipo)
                <option value="{{ $tipo->id }}" {{ $tipo->id == $cliente->tipo_documento ? 'selected' : '' }}>
                    {{ $tipo->nombre }}
                </option>
            @endforeach
        </select><br><br>
    
        <label for="numero_documento">Número de Documento:</label>
        <input type="text" name="numero_documento" id="numero_documento" value="{{ $cliente->numero_documento }}" required><br><br>
    
        <label for="razon_social">Razón Social:</label>
        <input type="text" name="razon_social" id="razon_social" value="{{ $cliente->razon_social }}" required><br><br>
    
        <button type="submit">Editar</button>
    </form>
    
</body>
</html>