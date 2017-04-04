<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\NGO;
use App\Famous_Person;
use App\Item_Catagory;
class Items extends Model
{
    //
    protected $table = 'Items';
    public $timestamps = false;
    protected $fillable = ['name','desc','id_cat','price','amount','id_fp','id_ngo','upload_at','publish'];

    public function NGO()
    {
        return $this->hasOne('App\NGO');
    }

    public function Famous_Person()
    {
        return $this->hasOne('App\Famous_Person');
    }

    public function Item_Catagory()
    {
        return $this->hasOne('App\Item_Catagory');
    }

    public function Items_Transaction()
    {
        return $this->hasMany('App\Items_Transaction');
    }
}
