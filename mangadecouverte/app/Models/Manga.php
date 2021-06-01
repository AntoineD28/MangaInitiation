<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Manga extends Model
{
    use HasFactory;

    //get the list of manga stored in the manga table.
    public function getAll() {
        
        #code ...
        $manga = DB::table('manga')->get();
        return $manga;
    }
}
