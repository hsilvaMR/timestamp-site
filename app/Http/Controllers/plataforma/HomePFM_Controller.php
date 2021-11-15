<?php

namespace App\Http\Controllers\plataforma;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class HomePFM_Controller extends Controller
{
    private $dados = [];

    public function index()
    {
        $this->dados['cokie'] = Cookie::get('nameUser');
        return view('plataforma.pages.platform', ['title' => 'dashboard'], $this->dados);
    }


    public function testDataBase()
    {

        //$client = \DB::table('time_clients')->where('email', $email)->first();
        // $users = DB::table('utilizadores')
        //     ->select('Nome', 'tTipo')
        //     ->get();
    }
}
