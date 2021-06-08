<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dessinateur extends Model
{
    use HasFactory;
    //On ne prendra pas en charge le timestamp associ;e à la table
    public $timestamp = false;
    protected $fillable = ['nom_dessinateur', 'prenom_dessinateur'];

    public function mangas() 
    {
        return $this->hasMany(Manga::class);
    }
}
