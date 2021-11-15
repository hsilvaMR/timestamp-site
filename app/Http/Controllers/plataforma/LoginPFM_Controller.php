<?php

namespace App\Http\Controllers\plataforma;

use App\Http\Controllers\Controller;
use App\Models\Utilizador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;


class LoginPFM_Controller extends Controller
{

    //$utilizador = new Utilizador;
    private $utilizador;
    private $dados = [];

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

    public function registarUser(Request $request)
    {

        $nome = trim($request->fnome);
        $apelido = trim($request->fapelido);
        $email = trim($request->fmail);
        $password = trim($request->fpassword);
        $token = trim($request->_token);
        $response = "";
        // $termos = [ 'politicas'=> $request->password, 'desconto'=> $request->password ];
        $this->utilizador = new Utilizador;

        if (!empty($nome) || !empty($email) || !empty($apelido) || !empty($password)) {

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                $checkInsert = $this->utilizador->insert(

                    [
                        'nome' =>   $nome,
                        'apelido' => $apelido,
                        'email' =>  $email,
                        'senha' =>  Hash::make($password),
                        'acesso' => 1,
                        'token' => $token,
                    ]
                );

                if ($checkInsert != null) {

                    $response = "registado";
                    //$this->dados['register'] = "registado";
                }
            } else {
                $response = "invalid email";
            }
        } else {
            $response = "deve preencher todos campos";
        }
        return $response;
    }

    public function validation(Request $request)
    {
        $this->utilizador = new  Utilizador;
        $email = trim($request->femail);
        $password = trim($request->fpassword);
        $response = "";

        if (!empty($email)  && !empty($password)) {

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                $user = $this->utilizador->where('email', $email)->first();
                if (!empty($user->email)) {

                    if (strcmp($user->senha, $password) == 0) {

                        Cookie::queue(Cookie::make('nameUser', $user->nome, 43200));
                        $response = "sucess";
                    } else {
                        $response = "invalidPass";
                    }
                } else {
                    $response = "invalidUser";
                }
            } else {
                $response = "e-mail invalido";
            }
        } else {
            $response = "emptyField";
        }

        return $response;
    }
}
