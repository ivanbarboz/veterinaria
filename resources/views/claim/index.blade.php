<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Reclamaciones</title>
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
                <form action="{{ route('register-claim') }}" method="POST">
                    @csrf

                    <h2>Datos del cliente</h2>
                    <div class="input-group">
                        <label for="firstname">Nombres</label>
                        <input type="text" name="firstname" id="firstname">
                    </div>
                    <div class="input-group">
                        <label for="lastname">Apellidos</label>
                        <input type="text" name="lastname" id="lastname">
                    </div>
                    <div class="input-group">
                        <label for="email">Correo</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="input-group">
                        <label for="phone">Teléfono</label>
                        <input type="text" name="phone" id="phone">
                    </div>
                    <div class="input-group">
                        <label for="document_type_id">Documento</label>
                        <select name="document_type_id" id="document_type_id">
                            <option value="1">DNI</option>
                            <option value="2">RUC</option>
                            <option value="3">Pasaporte</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="document_number">Número de documento</label>
                        <input type="text" name="document_number" id="document_number">
                    </div>

                    <h2>Datos del reclamo</h2>
                    <div class="input-group">
                        <label for="purchase_code">Código de compra</label>
                        <input type="text" name="purchase_code" id="purchase_code">
                    </div>
                    <div class="input-group">
                        <label for="purchase_date">Fecha de compra</label>
                        <input type="date" name="purchase_date" id="purchase_date">
                    </div>
                    <div class="input-group">
                        <label for="response_mode">¿Cómo te gustaría que nos pongamos en contacto contigo?</label>
                        <select name="response_mode" id="response_mode">
                            <option value="C">Correo</option>
                            <option value="T">Teléfono</option>
                            <option value="L">Forma legal</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="description">Descripción</label>
                        <textarea name="description" id="description" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
