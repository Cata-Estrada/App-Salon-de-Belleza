<x-app-layout>
    <div class="p-8">

        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-bold text-red-700">Gestión de Servicios</h1>
                <p class="text-gray-600">Administra el catálogo de servicios</p>
            </div>

            <a href="{{ route('services.create') }}"
                class="bg-red-600 text-white px-5 py-2 rounded-full shadow hover:bg-red-700">
                + Nuevo Servicio
            </a>
        </div>

        <!-- Tabla -->
        <div class="bg-white rounded-2xl shadow overflow-hidden">

            <table class="w-full text-left">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="p-4">Servicio</th>
                        <th class="p-4">Descripción</th>
                        <th class="p-4">Duración</th>
                        <th class="p-4">Precio</th>
                        <th class="p-4">Estado</th>
                        <th class="p-4 text-center">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($services as $service)
                        <tr class="border-t hover:bg-gray-50">

                            <td class="p-4 font-semibold text-red-700">
                                {{ $service->nombre }}
                            </td>

                            <td class="p-4 text-gray-600">
                                {{ $service->descripcion }}
                            </td>

                            <td class="p-4">
                                {{ $service->duracion }} min
                            </td>

                            <td class="p-4 text-red-600 font-semibold">
                                ${{ number_format($service->precio, 2) }}
                            </td>

                            <td class="p-4">
                                <span class="px-3 py-1 rounded-full text-sm 
                                        {{ $service->activo ? 'bg-green-100 text-green-700' : 'bg-gray-200' }}">
                                    {{ $service->activo ? 'Activo' : 'Inactivo' }}
                                </span>
                            </td>

                            <td class="p-4 text-center space-x-2">

                                <a href="{{ route('services.edit', $service) }}" class="text-blue-500 hover:underline">
                                    Editar
                                </a>

                                <form action="{{ route('services.destroy', $service) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-500 hover:underline">
                                        Eliminar
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>

    </div>
</x-app-layout>