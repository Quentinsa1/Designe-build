<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actualite;
class ActualiteController extends Controller
{
    public function index()
{
    $actualites = Actualite::latest()->paginate(6);
    return view('website.actualite.index', compact('actualites'));
}

public function destroy($id)
{
    $actualite = Actualite::findOrFail($id);
    $actualite->delete();

    return redirect()->route('dashboard.actualites.index')->with('success', 'Actualité supprimée.');
}


}
