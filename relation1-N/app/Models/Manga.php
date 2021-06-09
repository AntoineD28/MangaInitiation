<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    use HasFactory;
    //On ne prendra pas en charge le timestamp associ;e à la table
    public $timestamp = false;

    public function dessinateur()
    {
        return $this->belongsTo(Dessinateur::class);
    }

    public function scenariste()
    {
        return $this->belongsTo(Scenariste::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function collections()
    {
        return $this->belongsToMnay(Collection::class);
    }
}
