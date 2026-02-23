<?php

namespace App\Http\Controllers;

use App\Models\trayectos;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function trayectos()
    {
        $trayectos = trayectos::all(); // devuelve todos los servicios del modelo services.
        return view('landing.trayectos', ['trayectos' => $trayectos]);
        //return view('landing.services', compact('$servicios')); // sintaxis simplificada hace lo mismo que la anterior
    }

    public function barcos()
    {
        return view('landing.barcos');
    }

    public function contact()
    {
        return view('landing.contact');
    }
}
