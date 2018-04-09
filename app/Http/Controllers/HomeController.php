<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    
    public function conectar(Request $request)
    {   

        switch(auth()->user()->nivel)
        {
            case "A":
                return redirect(route('admin.home'));
            break;
            case "C":
                return redirect(route('consultor.home'));
            break;
            case "F":
                return redirect(route('filiado.home'));
            break;
        }

        //dd($request);
    }
}
