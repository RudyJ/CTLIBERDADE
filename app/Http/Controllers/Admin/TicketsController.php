<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketsController extends Controller
{
    public function index()
    {
    	return view("admin.tickets");
    }

    public function relatorio()
    {
    	return view("admin.ticketsRelatorio");
    }

    public function detalhes()
    {
    	return view("admin.ticketsDetalhes");    	
    }
}
