<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\NGO;
use App\Items_Transaction;
class Bank_Account extends Model
{
    //
    protected $table = 'Bank_Account';
    public $timestamps = false;
    protected $fillable = ['name'];

    public function NGO()
    {
        return $this->hasMany('App\NGO');
    }

    public function Items_Transaction()
    {
        return $this->hasMany('App\Items_Transaction');
    }
}
