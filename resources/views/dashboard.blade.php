<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard AppSalon
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white p-6 rounded shadow">
                <p class="mb-4">Bienvenido, {{ auth()->user()->name }}</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    {{-- ADMIN --}}
                    @if(auth()->user()->esAdmin())

                        <a href="{{ route('services.index') }}" class="block p-6 bg-blue-100 rounded hover:bg-blue-200">
                            <h3 class="font-bold text-lg">Gestión de Servicios</h3>
                            <p>Crear, editar y eliminar servicios</p>
                        </a>

                        <a href="{{ route('users.index') }}" class="block p-6 bg-green-100 rounded hover:bg-green-200">
                            <h3 class="font-bold text-lg">Gestión de Usuarios</h3>
                            <p>Administrar usuarios del sistema</p>
                        </a>

                    @endif

                    {{-- CLIENTE --}}
                    @if(!auth()->user()->esAdmin())

                        <a href="{{ route('appointments.create') }}" class="block p-6 bg-purple-100 rounded">
                            <h3 class="font-bold text-lg">Reservar Cita</h3>
                        </a>

                    @endif

                </div>
            </div>

        </div>
    </div>
</x-app-layout>