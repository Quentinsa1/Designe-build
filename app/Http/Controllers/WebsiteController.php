<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategorieExpertise;
use App\Models\SousCategorieExpertise;
use App\Models\Actualite;
use App\Models\Realisation;

class WebsiteController extends Controller
{
    public function index()
    {
        $categories = CategorieExpertise::all();
        return view('website.index', compact('categories'));
    }
    public function faq(){
        return view('website.faq');
    }

    public function about(){
        return view('website.about');
    }
    public function expertise()
    {
        $categories = CategorieExpertise::active()
                      ->with(['sousCategories' => function($q) {
                          $q->active()->orderBy('ordre');
                      }])
                      ->orderBy('ordre')
                      ->get();
    
        return view('website.expertise.index', compact('categories'));
    }
    
    public function showExpertise($slug)
    {
        $subcategory = SousCategorieExpertise::with(['categorie' => function($query) {
                              $query->active();
                          }])
                          ->where('slug', $slug)
                          ->whereHas('categorie') // Garantit qu'une catégorie existe
                          ->active()
                          ->firstOrFail();
    
        return view('website.expertise.show', compact('subcategory'));
    }
    
    public function realisation()
    {
        // Retirez le with('categorie') et paginez simplement
        $realisations = Realisation::orderBy('created_at', 'desc')->paginate(6);
        
        return view('website.realisation.index', compact('realisations'));
    }

    public function contact(){
        return view('website.contact');
    }
    public function job(){
        return view('website.Job.index');
    }
    public function actualites()
{
    $actualites = Actualite::latest()->paginate(6); 
    return view('website.actualite.index', compact('actualites'));
}
public function showActualite($id)
{
    $actualite = Actualite::findOrFail($id);
    return view('website.actualite.show', compact('actualite'));
}
}
