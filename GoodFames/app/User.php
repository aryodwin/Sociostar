<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Login;
use App\Famous_Person;
use App\Items_Transaction;
class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'Username';
    public $timestamps = false;
    protected $fillable = ['name','address','phone','email','birthday','gender','register_at'];

    public function Login()
    {
        return $this->hasOne('App\Login');
    }

    public function Famous_Person()
    {
        return $this->hasOne('App\Famous_Person');
    }

    public function NGO()
    {
        return $this->hasOne('App\NGO');
    }

    public function Customer_Items()
    {
        return $this->hasMany('App\Items_Transaction');
    }

    public function NGO_Items()
    {
        return $this->hasMany('App\Items_Transaction');
    }

    public function Famous_Person_Items()
    {
        return $this->hasMany('App\Items_Transaction');
    }
}
