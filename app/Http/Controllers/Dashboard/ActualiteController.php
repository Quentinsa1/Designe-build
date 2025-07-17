<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actualite;
class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actualites = Actualite::latest()->paginate(10); // tu peux ajuster le nombre
        return view('dashboard.actualite.index', compact('actualites'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(('dashboard.actualite.create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $data = $request->validate([
        'titre' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'auteur' => 'nullable|string|max:255',
        'contenu' => 'required',
    ]);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('actualites', 'public');
    }

    Actualite::create($data);

    return redirect()->route('actualites.index')->with('success', 'Actualité créée avec succès.');
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
