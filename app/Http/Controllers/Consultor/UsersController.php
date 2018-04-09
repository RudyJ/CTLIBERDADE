<?php

namespace App\Http\Controllers\Consultor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function profile()
    {
        return view('consultor.profile');
    }
    public function resetPassword()
    {
        return view('consultor.resetPassword');
    }
}
