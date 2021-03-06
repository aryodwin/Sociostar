<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Bank_Account;
use App\Items;
class NGO extends Model
{
    //
    protected $table = 'NGO';
    public $timestamps = false;
    protected $fillable = ['desc','id_bank','no_bank','bank_name'];

    public function User()
    {
        return $this->hasOne('App\User');
    }

    public function Bank()
    {
        return $this->hasOne('App\Bank_Account');
    }

    public function Items()
    {
        return $this->hasMany('App\Items');
    }
}
