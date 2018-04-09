<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FinanceiroController extends Controller
{
    public function index()
    {
    	return view("admin.financeiro");
    }

    public function relatorio()
    {
    	return view("admin.financeiroRelatorio");
    }

	public function nota($uid)
	{
		return view("admin.financeiroNota", compact('uid'));
	}    

	public function pagar($uid)
	{
		return view("admin.financeiroPagar", compact('uid'));
	}    

}
