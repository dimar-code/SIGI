<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Compra;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = Compra::all();
        return view('compras.index', compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $compras=new Compra();
        $compras -> fecha=$request->fecha;
        $compras -> cantidad=$request->cantidad;
        $compras -> precio=$request->precio;
        $compras -> descripcion=$request->descripcion;
        $compras->save();
        return redirect()->route('compras.index');
    }
    public function Preate()
    { //abrir formulario para un nuevo registro
        return view('compras.create');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(compra $compras)
    {
        return view('compras.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(compra $compra)
    {
        return view('compras.edit', compact('compra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $compra = Compra::find($id);
        $compra -> fecha=$request->fecha;
        $compra -> cantidad=$request->cantidad;
        $compra -> precio=$request->precio;
        $compra -> descripcion=$request->descripcion;
        $compra -> Save();
        return redirect()->route('compras.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $compra= Compra::find($id);
        $compra->delete();
        return back();
    }
}
