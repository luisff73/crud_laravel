<?php

namespace App\Http\Controllers;

use App\Models\barcos;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BarcoController extends Controller
{
    public function barcos()
    {
        $barcos = barcos::all(); // devuelve todos los servicios del modelo services.   
        //return view('landing.barcos', ['barcos' => $barcos]); // sintaxis 1
        return view('landing.barcos', compact('barcos')); // sintaxis 2
    }
    public function ecologicos()
    {
        // si queremos usar sql puro (no recomendable segun la convencion de laravel).
        //$barcos = DB::select("SELECT * FROM barcos where tipo_combustible='HIBRIDO' or tipo_combustible='SOLAR'");
        // lo correcto seria..
        $barcos = barcos::whereIn('tipo_combustible', ['HIBRIDO', 'SOLAR'])->get();
        return view('landing.barcos', compact('barcos'));
    }


    public function create()
    {
        // creamos el usuario María utilizando el modelo
        $barcos = new barcos();
        $barcos->nombre = 'ANTARTIDA';
        $barcos->tipo_combustible = 'DIESEL';
        $barcos->capacidad_pasajeros = 20;
        $barcos->velocidad_maxima = 30;
        $barcos->foto = '/storage/barcos/barco3.jpg';
        $barcos->save();
        // redirigimos a la vista de listado de barcos
        $barcos = barcos::all(); // devuelve todos los servicios del modelo services.   
        return view('landing.barcos', ['barcos' => $barcos]);
    }

    public function eliminar(Barcos $barco)
    {
        $barco->delete();

        // Redirige al usuario a la lista de barcos con un mensaje de éxito.
        return redirect()->route('barcos')
            ->with('success', 'Barco eliminado correctamente.');
    }

    public function update(Barcos $barco)
    {
        //$barco = barcos::where('id', $barco->id)->update(['capacidad_pasajeros' => '250']);
        $barco->increment('capacidad_pasajeros', 10);
        return redirect()->route('barcos')
            ->with('success', 'Barco actualizado correctamente.');
    }

    public function redirect()
    {
        $barcos = barcos::all(); // devuelve todos los servicios del modelo services.   
        return view('landing.barcos', ['barcos' => $barcos]);
    }
}
