<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

//use App\Htpp\Request;
use App\Http\Controllers\Controller;
use Redirect;

class ClientesController extends Controller
{
    public function index(){
    	
    	$clientes = Cliente::get();

    	return view('clientes.lista', ['clientes' => $clientes]);
    }
    
    public function novo(){
    	return view('clientes.formulario');
    }
    
    public function salvar(Request $request){
    	$cliente = new Cliente();

    	$cliente = $cliente->create($request->all());

    	\Session::flash('mensagem_sucesso', 'Cadastro Realizado com Sucesso!');

    	return Redirect::to('clientes/novo');
    }

    public function editar($id){
    	//$cliente = Cliente::find($id);
    	$cliente = Cliente::findOrFail($id);
    	return view('clientes.formulario', ['cliente' => $cliente]);
    }

    public function atualizar($id, Request $request){
    	$cliente = Cliente::findOrFail($id);

    	$cliente->update($request->all());

    	\Session::flash('mensagem_sucesso', 'Cliente Atualizado com Sucesso!');

    	return Redirect::to('clientes/'.$cliente->id.'/editar');
    }

    public function deletar($id, Request $request){
    	$cliente = Cliente::findOrFail($id);

    	$cliente->delete();

    	\Session::flash('mensagem_sucesso', 'Deletado com Sucesso!');

    	return Redirect::to('clientes');
    }

}
