<?php

namespace App\Http\Controllers;
use App\Models\Realisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RealisationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $realisations = Realisation::latest()->get();
        return view('dashboard.realisations.index', compact('realisations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.realisations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('realisations', 'public');
        }

        Realisation::create($validated);

        return redirect()->route('realisations.create')->with('success', 'Réalisation ajoutée avec succès.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // Affiche le formulaire d'édition
    public function edit(Realisation $realisation)
    {
        return view('dashboard.realisations.edit', compact('realisation'));
    }

    // Met à jour une réalisation existante
    public function update(Request $request, Realisation $realisation)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Supprimer l’ancienne image si elle existe
            if ($realisation->image && Storage::disk('public')->exists($realisation->image)) {
                Storage::disk('public')->delete($realisation->image);
            }

            $validated['image'] = $request->file('image')->store('realisations', 'public');
        }

        $realisation->update($validated);

        return redirect()->route('realisations.index')->with('success', 'Réalisation mise à jour avec succès.');
    }

    // Supprime une réalisation
    public function destroy(Realisation $realisation)
    {
        if ($realisation->image && Storage::disk('public')->exists($realisation->image)) {
            Storage::disk('public')->delete($realisation->image);
        }

        $realisation->delete();

        return redirect()->route('realisations.index')->with('success', 'Réalisation supprimée avec succès.');
    }
}
