@extends('dashboard.app')
@section('content')
<div class="container mt-4">
    <h2>Ajouter une actualité</h2>
    <form method="POST" action="{{ route('dashboard.actualites.store') }}" enctype="multipart/form-data">
    @csrf

        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image à la une</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="mb-3">
            <label for="auteur" class="form-label">Auteur</label>
            <input type="text" class="form-control" id="auteur" name="auteur">
        </div>

        <div class="mb-3">
            <label for="contenu" class="form-label">Contenu</label>
            <textarea class="form-control" name="contenu" id="contenu" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Publier</button>
    </form>
</div>

<!-- Optionnel : éditeur riche -->
@push('scripts')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({ selector: 'textarea#contenu' });
</script>
@endpush
@endsection
