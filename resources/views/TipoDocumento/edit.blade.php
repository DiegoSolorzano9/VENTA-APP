<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tipo Documento</title>
</head>
<body>

    <form action="{{ route('tipodocumentos.update', $tipodocumento->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Seleccionar Tipo de Documento:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $tipodocumento->nombre }}" required><br><br>

        <button type="submit">Actualizar</button>

    </form>

</body>
</html>
