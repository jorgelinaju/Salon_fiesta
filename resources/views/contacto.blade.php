<!-- resources/views/contacto.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Contacto</h1>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contacto.store') }}" method="POST">
        @csrf
        <label for="numero">Número:</label>
        <input type="text" name="numero" id="numero" required>
        @error('numero')
            <div style="color: red;">{{ $message }}</div>
        @enderror <br><br>
        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo" required>
        @error('correo')
            <div style="color: red;">{{ $message }}</div>
        @enderror  <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
