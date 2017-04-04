<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Items;
class Famous_Person extends Model
{
    //
    protected $table = 'Famous_Person';
    public $timestamps = false;
    protected $fillable = ['desc'];

    public function User()
    {
        return $this->hasOne('App\User');
    }

    public function Items()
    {
        return $this->hasMany('App\Items');
    }
}
