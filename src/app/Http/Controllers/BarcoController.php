<?php

namespace App\Http\Controllers;

use App\Models\barcos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarcoController extends Controller
{
    public function barcos()
    {
        $barcos = barcos::all();
        return view('landing.barcos', compact('barcos'));
    }

    public function create()
    {
        return view('barcos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo_combustible' => 'required|string',
            'capacidad_pasajeros' => 'required|integer',
            'velocidad_maxima' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $barco = new barcos($request->except('foto'));

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            // usar exactamente el nombre original que eligió el usuario
            $name = $file->getClientOriginalName();
            $path = $file->storeAs('public/barcos', $name);
            $barco->foto = Storage::url($path);
        }

        $barco->save();

        return redirect()->route('barcos')->with('success', 'Barco creado correctamente.');
    }

    public function ecologicos()
    {
        $barcos = barcos::whereIn('tipo_combustible', ['HIBRIDO', 'SOLAR'])->get();
        return view('landing.barcos', compact('barcos'));
    }

    public function eliminar(Barcos $barco)
    {
        $barco->delete();
        return redirect()->route('barcos')->with('success', 'Barco eliminado correctamente.');
    }

    public function update(Barcos $barco)
    {
        $barco->increment('capacidad_pasajeros', 10);
        return redirect()->route('barcos')->with('success', 'Barco actualizado correctamente.');
    }

    public function redirect()
    {
        $barcos = barcos::all();
        return view('landing.barcos', ['barcos' => $barcos]);
    }
}
