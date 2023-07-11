<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Articulo;

class articulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos=Articulo::all();
        return view('Articulos.index',compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Articulos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Newarticulo = new Articulo;
        $Newarticulo->cod=$request->input('codigo');
        $Newarticulo->cantidad=$request->input('cant');
        $Newarticulo->nombre=$request->input('nombre');
        $Newarticulo->marca=$request->input('marca');
        $Newarticulo->fabricante=$request->input('fabricante');
        $Newarticulo->p_venta=$request->input('p_venta');
        $Newarticulo->p_compra=$request->input('p_compra');
        $Newarticulo->save();
        return redirect()->route('Articulos.index');

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
        $articulo=Articulo::findOrFail($id);
        //return $cod;
        return view('Articulos.edit', compact('articulo'));
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
        $edtarticulo=Articulo::findOrFail($id);
        $edtarticulo->cantidad=$request->input('cant');
        $edtarticulo->nombre=$request->input('nombre');
        $edtarticulo->marca=$request->input('marca');
        $edtarticulo->fabricante=$request->input('fabricante');
        $edtarticulo->p_venta=$request->input('p_venta');
        $edtarticulo->p_compra=$request->input('p_compra');
        $edtarticulo->save();
        return redirect()->route('Articulos.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dltarticulo=Articulo::findOrFail($id);
        $dltarticulo->delete();
        return redirect()->route('Articulos.index');

    }
}
