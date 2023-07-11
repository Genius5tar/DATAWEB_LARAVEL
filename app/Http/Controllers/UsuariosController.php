<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Usuarios=Usuario::all();
        return view('Usuarios.index',compact('Usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario;
        $usuario->username=$request->input('username');
        $usuario->nombre=$request->input('nombre');
        $usuario->documento=$request->input('documento');
        $usuario->password=$request->input('password');
        $usuario->user_type=$request->input('user_type');
        $usuario->save();
        return redirect()->route('Usuarios.index');


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
        $usuarios=Usuario::findOrFail($id);
        return view('Usuarios.edit', compact('usuarios'));
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
        $edtusuario = Usuario::findOrFail($id);
        $edtusuario->username=$request->input('username');
        $edtusuario->nombre=$request->input('nombre');
        $edtusuario->documento=$request->input('documento');
        $edtusuario->password=$request->input('password');
        $edtusuario->user_type=$request->input('user_type');
        $edtusuario->save();
        return redirect()->route('Usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dltUsuarios=Usuario::findOrFail($id);
        $dltUsuarios->delete();
        return redirect()->route('Usuarios.index');
    }
    
}
