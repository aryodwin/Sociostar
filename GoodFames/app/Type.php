<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Login;
class Type extends Model
{
    //
    protected $table = 'Type';
    public $timestamps = false;
    protected $fillable = ['name'];

    public function Login()
    {
        return $this->hasMany('App\Login');
    }
}
