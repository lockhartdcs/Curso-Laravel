<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dados = [
          'name' => "David",
          'email' => "dcsant.ti@gmail.com",
          'password' => bcrypt('123456')

        ];
        if(User::where('email', '=', $dados['email'])->count()){
          $usuario = User::where('email', '=', $dados['email'])->first();
          $usuario->update($dados);
          echo "Usuário alterado!";
        }else {
          User::create($dados);
          echo "Usuário criado!";
        }

    }
}
