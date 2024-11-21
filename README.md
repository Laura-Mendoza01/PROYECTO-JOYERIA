# CRUD_ESCUELA
Implementación de un patrón de diseño arquitectónico en capas

Este proyecto desarrolla una aplicación web interpretada en un servidor local, utilizando un enfoque por capas y codificada en PHP.

La herramienta implementa un patrón de diseño arquitectónico en capas, permitiendo realizar las siguientes operaciones sobre una base de datos relacional:

## Crear: Registra nuevos datos con sus atributos y los guarda en la base de datos.
## Leer: Recupera un registro y muestra sus atributos en una página web.
## Actualizar: Modifica los atributos de un registro existente.
## Eliminar: Borra un registro de la base de datos.

El objetivo es mostrar cómo se puede organizar una aplicación web mediante un diseño estructurado y funcional.

# SOFTWARE DE APOYO

## XAMPP

Instalación XAMP
Instalación y configuración del software para desarrollo de aplicaciones web XAMPP.

![Captura de pantalla (58)](https://github.com/user-attachments/assets/f0be0829-7bb2-4597-9f7f-6fa6be2b2170)

![Captura de pantalla (59)](https://github.com/user-attachments/assets/f267e07a-c416-435a-99fe-4892b95211f7)

![Captura de pantalla (60)](https://github.com/user-attachments/assets/1b88d6ac-4ff0-4c69-b9a5-fd0911cb6ac4)

![Captura de pantalla (61)](https://github.com/user-attachments/assets/6c27fdba-0be6-4aab-9661-fe7fca0aeccf)

![Captura de pantalla (62)](https://github.com/user-attachments/assets/1da013ee-1a42-46c2-85df-b9ce0d8d714e)

![Captura de pantalla (63)](https://github.com/user-attachments/assets/f706b199-94e0-43fc-ac5d-3b7bc26be3d2)

## REFERENCIAS 

https://github.com/miRepositorioGit/tresCapasPhp/blob/c3fb59373e917307541158f4577c7e27e8ddc327/Miscelaneos/instalacionConfiguracionXampp_V120.pdf

# ESTRUCTURA

![Captura de pantalla (64)](https://github.com/user-attachments/assets/a00cd86b-1621-4812-8bde-e16512b9098d)


Desarrollo.
Muestra una aplicación web desarrollada por capas contenidas monolíticamente y codificada en Php con distintas responsabilidades y fuertemente acopladas. Una estructura de código monolítca, es una práctica recurrente en aplicaciones básicas y, o sencillas.


Tiene las siguientes prácticas de desarrollo de software:

1. La aplicación es construida en sus elementos con la misma tecnología de lenguaje.
2. La aplicación principal es autosuficiente, contiene y comparte los componentes de: memoria, recursos y códigos distribuidos en clases y, o archivos en una unidad cohesiva de código.
3. Su ámbito de utilidad son escenarios donde existe un sistema informático autónomo. Es decir, no existe una dependencia con servicios externos, para ejecutar su tarea principal; por ejemplo, una computadora embebida para soporte de respiración asistida, un sistema de inyección electrónico de combustible en un vehículo. Es suma, su ámbito de operación es por sí mismo y no depende de nadie al ejecutar su tarea.
4. NO es apropiado para aplicaciones medianas a grandes, donde conviven otras tecnológias de software.
5. NO se recomienda que una misma tecnología de código, renderize la interfaz de usuario.
6. NO cumple con el principio de responsabilidad única 1.

# Implementa un patron de dieño arquitectónico de software por capas

## Estructura y manejo de dependencias en el proyecto

El árbol de dependencias refleja la implementación desarrollada. 

Una petición URL es gestionada por el archivo .htaccess, un archivo de texto utilizado para configurar el comportamiento del servidor Apache. Este archivo permite:

Redirigir una petición URL genérica hacia la carpeta /public.
Restringir la indexación del contenido del proyecto por motores de búsqueda o usuarios no autorizados.
La estructura de archivos del proyecto se organiza en dos carpetas principales:

/app: Contiene colecciones de carpetas con recursos de soporte para el desarrollo de la aplicación. Su contenido es accesible únicamente para los desarrolladores.
/public: Contiene colecciones de carpetas con los recursos disponibles para las peticiones realizadas por los usuarios.
Esta organización garantiza la seguridad y el correcto flujo de solicitudes en la aplicación.

![Captura de pantalla (65)](https://github.com/user-attachments/assets/2d60bfd0-c28c-4172-a165-c508cd43efce)


# Guía de instalación y uso del proyecto

## Descarga del proyecto:

1. Descarga el contenido del repositorio llamado JOYERIA y renómbralo como JOYERIA1 si es necesario.
Preparación del proyecto:

2.Descomprime el archivo descargado y colócalo en la carpeta htdocs de tu instalación de XAMPP.
Inicialización de servicios:

3. Ejecuta como administrador la aplicación xampp-control.exe.
Activa los servicios de Apache y MySQL.
Configuración de la base de datos:

4. Abre phpMyAdmin en tu navegador.
Crea una base de datos con el nombre escuela.
Importa el archivo secundarias.sql en la base de datos recién creada.
Prueba del proyecto:

5. En la barra de direcciones de tu navegador, escribe la URL ESCUELA/ para acceder a la aplicación.
Operaciones CRUD:

6. Crear: Selecciona "Dar de alta una secundaria", completa todos los campos del formulario y haz clic en Enviar.
Modificar: Selecciona "Modificar", edita uno o más campos y presiona Enviar.
Eliminar: Selecciona "Borrar" y revisa los registros actualizados en la tabla.
Consulta de información:

7. Escribe la URL CRUD_LeeMe/secundaria/info en la barra de direcciones para acceder a la información de la tabla.

# REFERENCIAS

https://github.com/miRepositorioGit/tresCapasPhp.git

https://github.com/miRepositorioGit/CRUD.git


[instalacionConfiguracionXampp_V120.pdf](https://github.com/user-attachments/files/17850651/instalacionConfiguracionXampp_V120.pdf)

