<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    //On ne prendra pas en charge le timestamp associ;e à la table
    public $timestamp = false;
    protected $fillable = ['lib_genre'];

    public function mangas() 
    {
        return $this->hasMany(Manga::class);
    }
}
