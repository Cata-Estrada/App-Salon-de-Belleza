<x-app-layout>
    <div class="p-6">

        <h2>Editar Usuario</h2>

        <form method="POST" action="{{ route('users.update', $user->id) }}">
            @csrf
            @method('PUT')

            <input type="text" name="name" value="{{ $user->name }}" required>
            <input type="text" name="apellido" value="{{ $user->apellido }}" required>
            <input type="email" name="email" value="{{ $user->email }}" required>
            <input type="text" name="telefono" value="{{ $user->telefono }}">

            <input type="password" name="password" placeholder="Nueva contraseña">

            <label>
                <input type="checkbox" name="admin" {{ $user->admin ? 'checked' : '' }}>
                Es admin
            </label>

            <button type="submit">Actualizar</button>
        </form>

    </div>
</x-app-layout>