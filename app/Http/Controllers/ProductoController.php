<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
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
        $productos=new Producto();
        $productos->nombre_producto=$request->nombre;
        $productos->precio_compra=$request->precio;
        $productos->descripcion=$request->descripcion;
        $productos->estado=$request->estado;
        $productos->stock=$request->stock;
        $productos->save();
        return redirect()->route('productos.index');
    }
    public function Preate()
    { //abrir formulario para un nuevo registro
        return view('productos.create');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(producto $producto)
    { // visualizar un solo registro de BD
        return view('productos.show');
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

    public function edit(producto $producto)
    { // Abrir un formualrio para Edicion de un registro BD
        return view('producto.edit', compact('producto'));
    }

    public function update(Request $request, producto $producto)
    { //Actualizar el regsitro en el BD

        $request->validate(
            [
                'nombre' => 'required',
                'precio' => 'required',
                'categoria' => 'required',
                'stock' => 'required'
            ]
        );

        $producto->update($request->all());
        return redirect()->route('producto.edit', $producto)->with('mensaje', 'productos Actualizado');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(producto $producto)
    { // Eliminar un registro BD

        $producto->delete();
        return redirect()->route('producto.index')->with('mensaje', 'productos Eliminado');
    }
}
