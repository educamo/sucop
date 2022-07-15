# sucop

repositorio de la aplicación

https://github.com/educamo/sucop 

## **descripcion**

sistema de ubicación corpoelec (usando la api de google maps)

## Comenzando 🚀

Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas.

Mira Deployment para conocer como desplegar el proyecto.

## Pre-requisitos 📋

- Servidor Apache 
- servidor Mysql
- Php V.7.0

## Instalación 🔧

* Descargar o Clonar el proyecto desde el repositorio de github en el directorio raíz de tu servidor web.

* Una vez tengas el directorio del proyecto descargado, deberas ir al archivo: "application/config/database.php" y modificar las sigientes lineas

        'username' => 'root',
        'password' => '',


por el usuario y password de tu servidor de base de datos

* Luego crea la base de datos "db_sucop" en tu servidor Mysql

* Después abre la Terminal y ve a la directorio raíz del proyecto y ejecutas el siguiente comando:

            php index.php migrate


* Ahora abres el explorador de tu preferencia y ve a la direccion

        http://localhost/sucop/
        Usuario: educamo
        Password: 1234

## Construido con 🛠️
- Html5
- Css3
- PHP 7
- Bootstrap 4
- JQuery 1.4.1 - 1.9.1 -1.11.0 -1.10.2
- FontAwesome
- glyphicons
- DataTable
- alertifyjs
- phpMailer
- TweenMax

Menciona las herramientas que utilizaste para crear tu proyecto

    Codeigniter 3 - El framework web usado


## Contribuyendo 🖇️

Por favor lee el CONTRIBUTING.md para detalles de nuestro código de conducta, y el proceso para enviarnos pull requests.


## Versionado 📌

Use Git para el versionado. Para todas las versiones disponibles, mira los tags en este repositorio.

## Autores ✒️
        desarrollo

También puedes mirar la lista de todos los contribuyentes quíenes han participado en este proyecto.

## Licencia 📄

Este proyecto está bajo la Licencia (Tu Licencia) - mira el archivo LICENSE.md para detalles

## Expresiones de Gratitud 🎁
