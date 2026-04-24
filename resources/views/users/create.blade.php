<x-app-layout>
    <div class="p-6">

        <x-form-card title="Nuevo Usuario">

            <form method="POST" action="{{ route('users.store') }}" class="space-y-4">
                @csrf

                <!-- Nombre -->
                <div>
                    <label class="block font-semibold">Nombre *</label>
                    <input type="text" name="name" value="{{ old('name') }}"
                        class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-red-400">

                    @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Apellido -->
                <div>
                    <label class="block font-semibold">Apellido *</label>
                    <input type="text" name="apellido" value="{{ old('apellido') }}"
                        class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-red-400">

                    @error('apellido')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label class="block font-semibold">Email *</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-red-400">

                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Teléfono -->
                <div>
                    <label class="block font-semibold">Teléfono</label>
                    <input type="text" name="telefono" value="{{ old('telefono') }}"
                        class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-red-400">

                    @error('telefono')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Contraseña -->
                <div>
                    <label class="block font-semibold">Contraseña *</label>
                    <input type="password" name="password"
                        class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-red-400">

                    @error('password')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Rol -->
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="admin"
                        class="w-4 h-4 text-red-600 border-gray-300 rounded focus:ring-red-500">

                    <label class="font-semibold">Administrador</label>
                </div>

                <!-- Botones -->
                <div class="flex justify-between mt-6">
                    <a href="{{ route('users.index') }}" class="px-4 py-2 border rounded-lg hover:bg-gray-100">
                        Cancelar
                    </a>

                    <button type="submit"
                        class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                        Crear Usuario
                    </button>
                </div>

            </form>

        </x-form-card>

    </div>
</x-app-layout>