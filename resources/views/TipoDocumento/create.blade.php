<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Tipo Documento</title>
</head>

<body>
    <form action="{{ route('tipodocumentos.store') }}" method="post">
        @csrf
        <label for="tipoDocumento">Tipo de Documento:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>

        <button type="submit">Crear</button>

    </form>
</body>

</html>
