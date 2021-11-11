<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;


class HomeController extends Controller
{

    ///private $dados = [];

    public function index()
    {
        //  $this->$dados['title'] = "test-Home";

        $query = DB::table('test')->select('nome')->get();

        return view('site/pages/home', ['title' => $query]);


        //$this->dados['headTitulo']=trans('metatags.siteTitulo').trans('metatags.homeTitulo'); "trans('homeWords.titulo');";

        // return view('site/pages/home', ['title' => 'title-Home']);
        //return view('site/pages/home', $this->dados);
    }
}
