<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use DB;

class Dessinateur extends Model
{
    use HasFactory;

    public function getAll() {
        $dessinateur = DB::table('dessinateur')->get();
        return $dessinateur;
    }
}
