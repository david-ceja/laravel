<?php

namespace App\Http\Controllers;

use App\Models\Empelado;
use Illuminate\Http\Request;

class EmpeladoController extends Controller
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
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empelado  $empelado
     * @return \Illuminate\Http\Response
     */
    public function show(Empelado $empelado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empelado  $empelado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empelado $empelado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empelado  $empelado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empelado $empelado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empelado  $empelado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empelado $empelado)
    {
        //
    }
}
