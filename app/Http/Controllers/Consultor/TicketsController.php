<?php

namespace App\Http\Controllers\Consultor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketsController extends Controller
{
    public function index()
    {
    	return view("consultor.tickets");
    }

}
