<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //
    public function index()
      {
        return view('login.index');
      }

      public function entrar(Request $req)
      {

        $dados = $req->all();
        if(Auth::attempt(['email'=>$dados['email'], 'password'=>$dados['senha']]))
        {
          return redirect()->route('admin.cursos');
        }

        // This is in the PHP file and sends a Javascript alert to the client
        $message = "O usuário ou senha informados estão incorretos!";
        echo "<script type='text/javascript'>alert('$message');</script>";


        //return redirect()->route('site.login');
          return view('login.index');
      }

      public function sair()
      {
        Auth::logout();
          return redirect()->route('site.home');
      }
}
