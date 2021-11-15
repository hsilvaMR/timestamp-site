<?php

namespace App\Http\Controllers\plataforma;

use App\Http\Controllers\Controller;
use App\Models\Utilizador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LoginPFM_Controller extends Controller
{

    //$utilizador = new Utilizador;
    private $utilizador;

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
    public function validation(Request $request)
    {

        $email = trim($request->fmail);
        $password = trim($request->fpassword);
        $response = [];

        if (empty($email)) {

            $this->response['fields'] = 'Campo endereço de email vazio.';
            return json_encode($response, true);
        }
        if (empty($password)) {

            $this->response['fields'] = 'Campo password vazio.';
            return json_encode($response, true);
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $this->response['fields'] = 'E-mail inválido.';
            return json_encode($response, true);
        }
        if (empty($password)) {

            $this->response['fields'] = 'Campo palavra-passe vazio.';
            return json_encode($response, true);
        }

        //$user = \DB::table('time_clients')->where('email', $email)->first();
        $user = DB::table('utilizadors')->where('email', $email)->get();

        if (isset($user->email) && empty($user->email) == false) {

            if (strcmp($password, $user->senha) == 0) {

                $this->response['mensagem'] = 'success';
                return json_encode($response, true);
            } else {

                $this->response['mensagem'] = 'Senha Inválido';
                return json_encode($response, true);
            }
        }
        $error = 'Utilizador Inválido';
        return ($error);
    }

    public function registarUtilizador(Request $request)
    {

        $nome = trim($request->email);
        $apelido = trim($request->password);
        $email = trim($request->email);
        $password = trim($request->password);


        // $utilizador = \DB::table('time_clients')->where('email', $email)->first();

        return view('plataforma/pages/homePFM');
    }

    public function validation_v1(Request $request)
    {

        $this->utilizador = new  Utilizador;
        $email = trim($request->fmail);
        $password = trim($request->fpassword);
        $user = "";
        $response = "";


        if (!empty($email)  && !empty($password)) {

            $user = $this->utilizador->email->where('email', $email)->get();
            if (!$user->empty()) {

                $user = $this->utilizador->email->where('senha', $password)->get();

                if (strcmp($user, $password) == 0) {

                    $response = "sucess";
                    // echo  $this->response;
                }

                $response = "invalidPass";
                // echo  $this->response;
            }
            $response = "invalidUser";
        } else {
            $response = "emptyField";
        }
        //echo  $response;
        return $response;

        // else {

        //     $this->response = "campos vazios !";
        //     echo  $this->response;
        // }

        // return $response;
    }
}
