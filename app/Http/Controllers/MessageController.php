<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'sujet' => 'nullable|string|max:255',
            'message' => 'required|string',
            'telephone' => 'nullable|string|max:30',
        ]);

        \App\Models\Message::create($validated);

        return redirect()->back()->with('success', 'Votre message a bien été envoyé.');
    }

    public function index()
{
    $messages = \App\Models\Message::latest()->get();
    return view('dashboard.messages.index', compact('messages'));
}

}

