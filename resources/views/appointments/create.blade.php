<x-app-layout>
    <div class="p-6">

        <x-form-card title="Reservar Cita">

            <form method="POST" action="{{ route('appointments.store') }}" class="space-y-4">
                @csrf

                <!-- Fecha -->
                <div>
                    <label class="block font-semibold">Fecha *</label>
                    <input type="date" name="fecha" value="{{ old('fecha') }}" class="w-full border rounded-lg p-2">

                    @error('fecha')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Hora -->
                <div>
                    <label class="block font-semibold">Hora *</label>
                    <input type="time" name="hora" value="{{ old('hora') }}" class="w-full border rounded-lg p-2">

                    @error('hora')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Servicios -->
                <div>
                    <label class="block font-semibold">Servicios *</label>

                    @foreach($services as $service)
                        <label class="block">
                            <input type="checkbox" name="services[]" value="{{ $service->id }}">
                            {{ $service->nombre }} - ${{ $service->precio }}
                        </label>
                    @endforeach

                    @error('services')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Botones -->
                <div class="flex justify-between mt-6">
                    <a href="{{ route('appointments.index') }}" class="px-4 py-2 border rounded-lg">
                        Cancelar
                    </a>

                    <button class="px-6 py-2 bg-red-600 text-white rounded-lg">
                        Reservar
                    </button>
                </div>

            </form>

        </x-form-card>

    </div>
</x-app-layout>