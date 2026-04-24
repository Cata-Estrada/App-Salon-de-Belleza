<x-app-layout>
    <div class="p-6">

        <h2>Citas</h2>

        <a href="{{ route('appointments.create') }}">Nueva Cita</a>

        <table class="w-full mt-4 border">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Servicios</th>
                    <th>Estado</th>
                </tr>
            </thead>

            <tbody>
                @foreach($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->fecha }}</td>
                        <td>{{ $appointment->hora }}</td>

                        <td>
                            @foreach($appointment->services as $service)
                                {{ $service->nombre }} <br>
                            @endforeach
                        </td>

                        <td>{{ $appointment->estado }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</x-app-layout>