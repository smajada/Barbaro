# Bárbaro

“Bárbaro” es un proyecto de software que tiene como objetivo principal la creación de un sistema de gestión de reservas para una barberia. El sistema permite a los clientes registrarse, reservar citas, ver los servicios disponibles y consultar información sobre la barbería. Por otro lado, los administradores pueden gestionar las reservas, los servicios, los empleados y los clientes.

## Integrantes

- [David Ramírez Ruiz](https://github.com/davidzz-code)
- [Sergio Majada Manresa](https://github.com/smajada)

## Tecnologías
Las tecnologías utilizadas en el proyecto son las siguientes:
- **Frontend**: Vue 3
- **Backend**: Laravel JSON:API
- **Base de datos**: PostgreSQL

## Instalación

1. Clonar el repositorio:

   ```bash
   git clone https://github.com/smajada/Barbaro.git
    ```

2. Instalar las dependencias del frontend:
   ```bash
   cd frontend
   npm install
   ```

3. Instalar las dependencias del backend:
   ```bash
    cd backend
    composer install
    ```

4. Crear un archivo `.env` en la carpeta `backend` y copiar el contenido del archivo `.env.example` en él:
    ```bash
    cp .env.example .env
    ```


5. Crear una base de datos en PostgreSQL y configurar las credenciales en el archivo `.env`:

    ```bash
    DB_CONNECTION=pgsql
    DB_HOST=
    DB_PORT=5432
    DB_DATABASE=
    DB_USERNAME=
    DB_PASSWORD=
    ```
6. Generar la clave de la aplicación:
    ```bash
    php artisan key:generate
    ```
7. Ejecutar las migraciones y seeders:
    ```bash
    php artisan migrate --seed
    ```
8. Iniciar el servidor de desarrollo:
    ```bash
    php artisan serve
    ```
9. Iniciar el servidor de frontend:
    ```bash
    cd frontend
    npm run serve
    ```
10. Acceder a la aplicación en `http://localhost:8080`
11. Acceder al panel de administración en `http://localhost:8080/admin` con las siguientes credenciales:
    - **Usuario**: admin
    - **Contraseña**: password
    - **Nota**: Se recomienda cambiar la contraseña una vez iniciada la sesión.

## Deployment
Este proyecto ha sido desplegado en un servidor privado. Puede acceder a la aplicación en el siguiente enlace: [Bárbaro](http://barbaro.randion.es/)
