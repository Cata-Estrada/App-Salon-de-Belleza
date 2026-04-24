<x-app-layout>
    <div class="p-6">

        <h2 class="text-2xl font-bold mb-6">Catálogo de Servicios</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

            @foreach($services as $service)
                <div class="p-4 border rounded shadow bg-white">

                    <h3 class="font-bold text-lg">{{ $service->nombre }}</h3>

                    <p class="text-gray-600">{{ $service->descripcion }}</p>

                    <p class="mt-2">
                        💰 Precio: ${{ $service->precio }}
                    </p>

                    <p>
                        ⏱ Duración: {{ $service->duracion }} min
                    </p>

                    <button class="mt-3 bg-green-500 text-white px-3 py-1 rounded">
                        Reservar (próximamente)
                    </button>

                </div>
            @endforeach

        </div>

    </div>
</x-app-layout>