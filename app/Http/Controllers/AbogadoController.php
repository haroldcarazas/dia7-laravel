<?php

namespace App\Http\Controllers;

use App\Models\Abogado;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AbogadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('abogados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "dni" => "required|min:6",
                "nombre" => "required|min:3",
                "direccion" => "required|min:3",
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $abogado = new Abogado();
            $abogado->dni = $request->dni;
            $abogado->nombre = $request->nombre;
            $abogado->direccion = $request->direccion;
            $abogado->save();

            return redirect()->route('abogados-create')->with('success', 'Abogado creado correctamente');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Abogado $abogado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Abogado $abogado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Abogado $abogado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Abogado $abogado)
    {
        //
    }
}
