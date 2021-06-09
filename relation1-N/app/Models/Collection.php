<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    
    //On ne prendra pas en charge le timestamp associ;e à la table 
    public $timestamp = false;

    public function manags()
    {
        return $this->belongsToMany(Mnaga::class);
    }
}
