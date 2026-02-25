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
        <input type="text" name="nombre">
        <br><br>

        <label>Email:</label>
        <input type="email" name="email">
        <br><br>

        <button type="submit">Enviar</button>
    </form>

</body>
</html>