<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /** Colonnes modifiables via create() ou update() */
    protected $fillable = ['title', 'description'];
}
