<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;
use App\User;
class Login extends Model
{
    //
    protected $table = 'Login';
    public $timestamps = false;
    protected $fillable = ['username','password','remember_token','type'];

    public function Type()
    {
        return $this->hasOne('App\Type');
    }

    public function User()
    {
        return $this->hasOne('App\User');
    }
}
