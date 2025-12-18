<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /** Nom de la table associée (facultatif si suit la convention plurielle) */
    protected $table = 'articles';
    /** Clé primaire (facultatif si c’est 'id') */
    protected $primaryKey = 'id';
    /** Indique si les colonnes created_at/updated_at sont utilisées */
    public $timestamps = true;
    /** Colonnes modifiables via create() ou update() */
    protected $fillable = ['title', 'description'];
    /** Colonnes protégées contre l’assignation de masse */
    protected $guarded = ['id'];
    /** Conversions automatiques de types (cast) */
    protected $casts = [
        'date' => 'datetime',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
    ];
}
