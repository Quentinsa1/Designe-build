<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategorieExpertise extends Model
{
    protected $fillable = [
        'titre', 'slug', 'description', 
        'image', 'ordre', 'is_active'
    ];

    public function sousCategories(): HasMany
    {
        return $this->hasMany(SousCategorieExpertise::class)
                    ->orderBy('ordre')
                    ->where('is_active', true);
    }

    // Scope pour les catégories actives
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}