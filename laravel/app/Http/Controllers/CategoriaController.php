<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriaModel;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = CategoriaModel::all();
        return view('categoria',compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Categoria = new CategoriaModel();
        $Categoria -> categoria = $request->txCategoria;
        $Categoria -> save();
        
        return redirect("/categoria");
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
        $Categoria = CategoriaModel::find($id);
        $title = "Editar Categoria- {$Categoria->categoria}";
        return view ('Categoria-editar',compact('title', 'Categoria'));
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
        $categoria = CategoriaModel::find($id);
        $categoria->update(['categoria'=>$request->txCategoria]);
        return redirect('/categoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CategoriaModel::where('idCategoria',$id)->delete();

        return redirect("/categoria");
    }
}

