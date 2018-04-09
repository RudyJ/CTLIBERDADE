<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
    	return view("admin.tickets");
    }

    public function relatorio()
    {
    	return view("admin.ticketsRelatorio");
    }
}
