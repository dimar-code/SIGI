<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('rol_id', '<', 3)->get();
        return view('usuarios.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = Role::where('id', '<', 3)->get();
        return view('usuarios.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User();
        $users->nombre = strtoupper($request->nombre);
        $users->apellidos = strtoupper($request->apellidos);
        $users->rol_id = $request->rol_id;
        $users->direccion = strtoupper($request->direccion);
        $users->genero = strtoupper($request->genero);
        $users->telefono = strtoupper($request->telefono);
        $users->email = $request->email;
        $users->estado = strtoupper('activo');
        $users->password = $request->password;

        $users->save();

        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        $roles = Role::get();
        return view('usuarios.edit', compact('users$users$users', 'users'));
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
        $users = User::find($id);
        $users->nombre = strtoupper($request->nombres);
        $users->apellidos = strtoupper($request->apellidos);
        $users->direccion = strtoupper($request->direccion);
        $users->telefono = strtoupper($request->telefono);
        $users->genero = strtoupper($request->genero);
        $users->estado = strtoupper($request->estado);
        $users->email = $request->email;
        if ($request->password) {
            $users->password = $request->password;
        }
        $users->rol_id = $request->rol_id;
        $users->save();

        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
