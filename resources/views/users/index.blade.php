<x-app-layout>
    <div class="p-6">

        <h2 class="text-xl font-bold">Usuarios</h2>

        <a href="{{ route('users.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
            Nuevo Usuario
        </a>

        <table class="mt-4 w-full border">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }} {{ $user->apellido }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->admin ? 'Admin' : 'Cliente' }}</td>

                        <td>
                            <a href="{{ route('users.edit', $user->id) }}">Editar</a>

                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button>Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</x-app-layout>