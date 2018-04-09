<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FiliadosController extends Controller
{
    public function index()
    {
    	return view("admin.filiados");
    }
    public function novo()
    {
    	return view("admin.filiados-novo");
    }
}
