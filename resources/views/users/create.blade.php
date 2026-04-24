<x-app-layout>
    <div class="p-6">

        <h2>Crear Usuario</h2>

        <form method="POST" action="{{ route('users.store') }}">
            @csrf

            <input type="text" name="name" placeholder="Nombre" required>
            <input type="text" name="apellido" placeholder="Apellido" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="telefono" placeholder="Teléfono">

            <input type="password" name="password" placeholder="Contraseña" required>

            <label>
                <input type="checkbox" name="admin"> Es admin
            </label>

            <button type="submit">Guardar</button>
        </form>

    </div>
</x-app-layout>