<?php

namespace App\Http\Controllers\plataforma;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class Home extends Controller
{
    private $dados = [];

    public function index()
    {

        if (Session::get("email") != null  && Session::get("nome") != null) {

            $this->dados['CK_name'] = Cookie::get('name_user');
            $this->dados['CK_apelido'] = Cookie::get('apelido_user');
            return view('plataforma.pages.platform', ['title' => 'dashboard'], $this->dados);
        }
        else {
            return redirect()->route('box-login');
        }
    }


    public function testDataBase()
    {

        //$client = \DB::table('time_clients')->where('email', $email)->first();
        // $users = DB::table('utilizadores')
        //     ->select('Nome', 'tTipo')
        //     ->get();
    }
}
