<x-app-layout>
    <div class="p-8">

        <div class="flex justify-between mb-6">
            <h1 class="text-2xl font-bold">Mis Citas</h1>

            <a href="{{ route('appointments.create') }}" class="bg-red-600 text-white px-4 py-2 rounded-lg">
                Reservar Cita
            </a>
        </div>

        <div class="bg-white rounded-xl shadow">

            <table class="w-full">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-3">Fecha</th>
                        <th class="p-3">Hora</th>
                        <th class="p-3">Servicios</th>
                        <th class="p-3">Total</th>
                        <th class="p-3">Estado</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($appointments as $appointment)
                        <tr class="border-t">
                            <td class="p-3">{{ $appointment->fecha }}</td>
                            <td class="p-3">{{ $appointment->hora }}</td>

                            <td class="p-3">
                                @foreach($appointment->services as $s)
                                    {{ $s->nombre }} <br>
                                @endforeach
                            </td>

                            <td class="p-3 font-bold text-red-600">
                                ${{ number_format($appointment->total, 2) }}
                            </td>

                            <td class="p-3">
                                <span class="px-3 py-1 rounded-full text-sm bg-yellow-100 text-yellow-700">
                                    {{ $appointment->estado }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>

    </div>
</x-app-layout>