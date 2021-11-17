<?php

namespace App\Http\Controllers\plataforma;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Utilitario;
use App\Models\Utilizador;
use App\Models\LogAcesso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;



class LoginPFM_Controller extends Controller
{

    //$utilizador = new Utilizador;
    private $utilizador;
    private $utilitario;
    private $logiAcesso;
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

    public function registarUtilizador(Request $request)
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

    public function session(Request $request)
    {

        //$this->dados['cokie'] = Cookie::get('name_user');

        $name = Cookie::get('name_user');
        $email = Cookie::get('email_user');
        $password = Cookie::get('pass_user');
        $id_user =  Cookie::get('id_user');
        $response = "";

        if (!empty($email) && !empty($password) || !empty($password)  || !empty($id_user)) {

            $response = "sucess";
            return  $response;
        } else {
            self::login($request);
        }
    }

    public function login(Request $request)
    {
        $this->utilizador = new  Utilizador;
        $email = trim($request->femail);
        $password = trim($request->fpassword);
        $response = "";

        // $test = $request->get("femail");

        if (!empty($email)  && !empty($password)) {

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                $user = $this->utilizador->where('email', $email)->first();
                if (!empty($user->email) || !empty($user->senha)) {

                    if (Hash::check($password, $user->senha)) {
                        self::setSession($request, $user);
                        self::setCookie($user);
                        $response = "sucess";
                        self::addLogAcesso($request, $user->id);
                        // self::createDateOAL()
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
    public function logout(Request $request)
    {

        //session_start();
        // Auth::logout();
        //  $request->session()->flush();
        $request->session()->forget(['nome', 'email']);
        if (!$request->session()->has('nome') && !$request->session()->has('email')) {
            return redirect()->route('box-login');
        }

        //return redirect()->route('box-login');

        // $value = $request->session()->pull('key', 'default');

    }

    // without ajax 
    public function login_v2(Request $request)
    {

        // $this->utilizador = new  Utilizador;
        //  $email = trim($request->femail);
        // $password = trim($request->fpassword);

        // $user = $this->utilizador->where('email', $email)
        // ->where('senha', $password)
        // ->get()
        // ->first();

        // regras de validação
        $regras = [
            'femail' => 'email',
            'fpassword' => 'required'
        ];

        // mensagem feedback
        $mensagem = [
            'femail.email' => "campo e-mail de preenchimento Obrigátorio",
            'fpassword.required' => "campo password de preenchimento Obrigátorio"
        ];
        $request->validate($regras, $mensagem);
        print_r($request->all());
    }

    public function addLogAcesso(Request $request, $user_id)
    {
        $this->logiAcesso = new LogAcesso;
        $this->utilitario = new  Utilitario;


        $this->utilitario->getCurrentDataTime();
        //  $timezone = Carbon::now(get_local_time());

        $this->logiAcesso->insert(
            [
                'utilizadors_id' => $user_id,
                'data' =>  $this->utilitario->getCurrentDataTime(),
                'duracao' =>  "1",
                'ip' => trim($request->server->get('REMOTE_ADDR')),
                'browser' => trim($request->server->get('HTTP_SEC_CH_UA')),
                'sistemaOperativo' => trim($request->server->get('HTTP_SEC_CH_UA_PLATFORM')),
                'local' =>  $request->getLocale()
            ]
        );
    }

    public  function  setCookie($user)
    {
        Cookie::queue(Cookie::make('name_user', $user->nome, 43200));
        Cookie::queue(Cookie::make('apelido_user', $user->apelido, 43200));
        Cookie::queue(Cookie::make('email_user', $user->email, 43200));
        Cookie::queue(Cookie::make('pass_user', $user->senha, 43200));
        Cookie::queue(Cookie::make('id_user', $user->id, 43200));
    }

    public function setSession(Request $request, $user)
    {

        $request->session()->put('nome', $user->nome);
        $request->session()->put('email', $user->email);
        //session_start();
        // $_SESSION['nome'] = $user->nome;
        // $_SESSION['email'] = $user->email;
    }
}
