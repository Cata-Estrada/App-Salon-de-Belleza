<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ServiceController extends Controller
{
    /**
     * Mostrar lista de servicios
     */
    public function index(): View
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    /**
     * Mostrar formulario de creación
     */
    public function create(): View
    {
        return view('services.create');
    }

    /**
     * Guardar un nuevo servicio
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'duracion' => 'required|integer|min:1',
            'descripcion' => 'nullable|string',
        ]);

        Service::create($validated);

        return redirect()->route('services.index')
            ->with('success', 'Servicio creado correctamente');
    }

    /**
     * Mostrar formulario de edición
     */
    public function edit(Service $service): View
    {
        return view('services.edit', compact('service'));
    }

    /**
     * Actualizar servicio
     */
    public function update(Request $request, Service $service): RedirectResponse
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'duracion' => 'required|integer|min:1',
            'descripcion' => 'nullable|string',
        ]);

        $service->update($validated);

        return redirect()->route('services.index')
            ->with('success', 'Servicio actualizado correctamente');
    }

    /**
     * Eliminar servicio
     */
    public function destroy(Service $service): RedirectResponse
    {
        $service->delete();

        return redirect()->route('services.index')
            ->with('success', 'Servicio eliminado correctamente');
    }

    /**
     * Mostrar catálogo público
     */
    public function catalogo(): View
    {
        $services = Service::where('activo', true)->get();
        return view('services.catalogo', compact('services'));
    }
}