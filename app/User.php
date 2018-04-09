<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setUserPic($pic = null)
    {
        if($pic){
            return $pic;
        }else{
            return "storage/images/no-pic.png";
        }
    }

    public function setShortName($name = null)
    {
        $exp = explode(" ", $name);
        $retorno = $exp[0];
        if(count($exp[1]) <= 2):
            $dois = isset($exp[1]) ? $exp[1] : " ";
            $tres = isset($exp[2]) ? $exp[2] : " ";
            $retorno .= " ".$dois." ".$tres;
        else:
            $dois = isset($exp[1]) ? $exp[1] : " ";
            $retorno .= " ".$dois;
        endif;
        return $retorno;
    }

    public function setNivel($nivel = null)
    {
        $niveis = [
            "A" => "Administrador",
            "C" => "Consultor",
            "F" => "Filiado"
        ];

        if(!$nivel)
            return $niveis;

        return $niveis[$nivel];

    }

    public function setStatus($status = null)
    {
        $niveis = [
            "A" => "Ativo",
            "B" => "Bloqueado",
            "P" => "Pendente"
        ];

        if(!$status)
            return $niveis;

        return $niveis[$status];

    }

    /* Usuários */
    public function getAllUsers()
    {
        return $this->where('nivel', '!=', 'F')->get();
    }
    public function getUser($uid)
    {
        return $this->where('public_key', $uid)->get();
    }


}
