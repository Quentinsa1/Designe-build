<?php

namespace App\Http\Controllers;
use App\Models\Offre;

use Illuminate\Http\Request;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offres = Offre::latest()->get();
        return view('dashboard.offres.index', compact('offres'));
    }

public function create()
{
    return view('dashboard.offres.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'titre' => 'required',
        'contrat' => 'required',
        'qualifications' => 'nullable',
        'experience' => 'nullable',
        'localisation' => 'required',
        'description' => 'required',
        'avantages' => 'nullable',
        'lien_postulation' => 'nullable|url',
    ]);

    Offre::create($validated);
    return redirect()->route('offres.index')->with('success', 'Offre créée avec succès.');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
