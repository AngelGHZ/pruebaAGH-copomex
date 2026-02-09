<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Services\CopomexService;

class EstadoController extends Controller
{
    public function index()
    {
        $estados = Estado::orderBy('nombre')->get();
        return view('estados.index', compact('estados'));
    }

    public function municipios($id, CopomexService $copomex)
    {
        $estado = Estado::findOrFail($id);
        $municipios = $copomex->getMunicipiosPorEstado($estado->nombre);
        sort($municipios);

        return view('estados.municipios', compact('estado', 'municipios'));
    }
}