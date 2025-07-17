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
        transition: all 0.3s ease-in-out;
    }

    .form-container h1 {
        font-size: 1.75rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: #1a1a2e;
    }

    .form-container p {
        font-size: 0.95rem;
        color: #6c757d;
        margin-bottom: 2rem;
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

    @media (max-width: 768px) {
        .form-container {
            padding: 1.5rem;
            margin: 1rem;
        }
    }
</style>

<div class="form-container">
    <h1>Poster une Réalisation</h1>
    <p>Complétez le formulaire pour ajouter une nouvelle réalisation à votre portfolio.</p>

    <form action="{{ route('realisations.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="titre">Titre <span style="color: red;">*</span></label>
            <input type="text" name="titre" id="titre" placeholder="Ex : Rénovation appartement Haussmannien" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5" placeholder="Décrivez les étapes, matériaux, contraintes, etc."></textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
        </div>

        <div class="text-right">
            <button type="submit" class="submit-button">
                <i class="fa fa-paper-plane"></i> Poster la réalisation
            </button>
        </div>
    </form>
</div>
@endsection
