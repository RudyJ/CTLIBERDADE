<?php

namespace App\Http\Controllers\Filiado;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    
    public function profile()
    {
        return view('filiado.profile');
    }
    public function resetPassword()
    {
        return view('filiado.resetPassword');
    }

}
