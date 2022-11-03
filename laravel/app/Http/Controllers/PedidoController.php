<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PedidoModel;


class PedidoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedido = PedidoModel::all();
        return view('pedido',compact('pedido'));
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
        $pedido = new PedidoModel();
        $pedido -> idCategoria = $request->txIdCategoria;
        $pedido -> idProduto = $request->txProduto;
        $pedido -> valor_t = $request->txValor;
        $pedido -> save();
        
        return redirect("/pedido");
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
    {   $Pedido = PedidoModel::find($id);
        $title = "Editar Pedido- {$Pedido->pedido}";
        return view ('Pedido-editar',compact('title', 'Pedido'));
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
        $pedido = PedidoModel::find($id);
        $pedido->update(['pedido'=>$request->txPedido]);
        return redirect('/pedido');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PedidoModel::where('idPedido',$id)->delete();

        return redirect("/pedido");
    }
}
