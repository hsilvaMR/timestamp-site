<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;


class HomeController extends Controller
{

    private $dados = [];

    public function index()
    {
        // $this->dados['headTitulo'] = 'Login-selos';

        $query = DB::table('tests')->select('nome')->get();
        $this->dados['name'] = $query;
        //$client = \DB::table('test')->where('nome', $email)->first();
        //$user_compra = \DB::table('time_compra')->where('id_cliente', $id_user)->get();

        return view('site/pages/home', ['title' => 'index'], $this->dados);

        //$this->dados['headTitulo']=trans('metatags.siteTitulo').trans('metatags.homeTitulo'); "trans('homeWords.titulo');";

        // return view('site/pages/home', ['title' => 'title-Home']);
        //return view('site/pages/home', $this->dados);
    }
}
