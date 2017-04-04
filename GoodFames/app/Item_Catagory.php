<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Items;
class Item_Catagory extends Model
{
    //
    protected $table = 'Item_Catagory';
    public $timestamps = false;
    protected $fillable = ['name'];

    public function Items()
    {
        return $this->hasMany('App\Items');
    }
}
