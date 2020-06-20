<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {

    	$contatos = [
    		(object)["nome"=>"Maria","tel"=>"16 98144-9999"],
    		(object)["nome"=>"Pedro","tel"=>"99 98275-2222"]
    	]; 
    	return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req)
    {
    	dd($req->all());
    	return "Esse é o Criar do ContatoController";
    }

    public function editar()
    {
    	return "Esse é o Editar do ContatoController";
    }
}
