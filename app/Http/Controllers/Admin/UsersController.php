<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class UsersController extends Controller
{
    public function index(User $user)
    {
        $usuarios = $user->getAllUsers();
        //$user    = $user->setNivel();        
        return view('admin.users', compact('usuarios', 'user'));
    }
    public function profile(User $user)
    {
        $me = [
            "nome"  =>  $user->setShortName(auth()->user()->name),
            "email"  =>  auth()->user()->email,
            "image"  =>  auth()->user()->image,
            "facebook"  =>  auth()->user()->facebook,
            "twitter"  =>  auth()->user()->twitter,
            "whatsapp"  =>  auth()->user()->whatsapp,
            "nivel"  =>  $user->setNivel(auth()->user()->nivel),
            "foto"  => $user->setUserPic(auth()->user()->foto),
            "public_key"  =>  auth()->user()->public_key,
            "status"  =>  auth()->user()->status 
        ];
        return view('admin.profile', compact('me'));
    }

    public function detalhes($uid, User $user)
    {
        $pegar = $user->getUser($uid);
        $foto = $user->setUserPic($pegar[0]['image']);
        return view('admin.usersDetalhes', compact('pegar', 'user', 'foto'));
    }

    public function profileEditar(User $user)
    {
        $me = [
            "nome"  =>  auth()->user()->name,
            "email"  =>  auth()->user()->email,
            "image"  =>  auth()->user()->image,
            "facebook"  =>  auth()->user()->facebook,
            "twitter"  =>  auth()->user()->twitter,
            "whatsapp"  =>  auth()->user()->whatsapp,
            "nivel"  =>  auth()->user()->nivel,
            "foto"  => $user->setUserPic(auth()->user()->foto),
            "public_key"  =>  auth()->user()->public_key,
            "status"  =>  auth()->user()->status 
        ];
        return view('admin.editProfile', compact('me'));
    }
    public function resetPassword()
    {
        return view('admin.resetPassword');
    }
    public function logs()
    {
        return view('admin.usersLogs');
    }
    public function cadastrar()
    {
        return view('admin.usersCadastrar');
    }
}
