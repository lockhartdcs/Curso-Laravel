<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contato;

class ContatoController extends Controller
{
    //

    public function index()
      {
        $contatos = [
          ['nome' => 'Maria', 'tel'=> '123456'],
          ['nome' => 'José', 'tel'=> '654321'],
        ];

        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);


        return view('contato.index', compact('contatos'));
      }
    public function criar(Request $req)
      {
        dd($req->nome);
        return "Este é o criar do ContatoController";
      }
    public function editar(Request $req)
      {
        dd($req->nome);
        return "Este é o editar do ContatoController";
      }
}
