# AppSalon - Sistema de Gestión de Citas

## 📖 Descripción

AppSalon es una aplicación web desarrollada con Laravel que permite la gestión de servicios y la reserva de citas en un salón de belleza.

El sistema implementa autenticación de usuarios, control de roles (administrador y cliente), CRUD de usuarios y servicios, y un módulo de citas con selección de múltiples servicios.

Repositorio oficial:
https://github.com/Cata-Estrada/App-Salon-de-Belleza.git

---

## ⚙️ Tecnologías utilizadas

* Laravel 12
* PHP 8.x
* MySQL
* Blade (Motor de plantillas)
* Tailwind CSS
* Composer
* XAMPP

---

## 🚀 Instrucciones de instalación

### 1. Clonar el repositorio

```bash
git clone https://github.com/Cata-Estrada/App-Salon-de-Belleza.git
cd App-Salon-de-Belleza
```

---

### 2. Instalar dependencias

```bash
composer install
npm install
```

---

### 3. Configurar entorno

Crear archivo `.env`:

```bash
cp .env.example .env
```

Editar las variables de base de datos:

```env
DB_DATABASE=appsalon
DB_USERNAME=root
DB_PASSWORD=
```

---

### 4. Generar clave de la aplicación

```bash
php artisan key:generate
```

---

### 5. Ejecutar migraciones

```bash
php artisan migrate
```

---

### 6. Ejecutar el servidor

```bash
php artisan serve
```

Abrir en navegador:

```
http://127.0.0.1:8000
```

---

## 🔐 Credenciales de usuarios de prueba

### 👨‍💼 Administrador

* Email: [admin@appsalon.com](mailto:admin@appsalon.com)
* Contraseña: 123456

### 👤 Cliente

* Email: [cliente@appsalon.com](mailto:cliente@appsalon.com)
* Contraseña: 123456

> Nota: Si no existen, pueden registrarse manualmente desde la aplicación.

---

## 🧩 Funcionalidades implementadas

### 🔐 Autenticación

* Registro de usuarios
* Inicio de sesión
* Cierre de sesión

---

### 👥 Gestión de roles

* Rol administrador
* Rol cliente
* Protección de rutas mediante middleware

---

### 👤 CRUD de usuarios (Administrador)

* Crear usuarios
* Editar usuarios
* Eliminar usuarios
* Asignar rol

---

### 💇‍♀️ CRUD de servicios (Administrador)

* Crear servicios
* Editar servicios
* Eliminar servicios
* Listado de servicios

---

### 📅 Sistema de citas

#### Cliente:

* Crear citas
* Seleccionar múltiples servicios
* Visualizar citas registradas

#### Sistema:

* Relación muchos a muchos (citas - servicios)
* Asociación de citas con usuarios
* Estado de la cita (pendiente)

---

## 🧠 Estructura del proyecto

* `app/Models` → Modelos (User, Service, Appointment)
* `app/Http/Controllers` → Controladores
* `resources/views` → Vistas Blade
* `routes/web.php` → Definición de rutas
* `database/migrations` → Migraciones de base de datos

---

## ⚠️ Consideraciones

* Proyecto desarrollado para entorno local
* Se recomienda usar XAMPP o entorno similar
* No incluye despliegue en producción

---

## 👨‍💻 Autor

Desarrollado por:
* Catalina Estrada Rivas
* Arley David Alpala Benavides
* Cristian Cifuentes Ruiz
Proyecto académico - Ingeniería de Sistemas
