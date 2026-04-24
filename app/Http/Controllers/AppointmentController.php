<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AppointmentController extends Controller
{
    //VER MIS CITAS
    public function index()
    {
        $appointments = Appointment::with('services')
            ->where('user_id', auth()->id())
            ->get();

        return view('appointments.index', compact('appointments'));
    }

    /**
     * Mostrar formulario de creación
     */
    public function create(): View
    {
        $services = Service::where('activo', true)->get();
        return view('appointments.create', compact('services'));
    }

    /**
     * Guardar cita
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'fecha' => 'required|date|after_or_equal:today',
            'hora' => 'required',
            'services' => 'required|array|min:1',
        ]);

        // Obtener servicios seleccionados
        $services = Service::whereIn('id', $validated['services'])->get();

        // Calcular total
        $total = $services->sum('precio');

        // Crear cita
        $appointment = Appointment::create([
            'fecha' => $validated['fecha'],
            'hora' => $validated['hora'],
            'user_id' => auth()->id(),
            'total' => $total,
            'estado' => 'pendiente',
        ]);

        // Relación muchos a muchos
        $appointment->services()->attach($validated['services']);

        return redirect()->route('appointments.index')
            ->with('success', 'Cita creada correctamente');
    }
}