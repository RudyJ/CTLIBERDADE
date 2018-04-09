<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth', 'permissao:admin']);
    }

    public function index()
    {
        return view('admin.home');
    }

    public function tutorial()
    {
        return view('admin.tutorial');
    }

    public function tutorialNovo()
    {
        return view('admin.tutorialNovo');
    }

    public function tutorialDetalhes($uid)
    {
        return view('admin.tutorialDetalhes', compact('uid'));
    }

    public function duvidas()
    {
        return view('admin.duvidas');
    }
    
    public function bugs()
    {
        return view('admin.bugs');
    }
}
