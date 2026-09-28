# Pulmify (Laravel)

Versión Laravel independiente de la aplicación Angular. Angular permanece en la raíz del repositorio.

## Requisitos

- PHP 8.2 o posterior, con las extensiones requeridas por Laravel.
- Composer 2.
- Node.js y npm para compilar Tailwind CSS.

## Preparar y ejecutar en Windows

Desde PowerShell, entra a esta carpeta:

```powershell
cd C:\Users\USUARIO\angular-app\pulmify-laravel
Copy-Item .env.example .env
composer install
php artisan key:generate
npm install
npm run build
php artisan serve --host=127.0.0.1 --port=8000
```

Abre <http://127.0.0.1:8000>.

El sitio no necesita ejecutar migraciones. Las sesiones y el caché usan archivos locales; las colas se ejecutan sin servicio externo. No hay formularios de acceso ni datos clínicos persistidos.

## Activar el envío de solicitudes por correo

Por seguridad, el formulario solo confirma una solicitud cuando Laravel la entrega al servicio de correo configurado. Edita las variables `MAIL_MAILER`, `MAIL_HOST`, `MAIL_PORT`, `MAIL_USERNAME`, `MAIL_PASSWORD`, `MAIL_FROM_ADDRESS` y `PULMIFY_CONTACT_EMAIL` en `.env` con los datos SMTP reales. No compartas ni subas ese archivo al repositorio.

En desarrollo, el formulario muestra un aviso explícito mientras el SMTP de ejemplo no esté configurado. Las solicitudes válidas se validan en Laravel, se limitan a tres intentos cada diez minutos y se envían por email; no se escriben en una base de datos. Los errores de validación no guardan los valores enviados en la sesión.

La página utiliza exclusivamente registros clínicos y puntajes ficticios. No ingreses información de pacientes ni uses las visualizaciones para decisiones médicas.

## Pruebas y compilación

```powershell
php artisan test
npm run build
```
