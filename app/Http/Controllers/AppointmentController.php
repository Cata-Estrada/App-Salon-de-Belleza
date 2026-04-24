<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Service;
use Illuminate\Http\Request;


class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with('services')->get();
        return view('appointments.index', compact('appointments'));
    }

    public function create()
    {
        $services = Service::all();
        return view('appointments.create', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'hora' => 'required',
            'services' => 'required|array'
        ]);

        $appointment = Appointment::create([
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'user_id' => auth()->id(),
            'estado' => 'pendiente'
        ]);

        // Relación muchos a muchos
        $appointment->services()->attach($request->services);

        return redirect()->route('appointments.index')
            ->with('success', 'Cita creada correctamente');
    }
}