<?php

namespace App\Http\Controllers\plataforma;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginPFM_Controller extends Controller
{
    //

    public function index()
    {
        $this->dados['headTitulo'] = 'Login-selos';
        $this->dados['headDescricao'] = 'Login-selos';
        $this->dados['headPagina'] = 'Login';
        $this->dados['faceTipo'] = 'website';
        // return view('pages/timestamp/login', $this->dados);
        // return view('site/pages/home', ['title' => 'title-Home']);
    }

    // abrir box login 
    public function pageLogin()
    {

        /*$this->dados['headTitulo'] = 'Login-selos';
		$this->dados['headDescricao'] = 'Login-selos';
		$this->dados['headPagina'] = 'Login';
		$this->dados['faceTipo'] = 'website';*/


        //return view('pages/timestamp/login', $this->dados);
        return view('plataforma.pages.homePFM', ['title' => 'login']);
    }

    // validação de credenciais de acesso a plataforma
    public function validation()
    {



        return view('plataforma/pages/homePFM');
    }
}
