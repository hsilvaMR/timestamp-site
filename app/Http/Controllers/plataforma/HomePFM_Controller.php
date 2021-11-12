<?php

namespace App\Http\Controllers\plataforma;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePFM_Controller extends Controller
{
    public function index()
    {
        /*$this->dados['headTitulo'] = 'Login-selos';
        $this->dados['headDescricao'] = 'Login-selos';
        $this->dados['headPagina'] = 'Login';
        $this->dados['faceTipo'] = 'website';*/
        //return view('pages/timestamp/login', $this->dados);
        return view('plataforma.pages.platform', ['title' => 'dashboard']);
    }


    public function testDataBase()
    {

        //$client = \DB::table('time_clients')->where('email', $email)->first();
        $users = DB::table('utilizadores')
            ->select('Nome', 'tTipo')
            ->get();
    }
}
