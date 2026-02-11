<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Product extends Model
{
    //use HasFactory;

    // Colonnes autorisées pour l'assignation de masse
    protected $fillable = [
        'name', 'slug', 'description', 'price',
        'stock', 'active', 'category_id', 'image'
    ];

    // Conversion automatique des types
    protected $casts = [
        'price' => 'decimal:2',
        'active' => 'boolean',
    ];

    //Un produit appartient à une catégorie
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // Colonnes cachées lors de la sérialisation JSON
    protected $hidden = [];



}
