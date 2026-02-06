<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    // Colonnes autorisées pour l'assignation de masse
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    // Colonnes cachées lors de la sérialisation JSON
    protected $hidden = [];

    // Conversion automatique des types
    protected $casts = [
        'price' => 'decimal:2',
        'active' => 'boolean',
    ];
}
