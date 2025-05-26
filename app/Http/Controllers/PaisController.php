<?php

namespace App\Http\Controllers;

use App\Models\Pais;

class PaisController extends Controller
{
    public function index()
    {
        $paises = Pais::all();
        return view('paises.index', compact('paises'));
    }

    public function show($id)
    {
        $pais = Pais::findOrFail($id);
        return view('paises.show', compact('pais'));
    }
}

