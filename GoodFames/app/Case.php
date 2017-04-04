<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Case extends Model
{
    //
    protected $table = 'Case';
    protected $fillable = ['name','desc','photo','id_NGO','location'];
}
