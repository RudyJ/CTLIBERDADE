<?php

namespace App\Http\Controllers\Consultor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
   
    public function __construct()
    {
        $this->middleware(['auth', 'permissao:consultor']);
    }


    public function index()
    {
        return view('consultor.home');
    }

    public function tutorial()
    {
        return view('consultor.tutorial');
    }

    public function duvidas()
    {
        return view('consultor.duvidas');
    }
    
    public function bugs()
    {
        return view('consultor.bugs');
    }


}
