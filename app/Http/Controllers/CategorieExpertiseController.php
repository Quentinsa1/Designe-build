<?php

namespace App\Http\Controllers;

use App\Models\CategorieExpertise;
use Illuminate\Http\Request;

class CategorieExpertiseController extends Controller
{
    public function index()
    {
        $categories = CategorieExpertise::all();
        return view('dashboard.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('categories', 'public');
        }

        CategorieExpertise::create($validated);

        return redirect()->route('dashboard.categories.index')->with('success', 'Catégorie ajoutée avec succès.');
    }

    public function show($id)
    {
        $categorie = CategorieExpertise::findOrFail($id);
        $otherCategories = CategorieExpertise::where('id', '!=', $id)->get();

        return view('website.expertise.show', [
            'expertise' => $categorie, 
            'otherExpertises' => $otherCategories
        ]);
    }

    public function edit($id)
{
    $categorie = CategorieExpertise::findOrFail($id);
    return view('dashboard.categories.edit', compact('categorie'));
}

public function update(Request $request, $id)
{
    $validated = $request->validate([
        'titre' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $categorie = CategorieExpertise::findOrFail($id);

    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('categories', 'public');
    }

    $categorie->update($validated);

    return redirect()->route('dashboard.categories.index')->with('success', 'Catégorie modifiée avec succès.');
}

public function destroy($id)
{
    $categorie = CategorieExpertise::findOrFail($id);
    $categorie->delete();

    return redirect()->route('dashboard.categories.index')->with('success', 'Catégorie supprimée.');
}

}
