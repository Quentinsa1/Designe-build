<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Models/Offre.php
class Offre extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre', 'contrat', 'qualifications',
        'experience', 'localisation',
        'description', 'avantages', 'lien_postulation'
    ];
}
