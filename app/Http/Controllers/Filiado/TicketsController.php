<?php

namespace App\Http\Controllers\Filiado;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth', 'permissao:filiado']);
    }


    public function index()
    {
        return view('filiado.tickets');
    }

    public function criar()
    {
        return view('filiado.ticketsCriar');
    }
}
