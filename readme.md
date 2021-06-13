<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

Aspirante
johanm carrillo

Evaluador


Fecha de Evaluación
11/06/2020

Cognox S.A. le ha designado la implementación de un sistema de transacciones bancarias en línea, en las cuales un cliente del banco podrá realizar diferentes operaciones sobre las cuentas que posee en el banco.

Es importante tener en cuenta las siguientes recomendaciones técnicas al momento de desarrollar la solución:

Diseño Gráfico: El diseño de la aplicación debe estar sustentado mediante la utilización de hojas de estilo (CSS).
Validación: Se debe contar con un sistema de validación a todos los campos que pueden ser susceptibles de inserción o modificación de información de parte del usuario.
N-capas: Se debe implementar laravel y trabajar sobre componentes utilizando la metodología de dicho framework.
Bases de Datos: La base de datos que se debe utilizar como repositorio de datos de la solución será MySQL , se deben elaborar las tablas, vistas y procedimientos almacenados que considere necesarios para suministrar los datos requeridos por la solución. El modelo debe estar normalizado y contar con las claves primarias, claves foráneas e índices que representen las relaciones entre las diferentes tablas.
Uso de buenas prácticas: Se recomienda incorporar elementos en el desarrollo de la solución que direccionen a las buenas prácticas sobre el desarrollo de aplicaciones y el uso adecuado de los fundamentos de programación orientada a objetos.
A continuación se presenta el modelo de casos de uso y la definición de cada uno de los casos de uso que hacen parte de la solución requerida.


Modelo de Casos de Uso del Sistema

CU.001
Caso de Uso 001: Realizar Operación Bancaria
Descripción
El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando alguien solicite el ingreso como cliente.
Pre-condición
El usuario es cliente del banco y cuenta con su debida identificación y contraseña.
Secuencia
Normal
Paso
Acción
1
El caso de uso inicia cuando el cliente ingresa a la opción Operaciones Bancarias del sitio.
2
El sistema le solicita al cliente el ingreso de la identificación y la clave de acceso.
3
El cliente ingresa la identificación y la clave de acceso y selecciona la opción Ingresar.
4
El sistema verifica que la identificación y la clave de acceso coincidan contra las almacenadas en el repositorio de datos del banco.
5
El banco le envía un mensaje de aceptación al sistema indicando que la identificación y la clave son correctas.
6
El sistema solicita al cliente que seleccione un tipo de operación bancaria.
7
El cliente selecciona la opción "Transacciones Bancarias" o "Estado de la cuenta" o Salir.
8
El sistema le solicita al cliente la confirmación para salir del sistema.
9
El cliente selecciona la opción Aceptar y finaliza el caso de uso.
Post-condición
El cliente está habilitado para efectuar las operaciones de Transacciones Bancarias o Estado de Cuenta.
Rutas Alternativas
Paso
Acción
3
Ausencia de datos de acceso
El cliente no suministra la identificación o la clave de acceso.
El sistema verifica la ausencia de los datos de acceso, y envía un mensaje indicando su obligatoriedad.
El caso de uso continúa en el paso 3 del flujo básico.

5
Datos de acceso erróneos
El banco envía un mensaje de denegación al sistema indicando que los datos de acceso ingresados por el cliente no coinciden con los almacenados en el repositorio de datos.
El sistema le presenta al cliente un mensaje indicando la inconsistencia con los datos ingresados
El caso de uso continúa en el paso 3 de la ruta básica.

Comentarios
La contraseña debe contener cuatro caracteres y debe ser de tipo numérico.


CU.002
Caso de Uso 002: Listar Transacciones Bancarias
Descripción
El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando alguien haya ingresado satisfactoriamente al sistema y requiera efectuar una Transacción Bancaria.
Pre-condición
El cliente se encuentra autenticado en el sistema por medio de su identificación y clave de acceso.
Secuencia
Normal
Paso
Acción
1
El caso de uso inicia cuando el cliente ha seleccionado la opción Transacciones Bancarias.
2
El sistema le solicita al cliente que seleccione el tipo de transacción monetaria que desea realizar
3
El cliente selecciona la opción Transferencia Entre Cuentas Propias o Transferencia a Cuentas de Terceros.
4
El sistema le solicita al cliente si desea realizar otra operación.
5
El cliente decide no efectuar mas transacciones bancarias y selecciona la opción Salir.
6
El caso de uso finaliza.
Post-condición
n/a
Rutas Alternativas
Paso
Acción
No se contemplan rutas alternativas.
Comentarios
Si el cliente selecciona la opción Salir, se deben eliminar todos los datos que se hayan persistido posteriores al proceso de autenticación.
Las cuentas bancarias solo pertenecen a un solo cliente.



CU.003
Caso de Uso 004: Realizar transferencia a cuentas de terceros
Descripción
El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando alguien haya ingresado satisfactoriamente al sistema y requiera efectuar una transferencia bancaria desde cuentas propias a cuentas de un tercero.
Pre-condición
El cliente se encuentra autenticado en el sistema por medio de su identificación y clave de acceso.
Secuencia
Normal
Paso
Acción
1
El caso de uso inicia cual el cliente ha seleccionado la opción Transferencia a cuentas de terceros.
2
El sistema le solicita al banco la información de las cuentas de terceros que tiene registradas el cliente.
3
El banco le suministra al sistema las cuentas del cliente y las de los terceros que tiene registradas.
4
El sistema solicita al cliente que seleccione la cuenta origen, la cuenta destino y el monto de la transferencia.
5
El cliente elige la cuenta origen, la cuenta destino y el monto de la transacción, y selecciona la opción Transferir
6
El sistema procede a solicitar la transferencia al banco.
7
El banco envía un mensaje de aceptación al sistema indicando que la transferencia entre cuentas se pudo realizar de manera satisfactoria.
8
El sistema le presenta al cliente el código de la transacción.
9
El caso de uso finaliza.
Post-condición
n/a
Rutas Alternativas
Paso
Acción
4
No hay suficientes cuentas de terceros registradas
El sistema le informa al cliente que debe tener registrada al menos una cuenta de terceros registrada.
El caso de uso continúa en el paso 9 de la ruta básica.



7
Cuenta Origen no posee fondos suficientes
El banco envía un mensaje de denegación al sistema indicando que la transferencia no se puede efectuar porque el saldo de la cuenta origen no cuenta con los fondos suficientes para realizar la operación.
El sistema le presenta al usuario un mensaje indicando el rechazo de la operación.
El caso de uso continúa en el paso 9 de la ruta básica.

Comentarios
Si el cliente selecciona la opción Salir, se deben eliminar todos los datos que se hayan persistido posteriores al proceso de autenticación.


CU.004
Caso de Uso 005: Consultar el estado de la Cuenta
Descripción
El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando alguien haya ingresado satisfactoriamente al sistema y requiera consultar el estado de alguna de sus cuentas.
Pre-condición
El cliente se encuentra autenticado en el sistema por medio de su identificación y clave de acceso.
Secuencia
Normal
Paso
Acción
1
El caso de uso inicia cuando el cliente ha seleccionado la opción Estado de la cuenta.
2
El sistema le envía al banco la identificación del cliente.
3
El banco le suministra al sistema las cuentas del cliente.
4
El sistema le presenta las cuentas al cliente y le solicita que seleccione la cuenta de la que desea conocer el estado.
5
El cliente elije una de sus cuentas y selecciona la opción consultar estado.
6
El sistema envía el número de cuenta al banco para obtener información del estado de la cuenta.
7
El banco le suministra al sistema los datos básicos de la cuenta (número, saldo, titular) y los últimos 5 movimientos de transacciones bancarias efectuadas sobre la misma.
8
El sistema le presenta al usuario la información sobre el estado de la cuenta.
9
El caso de uso finaliza.
Post-condición
n/a
Rutas Alternativas
Paso
Acción
No se contemplan rutas alternativas.
Comentarios
Si el cliente selecciona la opción Salir, se deben eliminar todos los datos que se hayan persistido posteriores al proceso de autenticación.

