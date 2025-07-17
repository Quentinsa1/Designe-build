@extends('dashboard.app')

@section('content')
<div class="container py-5">
    <div class="card shadow">
        <div class="card-header bg-warning text-white">
            <h4 class="mb-0">Modifier la Catégorie : <strong>{{ $categorie->titre }}</strong></h4>
        </div>

        <div class="card-body">
            {{-- Affichage des erreurs --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <h5>Erreurs lors de la soumission :</h5>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li><i class="fas fa-exclamation-circle text-danger me-2"></i>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('dashboard.categories.update', $categorie->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="titre" class="form-label">Titre <span class="text-danger">*</span></label>
                    <input type="text" name="titre" id="titre" class="form-control" value="{{ old('titre', $categorie->titre) }}" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                    <textarea name="description" id="description" rows="5" class="form-control" required>{{ old('description', $categorie->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image actuelle</label><br>
                    @if ($categorie->image)
                        <img src="{{ asset('storage/' . $categorie->image) }}" alt="{{ $categorie->titre }}" width="150" class="mb-2 d-block">
                    @else
                        <p><em>Aucune image enregistrée.</em></p>
                    @endif

                    <label for="image" class="form-label mt-2">Changer l’image (optionnel)</label>
                    <input type="file" name="image" id="image" class="form-control">
                    <small class="form-text text-muted">Formats : jpeg, png, jpg, gif, svg (max 2MB).</small>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('dashboard.categories.index') }}" class="btn btn-outline-secondary me-2">
                        <i class="fas fa-arrow-left me-1"></i> Retour
                    </a>
                    <button type="submit" class="btn btn-warning text-white">
                        <i class="fas fa-save me-1"></i> Enregistrer les modifications
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
