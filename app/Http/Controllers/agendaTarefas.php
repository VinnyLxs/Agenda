<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agendaTarefasModel;//Importar a classe que eu quero utilizar

class agendaTarefas extends Controller
{
    public function anotacao (){
        $dados = agendaTarefasModel::all();

        return view('paginas.agenda') ->With('dados',$dados);

    }//fim do metodo index

    public function agenda(){
        
        return view('paginas.agenda'); 

    }//fim do metodo index

    public function tarefa(Request $request){
        $agendaTarefas = $request->input('tarefa');
        $data = $request->input('data');

        $model = new agendaTarefasModel();
        $model-> tarefas = $agendaTarefas;
        $model-> data = $data;
        $model-> save();//Armazenar dados 

        return redirect('/home');
    } 
}