<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public $timestamps = false;
    protected $table='recipes';
    protected $primaryKey = 'Rec_Id';
    
}
