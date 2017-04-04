<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\NGO;
use App\Items;
use App\Bank_Account;
class Item_Transaction extends Model
{
    //
    protected $table = 'Item_Transaction';
    public $timestamps = false;
    protected $fillable = ['id_customer','id_ngo','id_fp','id_item','amount','id_bank','total','confirm_photo','time','confirm_time','paid_status'];

    public function Customer()
    {
        return $this->hasOne('App\User');
    }

    public function NGO()
    {
        return $this->hasOne('App\User');
    }

    public function Famous_Person()
    {
        return $this->hasOne('App\User');
    }

    public function Items()
    {
        return $this->hasOne('App\Items');
    }

    public function Bank()
    {
        return $this->hasOne('App\Bank_Account');
    }
}
