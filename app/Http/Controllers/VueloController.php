<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use Illuminate\Http\Request;

class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['vuelos']=Vuelo::paginate(9);
        return view('vuelo.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vuelo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = request()->except('_token');
        Vuelo::insert($datos);
        return redirect('vuelo')->with('mensaje','Vuelo agregado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function show(Vuelo $vuelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function edit($idVuelo)
    {
        $vuelo = Vuelo::findOrFail($idVuelo);
        return view('vuelo.edit', compact('vuelo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idVuelo)
    {
        $datos = request()->except(['_token', '_method']);
        Vuelo::where('id', '=', $idVuelo)->update($datos);
        return redirect('vuelo')->with('mensaje', 'Vuelo modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function destroy($idVuelo)
    {
        Vuelo::destroy($idVuelo);
        return redirect('vuelo')->with('mensaje','Vuelo eliminado correctamente');
    }
}
