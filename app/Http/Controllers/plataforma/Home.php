<?php

namespace App\Http\Controllers\plataforma;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class Home extends Controller
{
    private $dados = [];

    public function index()
    {
        $this->dados['CK_name'] = Cookie::get('name_user');
        $this->dados['CK_apelido'] = Cookie::get('apelido_user');
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
