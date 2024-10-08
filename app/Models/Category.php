<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Es el unico dato que va a ingresar
    protected $fillable = ['nombre','description'];

    public function products(){
        return $this->hasMany(Product::class, 'id');
    }
}
