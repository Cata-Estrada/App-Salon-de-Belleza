<x-app-layout>
    <div class="p-6">

        <x-form-card title="Nuevo Servicio">

            <form method="POST" action="{{ route('services.store') }}" class="space-y-4">
                @csrf

                <!-- Nombre -->
                <div>
                    <label class="block font-semibold">Nombre del Servicio *</label>
                    <input type="text" name="nombre" value="{{ old('nombre') }}" class="w-full border rounded-lg p-2">

                    @error('nombre')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Descripción -->
                <div>
                    <label class="block font-semibold">Descripción</label>
                    <textarea name="descripcion"
                        class="w-full border rounded-lg p-2">{{ old('descripcion') }}</textarea>
                </div>

                <!-- Precio y duración -->
                <div class="flex gap-4">
                    <div class="w-1/2">
                        <label class="block font-semibold">Precio *</label>
                        <input type="number" name="precio" value="{{ old('precio') }}"
                            class="w-full border rounded-lg p-2">

                        @error('precio')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-1/2">
                        <label class="block font-semibold">Duración *</label>
                        <input type="number" name="duracion" value="{{ old('duracion') }}"
                            class="w-full border rounded-lg p-2">

                        @error('duracion')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Botones -->
                <div class="flex justify-between mt-6">
                    <a href="{{ route('services.index') }}" class="px-4 py-2 border rounded-lg">
                        Cancelar
                    </a>

                    <button class="px-6 py-2 bg-red-600 text-white rounded-lg">
                        Crear
                    </button>
                </div>

            </form>

        </x-form-card>

    </div>
</x-app-layout>