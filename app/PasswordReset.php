<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PasswordReset extends Authenticatable
{
    use Notifiable;
    protected $table_name = "password_resets";
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
