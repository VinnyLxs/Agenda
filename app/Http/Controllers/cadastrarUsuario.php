<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrarUsuarioModel;//Importar a classe que eu quero utilizar

class cadastrarUsuario extends Controller
{
    public function index(){
        $dados = cadastrarUsuarioModel::all();

        return view('paginas.cadastrar') ->With('dados',$dados);

    }//fim do metodo index

    public function store(Request $request){
        $cadastrarUsuario = $request->input('cadastrar');
        $senhaUsuario = $request->input('senha');

        $model = new cadastrarUsuarioModel();
        $model-> cadastrar = $cadastrarUsuario;
        $model-> senha = $senhaUsuario;
        $model-> save();//Armazenar dados 

        return redirect('/cadastrar');
    } 
}
