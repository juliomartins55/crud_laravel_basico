<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
    	//echo "Hello world do controller.";
    	//return view('usuarios');
    	return view('usuarios', [
    		'texto'=>'Lista de Usuários',
    		'checagem'=>false,
    		'usuarios'=>['Usuario 1', 'Usuário 2', 'Usuário 3', 'Usuário 4']
    	]);
    }
}
