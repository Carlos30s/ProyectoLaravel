<!DOCTYPE html>
<html>
<head>
    <title>Formulario Contacto</title>
</head>
<body>

    <h1>Formulario de Contacto</h1>

    <form method="POST" action="/recibe-formulario">
        @csrf

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}">
        <br><br>

        <label>Email:</label>
        <input type="email" name="correo" value="{{ old('correo') }}">
        <br><br>

        <label>Mensaje:</label>
        <textarea name="mensaje">{{ old('mensaje') }}</textarea>
        <br><br>

        <button type="submit">Enviar</button>
    </form>

</body>
</html>