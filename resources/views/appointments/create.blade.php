<x-app-layout>
    <div class="p-6">

        <h2>Crear Cita</h2>

        <form method="POST" action="{{ route('appointments.store') }}">
            @csrf

            <input type="date" name="fecha" required>
            <input type="time" name="hora" required>

            <h3>Servicios</h3>

            @foreach($services as $service)
                <label>
                    <input type="checkbox" name="services[]" value="{{ $service->id }}">
                    {{ $service->nombre }} - ${{ $service->precio }}
                </label><br>
            @endforeach

            <button type="submit">Guardar Cita</button>

        </form>

    </div>
</x-app-layout>