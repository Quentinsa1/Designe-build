@extends('dashboard.app')

@section('content')
<style>
    .form-container {
        background-color: white;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
        padding: 2rem;
        max-width: 800px;
        margin: 2rem auto;
    }

    .form-container h1 {
        font-size: 1.75rem;
        font-weight: 700;
        margin-bottom: 1rem;
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
    .form-group input[type="url"],
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
</style>

<div class="form-container">
    <h1>Modifier une Offre</h1>

    <form action="{{ route('offres.update', $offre->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="titre">Titre du Poste</label>
            <input type="text" name="titre" id="titre" value="{{ old('titre', $offre->titre) }}" required>
        </div>

        <div class="form-group">
            <label for="contrat">Type de Contrat</label>
            <input type="text" name="contrat" id="contrat" value="{{ old('contrat', $offre->contrat) }}" required>
        </div>

        <div class="form-group">
            <label for="qualifications">Qualifications</label>
            <input type="text" name="qualifications" id="qualifications" value="{{ old('qualifications', $offre->qualifications) }}">
        </div>

        <div class="form-group">
            <label for="experience">Expérience</label>
            <input type="text" name="experience" id="experience" value="{{ old('experience', $offre->experience) }}">
        </div>

        <div class="form-group">
            <label for="localisation">Localisation</label>
            <input type="text" name="localisation" id="localisation" value="{{ old('localisation', $offre->localisation) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description du Poste</label>
            <textarea name="description" id="description" rows="5" required>{{ old('description', $offre->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="avantages">Avantages</label>
            <textarea name="avantages" id="avantages" rows="4">{{ old('avantages', $offre->avantages) }}</textarea>
        </div>

        <div class="form-group">
            <label for="lien_postulation">Lien de Postulation (optionnel)</label>
            <input type="url" name="lien_postulation" id="lien_postulation" value="{{ old('lien_postulation', $offre->lien_postulation) }}">
        </div>

        <div class="text-right">
            <button type="submit" class="submit-button">
                <i class="fa fa-save"></i> Mettre à jour l'offre
            </button>
        </div>
    </form>
</div>
@endsection
