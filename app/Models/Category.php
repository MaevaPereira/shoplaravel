<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Category extends Model
{
    // Colonnes autorisées pour l'assignation de masse
    protected $fillable = ['name', 'slug', 'description', 'id'];
     //Une catégorie a plusieurs produits
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    // Colonnes cachées lors de la sérialisation JSON
    protected $hidden = [];

    // Conversion automatique des types
    protected $casts = [
        'price' => 'decimal:2',
        'active' => 'boolean',
    ];
}
