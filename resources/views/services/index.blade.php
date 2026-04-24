<x-app-layout>
    <div class="p-6">

        <h2 class="text-xl font-bold mb-4">Servicios</h2>

        <a href="{{ route('services.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
            Nuevo Servicio
        </a>

        @if(session('success'))
            <div class="bg-green-200 p-2 mt-3">
                {{ session('success') }}
            </div>
        @endif

        <table class="mt-4 w-full border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-2">Nombre</th>
                    <th class="p-2">Precio</th>
                    <th class="p-2">Duración</th>
                    <th class="p-2">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($services as $service)
                    <tr class="text-center border-t">
                        <td class="p-2">{{ $service->nombre }}</td>
                        <td class="p-2">${{ $service->precio }}</td>
                        <td class="p-2">{{ $service->duracion }} min</td>

                        <td class="p-2">
                            <a href="{{ route('services.edit', $service->id) }}" class="text-blue-500">Editar</a>

                            <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500 ml-2">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</x-app-layout>