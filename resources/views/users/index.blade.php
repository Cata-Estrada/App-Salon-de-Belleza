<x-app-layout>
    <div class="p-8">

        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-bold text-red-700">Gestión de Usuarios</h1>
                <p class="text-gray-600">Administra los usuarios del sistema</p>
            </div>

            <a href="{{ route('users.create') }}"
                class="bg-red-600 text-white px-5 py-2 rounded-full shadow hover:bg-red-700">
                + Nuevo Usuario
            </a>
        </div>

        <!-- Tabla -->
        <div class="bg-white rounded-2xl shadow overflow-hidden">

            <table class="w-full text-left">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="p-4">Nombre</th>
                        <th class="p-4">Email</th>
                        <th class="p-4">Teléfono</th>
                        <th class="p-4">Rol</th>
                        <th class="p-4 text-center">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                        <tr class="border-t hover:bg-gray-50">

                            <td class="p-4 font-semibold text-red-700">
                                {{ $user->name }} {{ $user->apellido }}
                            </td>

                            <td class="p-4 text-gray-600">
                                {{ $user->email }}
                            </td>

                            <td class="p-4">
                                {{ $user->telefono ?? '—' }}
                            </td>

                            <td class="p-4">
                                <span class="px-3 py-1 rounded-full text-sm 
                                        {{ $user->admin ? 'bg-green-100 text-green-700' : 'bg-gray-200 text-gray-700' }}">
                                    {{ $user->admin ? 'Admin' : 'Cliente' }}
                                </span>
                            </td>

                            <td class="p-4 text-center space-x-2">

                                <a href="{{ route('users.edit', $user) }}" class="text-blue-500 hover:underline">
                                    Editar
                                </a>

                                <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')

                                    <button class="text-red-500 hover:underline"
                                        onclick="return confirm('¿Eliminar usuario?')">
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