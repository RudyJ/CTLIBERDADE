<?php

namespace App\Http\Controllers\Filiado;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
   
    public function __construct()
    {
        $this->middleware(['auth', 'permissao:filiado']);
    }


    public function index()
    {
        return view('filiado.home');
    }
    
    public function bugs()
    {
        return view('filiado.bugs');
    }
    
    public function contrato()
    {
        return view('filiado.contrato');
    }

}
