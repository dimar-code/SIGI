<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Venta;

class VentaController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $ventas = Venta::all();
        return view('ventas.index', compact('ventas'));
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ventas.create');
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
        $ventas=new Venta();
        $ventas->fecha_venta=$request->fecha_venta;
        $ventas->cantidad_producto=$request->cantidad_producto;
        $ventas->total_venta=$request->total_venta;
        $ventas->descripcion=$request->descripcion;
        $ventas->save();
        return redirect()->route('ventas.index');
    }
    public function Preate()
    { //abrir formulario para un nuevo registro
        return view('ventas.create');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Venta $ventas)
    { // visualizar un solo registro de BD
        return view('Ventas.show');
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

    public function edit(Venta $ventas)
    { // Abrir un formualrio para Edicion de un registro BD
        return view('$ventas.edit', compact('$ventas'));
    }

    public function update(Request $request, Venta $ventas)
    { //Actualizar el regsitro en el BD

        $request->validate(
            [
                'fecha_venta' => 'required',
                'cantidad_producto' => 'required',
                'total_venta' => 'required',
                'descripcion' => 'required'
            ]
        );

        $ventas->update($request->all());
        return redirect()->route('$ventas.edit', $ventas)->with('mensaje', 'Venta Actualizada');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $ventas)
    { // Eliminar un registro BD

        $ventas->delete();
        return redirect()->route('ventas.index')->with('mensaje', 'venta Eliminada');
    }
}
