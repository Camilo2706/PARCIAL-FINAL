# Proyecto de Gestión de Productos, Proveedores y Órdenes de Compra

## Requisitos
- Laravel 11
- Composer
- PHP 8.1+
- MySQL o cualquier base de datos compatible

## Instalación

1. Clona este repositorio:
   ```bash
   git clone https://github.com/Camilo2706/PARCIAL-FINAL/commits/main/

Navega al directorio del proyecto
Instala las dependencias de Laravel
Copia el archivo .env.example a .env y configure la base de datos

Descripción General del Proyecto
El objetivo del proyecto es desarrollar una aplicación en Laravel 11 que permita gestionar la información de productos, proveedores y órdenes de compra. El sistema debe realizar las operaciones CRUD (Crear, Leer, Actualizar y Eliminar) para cada una de estas entidades. Además, se ha implementado Laravel Breeze para gestionar la autenticación y proteger las rutas, de manera que solo los usuarios autenticados puedan acceder a las funcionalidades del sistema.

Paso a paso de la configuracion:
Instalar y Configurar: Crear un projecto en el cmd (Importante tener el composer instalado) y utiliar el comando: composer create-project laravel/laravel GestionProductos

Base de Datos: La base de datos fue configurada utilizando DBeaver, donde se creó una base de datos llamada gestion_productos. Las migraciones de Laravel fueron utilizadas para crear las tablas necesarias.

Configuración de Laravel Breeze: Laravel Breeze fue instalado y configurado para gestionar la autenticación de usuarios. Esto permite que solo usuarios registrados puedan acceder a las operaciones CRUD del sistema.

Ahora crearemos las tablas y haremos sus respectivas migraciones:

Productos: Contiene información sobre los productos, incluyendo nombre, descripción, precio y cantidad en stock. Se utilizó la migración create_productos_table para crear esta tabla.

Proveedores: Contiene información sobre los proveedores, como nombre, dirección, teléfono y email. Se creó la migración create_proveedores_table para esta tabla.

Órdenes de Compra: Relaciona productos y proveedores. Esta tabla contiene información sobre la cantidad de productos pedidos, la fecha de la orden y la fecha estimada de entrega. La migración create_ordenes_compra_table establece las relaciones con las tablas de productos y proveedores.

Continuaremos creando los modelos para cada entidad y realizaremos las relacions necesarias utilizaremos el comando php aritisan model:create y nombre del modelo;

Tipos de modelo:

Modelo Producto: El modelo Producto tiene una relación hasMany con las órdenes de compra, ya que un producto puede estar presente en varias órdenes.
Modelo Proveedor: Similar a los productos, el modelo Proveedor tiene una relación hasMany con las órdenes de compra.
Modelo OrdenCompra: El modelo OrdenCompra tiene relaciones belongsTo con productos y proveedores, ya que cada orden de compra pertenece a un producto y a un proveedor.

Lo mismo haremos para los controladores esto es parab gestionar las operacion del Crud se crea un controlador para cada uno de las entidades, donde cada controlador tiene sus funciones estandar como el index, create, store.
 
Como ejemplo guiarse con cada uno de los controladores y configurar bien las rutas en este caso las haremos protegidas y con validaciones a traves del middleware auth permitiendo que solo los usuarios autenticados puedan acceder a las funciones.

Para terminar configuramos las vistas en resources y views donde en este caso para cada entidad usaremos las mismas 3 como es index= Muestra la lista de registros para editar o eliminar
create: contiene el formulario para agregar un nuevo registro
y edit : para editar los registros. las vistas estan integradas con el layout de la aplicacion, lo que garantia la experiencia de usuario 
Muy importante configurar en el index las rutas correspondientes para evitar errores a la hora de ejecutar 

El sistema desarrollado gestiona eficazmente productos, proveedores y órdenes de compra, con todas las operaciones CRUD implementadas. Además, se ha integrado una capa de seguridad mediante la autenticación de usuarios, protegiendo el acceso a las funcionalidades del sistema.
El código está versionado en GitHub para asegurar la colaboración y el control de versiones, siguiendo buenas prácticas de desarrollo en equipo.
 
