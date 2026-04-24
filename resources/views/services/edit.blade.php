<x-app-layout>
    <div class="p-6">

        <h2>Editar Servicio</h2>

        <form method="POST" action="{{ route('services.update', $service->id) }}">
            @csrf
            @method('PUT')

            <input type="text" name="nombre" value="{{ $service->nombre }}" required>
            <input type="number" name="precio" value="{{ $service->precio }}" required>
            <input type="number" name="duracion" value="{{ $service->duracion }}" required>

            <textarea name="descripcion">{{ $service->descripcion }}</textarea>

            <button type="submit">Actualizar</button>
        </form>

    </div>
</x-app-layout>