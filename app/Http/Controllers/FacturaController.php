<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Factura;

class FacturaController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $factura = Factura::all();
        return view('facturas.index', compact('factura'));
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facturas.create');
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
        $factura=new Factura();
        $factura->fecha_factura=$request->fecha_factura;
        $factura->precio_unitario=$request->precio_unitario;
        $factura->cantidad_producto=$request->cantidad_producto;
        $factura->total=$request->total;
        $factura->descripcion=$request->descripcion;
        $factura->save();
        return redirect()->route('facturas.index');
    }
    public function Preate()
    { //abrir formulario para un nuevo registro
        return view('facturas.create');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Factura $factura)
    { // visualizar un solo registro de BD
        return view('Factura.show');
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

    public function edit(factura $factura)
    { // Abrir un formualrio para Edicion de un registro BD
        return view('factura.edit', compact('factura'));
    }

    public function update(Request $request, factura $factura)
    { //Actualizar el regsitro en el BD

        $request->validate(
            [
                'fecha_factura' => 'required',
                'precio_unitario' => 'required',
                'cantidad' => 'required',
                'total' => 'required',
                'descripcion' => 'descripcion',
            ]
        );

        $factura->update($request->all());
        return redirect()->route('factura$facturas.edit', $factura)->with('mensaje', 'factura Actualizada');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factura $factura)
    { // Eliminar un registro BD

        $factura->delete();
        return redirect()->route('$facturas.index')->with('mensaje', 'factura Eliminada');
    }
}
