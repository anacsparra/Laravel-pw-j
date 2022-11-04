<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdutoModel;


class ProdutoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produto = ProdutoModel::all();
        return view('produto',compact('produto'));
    }

    public function index1(){
        /*busca de produtos*/
        $search = request('search');
        if($search) {
            $produto = ProdutoModel::where([['produto', 'like', '%'.$search.'%']])->get();
        } 
    
        else {
            $produto = ProdutoModel::all();
        }        
        return view('produto',['produto' => $produto, 'search' => $search]);
            }


   /* public function index2(){
        
        $searchi = request('searchi');
        $searchf = request('searchf');
        if($searchi && $searchf){
            $produto = ProdutoModel::where('valor', '>', $searchi)->get();
            $produto = ProdutoModel::where('valor', '<', $searchf)->get();
        } 
        else {
            $produto = ProdutoModel::all();
        }        
        return view('produto',['produto' => $produto, 'searchi' => $searchi, 'searchf' => $searchf]);
            } */

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new ProdutoModel();
        $produto -> idProduto = $request->txIdProduto;
        $produto -> produto = $request->txProduto;
        $produto -> valor = $request->txValor;
        /* $produto->items = $request->items; */
        $produto -> save();
        
        return redirect("/produto");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.show', ['Produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $Produto = ProdutoModel::find($id);
        $title = "Editar Produto- {$Produto->produto}";
        return view ('Produto-editar',compact('title', 'Produto'));
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
        $produto = ProdutoModel::find($id);
        $produto->update(['idCategoria'=>$request->txIdCategoria]);
        $produto->update(['produto'=>$request->txProduto]);
        $produto->update(['valor'=>$request->txValor]);

        return redirect('/produto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProdutoModel::where('idProduto',$id)->delete();

        return redirect("/produto");
    }
}
