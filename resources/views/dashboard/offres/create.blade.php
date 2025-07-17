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
    <h1>Poster une Offre</h1>

    <form action="{{ route('offres.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="titre">Titre du Poste</label>
            <input type="text" name="titre" id="titre" required placeholder="Ex: Développeur Construction">
        </div>

        <div class="form-group">
            <label for="contrat">Type de Contrat</label>
            <input type="text" name="contrat" id="contrat" required placeholder="Ex: Temps plein, CDI">
        </div>

        <div class="form-group">
            <label for="qualifications">Qualifications</label>
            <input type="text" name="qualifications" id="qualifications" placeholder="Ex: Bac+5 en ingénierie...">
        </div>

        <div class="form-group">
            <label for="experience">Expérience</label>
            <input type="text" name="experience" id="experience" placeholder="Ex: 2-3 ans">
        </div>

        <div class="form-group">
            <label for="localisation">Localisation</label>
            <input type="text" name="localisation" id="localisation" required placeholder="Ex: France / Télétravail">
        </div>

        <div class="form-group">
            <label for="description">Description du Poste</label>
            <textarea name="description" id="description" rows="5" required placeholder="Décrivez les missions, le contexte du poste..."></textarea>
        </div>

        <div class="form-group">
            <label for="avantages">Avantages</label>
            <textarea name="avantages" id="avantages" rows="4" placeholder="Ex: Mutuelle, tickets-resto, télétravail..."></textarea>
        </div>

        <div class="form-group">
            <label for="lien_postulation">Lien de Postulation (optionnel)</label>
            <input type="url" name="lien_postulation" id="lien_postulation" placeholder="Ex: https://example.com/postuler">
        </div>

        <div class="text-right">
            <button type="submit" class="submit-button">
                <i class="fa fa-paper-plane"></i> Publier l'Offre
            </button>
        </div>
    </form>
</div>
@endsection
