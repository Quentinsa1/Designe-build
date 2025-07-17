<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategorieExpertise;
use Illuminate\Support\Str;

class CategorieExpertiseSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'titre' => 'Bâtiment',
                'description' => 'Expertise en conception et construction de bâtiments',
                'ordre' => 1,
            ],
            [
                'titre' => 'Voirie et Réseau Divers',
                'description' => 'Gestion des infrastructures routières et des réseaux urbains',
                'ordre' => 2,
            ],
            [
                'titre' => 'Building Information Modeling (BIM/ICIM)',
                'description' => 'Modélisation des données du bâtiment pour une gestion intelligente',
                'ordre' => 3,
            ],
            [
                'titre' => 'Topographie et Cartographie (SIG)',
                'description' => 'Relevés topographiques et systèmes d’information géographique',
                'ordre' => 4,
            ],
            [
                'titre' => 'Ville, Transport et Mobilité',
                'description' => 'Solutions pour l’aménagement urbain et les systèmes de transport',
                'ordre' => 5,
            ],
            [
                'titre' => 'Eaux et Assainissement',
                'description' => 'Gestion de l’eau potable et des systèmes d’assainissement',
                'ordre' => 6,
            ],
        ];

        foreach ($categories as $categorie) {
            $slug = Str::slug($categorie['titre']);

            CategorieExpertise::firstOrCreate(
                ['slug' => $slug],
                [
                    'titre' => $categorie['titre'],
                    'description' => $categorie['description'],
                    'ordre' => $categorie['ordre'],
                    'slug' => $slug,
                    'is_active' => true,
                ]
            );
        }
    }
}
