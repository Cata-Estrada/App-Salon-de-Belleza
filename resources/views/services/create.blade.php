<x-app-layout>
    <div class="p-6">

        <h2>Crear Servicio</h2>

        <form method="POST" action="{{ route('services.store') }}">
            @csrf

            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="number" name="precio" placeholder="Precio" required>
            <input type="number" name="duracion" placeholder="Duración" required>

            <textarea name="descripcion" placeholder="Descripción"></textarea>

            <button type="submit">Guardar</button>
        </form>

    </div>
</x-app-layout>