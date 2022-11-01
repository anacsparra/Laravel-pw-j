<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClienteModel;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = ClienteModel::all();
        return view('cliente',compact('cliente'));
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
        $Cliente = new ClienteModel();
        $Cliente -> nome = $request->txNome;
        $Cliente -> dtNasc = $request->txData;
        $Cliente -> estadoCivil = $request->txCiv;
        $Cliente -> endereco = $request->txEnd;
        $Cliente -> numero = $request->txNum;
        $Cliente -> complemento = $request->txCom;
        $Cliente -> cep = $request->txCEP;
        $Cliente -> cidade = $request->txCid;
        $Cliente -> estado = $request->txEst;
        $Cliente -> Rg = $request->txRG;
        $Cliente -> cpf = $request->txCPF;
        $Cliente -> email = $request->txEmail;
        $Cliente -> fone = $request->txTel;
        $Cliente -> celular = $request->txCel;
        $Cliente -> save();
        
        return redirect("/cliente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $Cliente = ClienteModel::find($id);
        $title = "Editar Cliente- {$Cliente->cliente}";
        return view ('Cliente-editar',compact('title', 'Cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $cliente = ClienteModel::find($id);
        $cliente->update(['cliente'=>$request->txCliente]);
        return redirect()->action('App\Http\Controlers\ClienteController@exibirCliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ClienteModel::where('idCliente',$id)->delete();
        
        return redirect("/cliente");
    }
}
