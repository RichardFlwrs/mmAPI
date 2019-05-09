<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const USUARIO_VERFICADO = '1';
    const USUARIO_NO_VERFICADO = '0';


    protected $fillable = [
        'name', 'email', 'password', 'verified', 'verification_token',
        'owner', 'phone', 'active',
        'birthdayDate', 'puesto', 'direccion', 'role_id'
    ];

    protected $hidden = [
        'password', 'remember_token', 'verification_token', 'password', 'active'
    ];

    public function esVerificado() {

        return $this->verified == User::USUARIO_VERFICADO;

    }


    public static function generarVerificationToken() {

        return str_random(40);

    }

}
