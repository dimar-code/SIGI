<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Traslado;

class TrasladoController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $traslado = traslado::all();
        return view('traslados.index', compact('traslado'));
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('traslados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    { //guardar BD los Registro
        $traslado=new traslado();
        $traslado->fecha_traslado=$request->fecha;
        $traslado->precio_traslado=$request->precio;
        $traslado->direccion_traslado=$request->direccion;
        $traslado->descripcion=$request->descripcion;
        $traslado->save();
        return redirect()->route('traslado.index');
    }
    public function Preate()
    { //abrir formulario para un nuevo registro
        return view('traslados.create');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(traslado $traslado)
    { // visualizar un solo registro de BD
        return view('traslado.show');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(traslado $traslado)
    { // Abrir un formualrio para Edicion de un registro BD
        return view('traslado.edit', compact('traslado'));
    }

    public function update(Request $request, traslado $traslado)
    { //Actualizar el regsitro en el BD

        $request->validate(
            [
                'fecha_traslado' => 'required',
                'precio_traslado' => 'required',
                'direccion_traslado' => 'required',
                'descripcion' => 'required'
            ]
        );

        $traslado->update($request->all());
        return redirect()->route('traslado.edit', $traslado)->with('mensaje', 'Traslado Actualizado');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(traslado $traslado)
    { // Eliminar un registro BD

        $traslado->delete();
        return redirect()->route('traslado.index')->with('mensaje', 'traslado Eliminado');
    }
}
