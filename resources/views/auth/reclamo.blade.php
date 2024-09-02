<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reclamo - VetTec</title>
    <link rel="stylesheet" href="{{ asset('css/reclamo.css') }}">
</head>
<body>
    <div class="background-image">
        <div class="form-container">
            <div class="header">
                <div class="header-text">
                    <h1>VetTec</h1>
                    <h4>Formulario de Reclamo</h4>
                </div>
                <img src="{{asset('imagenes/huella-ilustracion-3d-o-pata-perro-o-lobo-tono-blanco_391563-757.avif')}}" alt="Logo de VetTec" class="logo">
            </div>
            <div class="form-box">
                <h2>Datos Personales</h2>
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="input-group">
                        <label for="dni">DNI</label>
                        <input type="text" id="dni" name="dni" required>
                    </div>
                    <div class="input-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="input-group">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono" required>
                    </div>
                    <h2>Detalles del Producto</h2>
                    <div class="input-group">
                        <label for="nombre_prod">Nombre del Producto</label>
                        <input type="text" id="nombre_prod" name="nombre_prod" required>
                    </div>
                    <div class="input-group">
                        <label for="descripcion">Descripción del Reclamo</label>
                        <textarea id="descripcion" name="descripcion" required></textarea>
                    </div>
                    <div class="input-group">
                        <label for="comprobante">Comprobante de Compra</label>
                        <input type="file" id="comprobante" name="comprobante" accept="image/*" required>
                    </div>
                    <div class="input-group">
                        <label for="respuesta">Modo de Respuesta</label>
                        <select id="respuesta" name="respuesta" required>
                            <option value="email">Email</option>
                            <option value="telefono">Teléfono</option>
                        </select>
                    </div>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
