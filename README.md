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

* edite los requerimientos (validaciones), indicando las reglas por cada campo.

```php
    public function rules(): array
    {
        return [
            'solicitante' => 'required',
            'descripcion' => 'required',
            'costo' => 'gt:0|required|numeric|min:0|not_in:0',
            'cantidad' => 'gt:0|required|numeric|min:0|not_in:0',
        ];
    }
```

## Agregar autenticacion

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

* Y crear la funcion en el controlador

```php
if(Auth::attempt(["email"=> $request->email,'password'=>$request->password])) {
    $request->session()->regenerate();

    return redirect("/soporte");
}
```

* Y cree un enrutamiento para la pagina de login. Este enrutamiento tiene que llamarse "login".

* Modificar el enrutamiento, agregando los middleware en las paginas que requieren authenticacion.

```php
 Route::middleware('auth')->get('/insertar','create');  
```

