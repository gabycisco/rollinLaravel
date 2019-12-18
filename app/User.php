<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'password','surname','avatar','provincias'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getImageAttribute(){
        return $this->avatar;
    }
  //  public function cart(){
    //  return $this->belongsTo("App\Cart","user_id",);
  //  }
  public function carrito() {
      return $this->belongsTo("App\Cart","id");
  }
  //public function carts(){
  //    return $this->hasMany("App\Cart","user_id");
  //}
}
