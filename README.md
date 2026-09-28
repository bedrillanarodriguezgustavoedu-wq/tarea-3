# Pulmify

Sitio web de Pulmify con dos versiones independientes:

- Angular y Tailwind CSS en la raíz del repositorio.
- Laravel 12 y Blade en `pulmify-laravel/`.

Ambas versiones funcionan sin una base de datos y usan contenido clínico ficticio de demostración. No uses los puntajes ni ejemplos para tomar decisiones médicas.

## Requisitos

- Node.js y npm.
- PHP 8.2 o posterior y Composer para Laravel.

## Ejecutar la versión Angular

Desde la raíz del repositorio:

```powershell
npm install
npm start
```

Abre <http://localhost:4200>.

## Ejecutar la versión Laravel

Desde PowerShell:

```powershell
cd .\pulmify-laravel
composer install
Copy-Item .env.example .env
php artisan key:generate
npm install
npm run build
php artisan serve
```

Abre <http://127.0.0.1:8000>. No ejecutes migraciones; esta versión usa sesiones y caché en archivos y no necesita una base de datos.

Para enviar solicitudes del formulario Laravel, configura los valores SMTP y `PULMIFY_CONTACT_EMAIL` en `pulmify-laravel/.env`. El archivo `.env` está excluido de Git: nunca publiques credenciales. Si SMTP no está configurado, el formulario muestra un aviso y no finge que envió el mensaje. Las solicitudes válidas se envían por correo y no se almacenan en una base de datos.

## Pruebas

Angular, desde la raíz:

```powershell
npm test -- --watch=false
npm run build
```

Laravel, desde `pulmify-laravel`:

```powershell
php artisan test
npm run build
```

## Repositorio

<https://github.com/bedrillanarodriguezgustavoedu-wq/tarea-3>
