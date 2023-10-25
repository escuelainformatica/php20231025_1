# pasos

* crear el proyecto
* configurar la variable .env
* crear la base de datos
* crear modelos

> php artisan make:model Soporte --all

* editar la migracion y ejecutarla

> php artisan migrate:install
> php artisan migrate:fresh

* modificar el modelo

* crear el controlador y editarlo

* editar el enrutamiento (web.php)

* crear las paginas

> php artisan make:view soporte.crear

* edite los requerimientos (validaciones)

## Agregar autenticacion.

```shell
PS C:\cursophp2023\php20231025> php artisan tinker
Psy Shell v0.11.22 (PHP 8.2.10 — cli) by Justin Hileman
> $user=new User();
[!] Aliasing 'User' to 'App\Models\User' for this Tinker session.
= App\Models\User {#6271}

> $user->name="john";
= "john"

> $user->email="john@mail.com";
= "john@mail.com"

> $user->password=Hash::make("admin");
= "$2y$10$COUitrSEvcpZ8NGTrvZfu.91C2ySqTXTKYEM4rcWy50V0rxCuM24m"

> $user->save();
= true

>
```

* Luego, cree una pagina de login

