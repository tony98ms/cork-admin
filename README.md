
## LARAVEL CORK ADMIN

<p  align="center">
<a  href="https://github.com/tony98msk"><img  src="https://img.shields.io/badge/TonyStore-EC-blue?style=for-the-badge"  alt="TonyStore"></a>
<a  href="https://github.com/tony98ms/cork-admin/issuesk"><img  src="https://img.shields.io/github/issues/tony98ms/cork-admin?style=for-the-badge"  alt="Build Status"></a>
<a  href="https://github.com/tony98ms/cork-admin/tags"><img  src="https://img.shields.io/github/downloads/tony98ms/cork-admin/total?style=for-the-badge"  alt="Total Downloads"></a>
<a  href="https://github.com/tony98ms/cork-admin/stargazers"><img  src="https://img.shields.io/github/stars/tony98ms/cork-admin?style=for-the-badge"  alt="Latest Stable Version"></a>
<a  href="https://github.com/tony98ms/cork-admin/blob/master/LICENSE"><img  src="https://img.shields.io/github/license/tony98ms/cork-admin?style=for-the-badge"  alt="License"></a>
</p>

Proyecto base de Laravel 7, usando la plantilla de [CORK](https://themeforest.net/item/cork-responsive-admin-dashboard-template/25582188) en su versión 1.9. Este proyecto contiene algunos paquetes extras que ayudaran en la construcción de tu aplicación web, los cuales son:

- [Laravol Avatar](https://github.com/laravolt/avatar): Nos permite generar avatar con letras.

- [Livewire](https://github.com/livewire/livewire): Permite crear interfaces dinámicas de forma simple, sin dejar de lado la comodidad de Blade.

- [Livewire Notification](https://github.com/tony98ms/livewire-notification): Genera notificaciones Toast desde Livewire utilizando los eventos de Livewire.

- [Laravel Permission](https://github.com/spatie/laravel-permission): Permite administrar los permisos y roles de los usuarios en una base de datos.
- [Livewire Permission](https://github.com/tony98ms/livewire-permission): Interfaz para administrar roles y permisos.
- [Laravel Sub Query](https://github.com/Alexmg86/laravel-sub-query): Realiza Sub Consultas a tu base de datos.


## Guía de Implementación 

* `git clone https://github.com/tony98ms/cork-admin`.

* `cd projectname`.

* `composer install`.

* `php artisan key:generate`.

* Crea tu base de datos y agrega sus credenciales en el archivo *.env*.

* `php artisan migrate --seed` para crear las tablas y las semillas con los datos por defecto para usar el sistema.

* `npm install`. Para instalar dependencias Js.

* `npm run dev`. Para compilar todos los estilos `css` y `js`

* `php artisan serve` para iniciar la aplicación.

### Contenido 

* `Modulo de Creación de Usarios `: Elaborado con Livewire.

* `Actualizar contraseña`: Elaborado con Livewire.

* `Modulo de Administracion de Roles y Permisos`: Elaborado con Livewire.
#### Proximamente
 1. Modulo de Configuración.
