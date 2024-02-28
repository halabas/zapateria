<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','cantidad','zapato_id'];

    function user(){
        return $this->belongsTo(User::class);
    }

    function zapato(){
        return $this->belongsTo(Zapato::class);
    }
}
