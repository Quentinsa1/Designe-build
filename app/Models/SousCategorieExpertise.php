<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SousCategorieExpertise extends Model
{
    protected $fillable = [
        'categorie_expertise_id', 'nom', 'slug',
        'description', 'icon', 'ordre', 'is_active'
    ];

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(CategorieExpertise::class, 'categorie_expertise_id');
    }
    // Scope pour les sous-catégories actives
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Génération automatique du slug
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = \Str::slug($model->nom);
        });
    }
}