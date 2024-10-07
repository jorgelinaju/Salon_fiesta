<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Fiesta</title>
</head>
<body>
    <h1>Bienvenido a Salon Fiesta</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('salones_disponibles') }}">Salones Disponibles</a></li>
            <li><a href="{{ route('contacto', ['numero' => 123]) }}">Contacto</a></li>
        </ul>
    </nav>
    <div>
        <h3>contenido para nuestro salon </h>
    </div>
</body>
</html>


