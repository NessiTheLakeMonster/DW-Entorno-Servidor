# Notas de laravel

+ Para crear el proyecto
```bash
composer create-project laravel/laravel ejemplo
```

+ Para montar el servidor
```bash
php artisan serve
```

+ Crear controlador
```bash
php artisan make:controller MiControlador
```

+ Crear middleware
```bash
php artisan make:middleware mid1
```

+ Crear modelo
```bash
php artisan make:model modelo1
```

+ Cuando no tenga la carpeta vendor
```bash
composer update
```

## Migraciones

+ Migra todas
```bash
php artisan migrate
```

+ Hace un rollback de la última migration.
```bash
php artisan migrate:rollback
```

+ Rollback de todas.
```bash
php artisan migrate:reset
```
 
php artisan migrate --path=/app/database/migrations/my_migrations
rollback --> la última migration
reset --> todas las migrations
refresh --> rollback más migrate
php artisan make:migration create_partes_table 
php artisan migrate:status --> Estado
php artisan migrate --path=database/migrations/2023_10_24_181853_create_profesores_table.php  --> Migrar solo uno.
php artisan migrate:rollback --path=database/migrations/2023_10_24_181859_create_partes_table.php
php artisan migrate:rollback --step=5 --> Hace rollback de la migración indicada en la tabla Migrations.