<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
    
        <label for="tipo_documento">Tipo de Documento:</label>
        <select name="tipo_documento" id="tipo_documento" required>
            @foreach($tipos as $tipo)
                <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
            @endforeach
        </select><br><br>
    
        <label for="numero_documento">Número de Documento:</label>
        <input type="text" name="numero_documento" id="numero_documento" required><br><br>
    
        <label for="razon_social">Razón Social:</label>
        <input type="text" name="razon_social" id="razon_social" required><br><br>
    
        <button type="submit">Guardar</button>
    </form>
    
</body>
</html>