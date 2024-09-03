# Veterinaria (Laravel)

Software para el proceso de reclamos web orientado a productos de una veterianaria.

### Pre-requisitos 📋

_Que cosas necesitas para poner en marcha el proyecto y como instalarlos_

* GIT [Link](https://git-scm.com/downloads)
* Entorno de servidor local, Ej: [Laragon](https://laragon.org/download/), [XAMPP](https://www.apachefriends.org/es/index.html) o [LAMPP](https://bitnami.com/stack/lamp/installer).
* PHP Version 7.4 - 8.0 [Link](https://www.php.net/downloads.php).
* Manejador de dependencias de PHP [Composer](https://getcomposer.org/download/).

### Instalación 🔧

Paso a paso de lo que debes ejecutar para tener el proyecto ejecutandose

 1. Clona el repositorio con el siguiente comando:
    ```bash
    git clone git@github.com:ivanbarboz/veterinaria.git
    ```
 4. Ingresa a la carpeta del repositorio
    ```bash
    cd repositorio
    ```
 5. Instala las dependencias del proyecto
    ```bash
    composer install
    ```

    ```bash
    npm install
    ```
 5. Crea el archivo ".env" copiando la información del ejemplo y cambiar valores de su Base de datos.
 6. Ejecute las migraciones
    ```bash
    php artisan migrate
    ```
 7. Inicialice el servidor local
    ```bash
    php artisan serve
    ```

## Diagrama Entidad - Relación
```mermaid
erDiagram
    units {
        int id "Identificador de la unidad"
        varchar(20) name "Nombre de la unidad"
    }

    products {
        int id "Identificador del producto"
        varchar(80) name "Nombre del producto"
        varchar(255) description "Descripción del producto"
        date expiration_date "Fecha en la que el producto vence"
    }

    product_unit {
        int product_id "Identificador del producto"
        int unit_id "Identificador de la unidad"
        decimal price "Precio del producto por la unidad"
        int current_stock "Cantidad actual del producto"
        int stock "El stock inicial en el ultimo ingreso"
        date last_supply "Fecha del ultimo ingreso del producto con la unidad"
    }

    laboratories {
        int id "Identificador del laboratorio"
        varchar(80) name "Nombre del laboratorio"
        varchar(120) location "Ubicación del laboratorio"
    }

    product_laboratory {
        int product_id 
        int laboratory_id
    }

    document_types {
        int id "Identificador del documento"
        varchar(40) name "Nombre del documento"
    }

    user_document {
        int user_id "Identificador del usuario"
        int document_type_id "Identificador del tipo de documento"
        varchar(20) document_number "Número del documento"
    }

    users {
        int id "Identificador del usuario (Cliente)"
        varchar(120) firstname "Nombres del usuario"
        varchar(120) lastname "Apellidos del usuario"
        varchar(160) email "Correo del usuario"
        varchar(10) phone "Teléfono del usuario"
        varchar(1) status "Estado de la cuenta A (Activado) D (Desactivado)"
    }

    employees {
        int id "Identificador del empleado"
        varchar(120) firstname "Nombres del empleado"
        varchar(120) lastname "Apellidos del empleado"
        varchar(10) phone "Número de telefono del empleado"
        varchar(120) email "Correo del empleado"
        date birthdate "Fecha de nacimiento del empleado"
        varchar(120) location "Ubicación del empleado" 
    }

    employee_document {
        int employee_id "Identificador del empleado"
        int document_type_id "Identificador del tipo de documento"
        varchar(20) document_number "Número del documento"
    }

    purchases {
        int id "Identificador de compra"
        varchar(120) purchase_code "Código de identificación de compra"
        date purchase_date "Fecha de la compra"
        decimal total_price "Monto pagado por la compra"
        int user_id "Usuario que realizo la compra"
        int employee_id "Empleado que atendi la compra"
    }

    purchase_product {
        int purchase_id "Identificador de la compra"
        int product_id "Identificador del producto"
        int amount "Cantidad del producto por compra"
        decimal sub_total "Precio del producto por la cantidad"
        int unit_id "Unidad del producto comprado"
    }

    claims {
        int id "Identificador del reclamo"
        varchar(255) description "Descripción del reclamo"
        date response_date "Fecha en la que se respondio al reclamo"
        varchar(1) response_mode "C (Correo), T (Telefono), L (Legal)"
        varchar(20) purchase_code "Código de la compra"
        int user_id "Indentificador del usuario"
        int product_id "Identificador del producto"
        int employee_id "Identificador del empleado"
        varchar(255) document "Documento (Comprobante de compra, factura, etc)"
    }

    product_laboratory }|--|| laboratories : "fabrica"
    products ||--|{ product_laboratory : "lo fabrican"
    product_unit }|--|| products : "esta disponible"
    units ||--|{ product_unit : "la tienen disponible"
    
    users ||--|{ user_document : "tiene"
    user_document }|--|| document_types : "lo tienen"

    employee_document }|--|| employees : "tiene"
    document_types ||--|{ employee_document : "lo tienen"

    products ||--|{ purchase_product : "pertenece"
    purchases ||--|{ purchase_product : "contiene"
    employees ||--|{ purchases : "atiende"
    users ||--|{ purchases : "realiza"

    users ||--|{ claims : "realiza"
    employees ||--|{ claims : "atiende"
    claims }|--|| products : "esta en"
```
