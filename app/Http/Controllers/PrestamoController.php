<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function prestamo_create()
    {
        //
        return view ('prestamos.create');


        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function prestamo_guarda(Request $request)
    {
        //
        $validatedData = $request->validate([
            'monto' => 'required|numeric',
            'tasa_interes' => 'required|numeric',
            'plazo' => 'required|integer',
        ]);

        // Calcular la cuota
    $monto = $request->input('monto');
    $tasaInteres = $request->input('tasa_interes');
    $plazo = $request->input('plazo');
    
    $cuota = $monto * ($tasaInteres / 1200) / (1 - pow((1 + ($tasaInteres / 1200)), -$plazo * 12));
           

    // Guardar el registro 
    $prestamo = new prestamo();
    $prestamo->Id = uniqid(); // Genera un ID único para el préstamo
    $prestamo->Cuota = $cuota;
    $prestamo->Monto = $monto;
    $prestamo->Tasa_de_interes = $tasaInteres;
    $prestamo->Plazo = $plazo;
    $prestamo->save();


    return redirect()->route('prestamo.create')->with('success', 'Préstamo creado exitosamente.');

    }
    

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function show(Prestamo $prestamo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestamo $prestamo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestamo $prestamo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestamo $prestamo)
    {
        //
    }
}
