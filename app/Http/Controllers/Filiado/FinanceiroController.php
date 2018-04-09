<?php

namespace App\Http\Controllers\Filiado;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FinanceiroController extends Controller
{
    public function index()
    {
    	return view("filiado.financeiro");
    }

}
