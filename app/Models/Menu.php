<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;


    public function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value);
       
    }
    public function setCategoryAttribute($value){
        $this->attributes['category'] = ucwords($value);
       
    }
}
