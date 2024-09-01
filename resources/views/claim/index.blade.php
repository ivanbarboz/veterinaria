<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Formulario de Reclamaciones</h2>
    <form action={{ route('register-claim') }} method="POST">
        @csrf
        <h3>Datos del cliente</h3>
        <div>
            <label for="nombres">Nombres</label>
            <input type="text" name="nombres" id="nombres">
            <br>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos">
            <br>
            <label for="correo">Correo</label>
            <input type="email" name="correo" id="correo">
            <br>
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" id="telefono">
            <br>
            <input type="text" name="telefono" id="telefono">
            <br>
            <label for="user_document">Documento</label>
            <select name="user_document" id="user_document">
                <option value="1">DNI</option>
                <option value="1">RUC</option>
                <option value="1">Pasaporte</option>
            </select>
            <br>
            <label for="nro_documento">Número de documento</label>
            <input type="text" name="nro_documento" id="nro_documento">
        </div>

        <h3>Datos del reclamo</h3>
        <div>
            <label for="cod_compra">Código de compra</label>
            <input type="text" name="cod_compra" id="cod_compra">
            <br>
            <label for="fecha_compra">Fecha de compra</label>
            <input type="date" name="fecha_compra" id="fecha_compra">
            <br>
            <label for="modo_respuesta">¿Cómo te gustaría que nos pongamos en contacto contigo?</label>
            <select name="modo_respuesta" id="modo_respuesta">
                <option value="C">Correo</option>
                <option value="T">Teléfono</option>
                <option value="L">Forma legal</option>
            </select>
            <br>
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
            <br>
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>
