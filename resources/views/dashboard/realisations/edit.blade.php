@extends('dashboard.app')

@section('content')
<style>
    .form-container {
        background-color: white;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
        padding: 2rem;
        max-width: 700px;
        margin: 2rem auto;
    }

    .form-container h1 {
        font-size: 1.75rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: #1a1a2e;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        font-weight: 600;
        color: #343a40;
        margin-bottom: 0.5rem;
    }

    .form-group input[type="text"],
    .form-group textarea {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 1px solid #ced4da;
        border-radius: 12px;
        font-size: 1rem;
        background-color: #f8f9fa;
        color: #212529;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        border-color: #4361ee;
        box-shadow: 0 0 0 0.2rem rgba(67, 97, 238, 0.25);
        outline: none;
    }

    .form-group input[type="file"] {
        padding: 0.5rem 0;
    }

    .submit-button {
        background-color: #4361ee;
        color: white;
        font-weight: 600;
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 12px;
        cursor: pointer;
        font-size: 1rem;
        transition: background-color 0.3s ease;
    }

    .submit-button:hover {
        background-color: #3f37c9;
    }

    .preview {
        margin-top: 0.5rem;
        max-width: 200px;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="form-container">
    <h1>Modifier une Réalisation</h1>

    <form action="{{ route('realisations.update', $realisation->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" value="{{ old('titre', $realisation->titre) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5">{{ old('description', $realisation->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Changer l’image</label>
            <input type="file" name="image" id="image">
            @if($realisation->image)
                <img src="{{ asset('storage/' . $realisation->image) }}" class="preview" alt="Aperçu de l’image">
            @endif
        </div>

        <div class="text-right">
            <button type="submit" class="submit-button">
                <i class="fa fa-save"></i> Mettre à jour
            </button>
        </div>
    </form>
</div>
@endsection
