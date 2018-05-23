<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use TCG\Voyager\Traits\Resizable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;
    use Resizable;

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

     /* Mette in relazione tanti post con un utente tramite l'id */
     public function posts(){
        return $this->hasMany(Post::class,'id');
      }
}
