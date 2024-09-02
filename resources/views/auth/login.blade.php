<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - VetTec</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="background-image">
        <div class="login-container">
            <div class="header">
                <h1>VetTec</h1>
                <img src="{{ asset('imagenes/huella-ilustracion-3d-o-pata-perro-o-lobo-tono-blanco_391563-757.avif')}}" alt="Logo de VetTec" class="logo">
            </div>
            <div class="login-box">
                <h2>Iniciar Sesión</h2>
                <form action="#" method="post">
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit">Ingresar</button>
                    <h6>Crear Cuenta | Reclamos</h6>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
