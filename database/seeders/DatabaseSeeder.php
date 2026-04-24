<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Service;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin',
            'apellido' => 'Principal',
            'email' => 'admin@test.com',
            'password' => Hash::make('123456'),
            'telefono' => '3001234567',
            'admin' => 1,
        ]);

        // Usuario normal
        User::create([
            'name' => 'Cliente',
            'apellido' => 'Prueba',
            'email' => 'cliente@test.com',
            'telefono' => '3019876543',
            'password' => Hash::make('123456'),
            'admin' => 0,
        ]);

        Service::create([
            'nombre' => 'Corte de cabello',
            'descripcion' => 'Corte profesional adaptado a tu estilo y tipo de rostro.',
            'precio' => 20000,
            'duracion' => 30,
        ]);

        Service::create([
            'nombre' => 'Manicure',
            'descripcion' => 'Limpieza, cuidado y esmaltado básico de uñas.',
            'precio' => 15000,
            'duracion' => 40,
        ]);

        Service::create([
            'nombre' => 'Pedicure',
            'descripcion' => 'Tratamiento completo para el cuidado de los pies.',
            'precio' => 18000,
            'duracion' => 45,
        ]);

        Service::create([
            'nombre' => 'Tinte de cabello',
            'descripcion' => 'Aplicación de tinte profesional con productos de alta calidad.',
            'precio' => 60000,
            'duracion' => 120,
        ]);

        Service::create([
            'nombre' => 'Peinado',
            'descripcion' => 'Peinado para eventos especiales o uso diario.',
            'precio' => 25000,
            'duracion' => 50,
        ]);
    }
}