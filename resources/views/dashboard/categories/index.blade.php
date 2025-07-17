@extends('dashboard.app')
@section('content')

<div class="main-container">
    <div class="page-header d-flex justify-content-between align-items-center">
        <h1>Liste des Catégories d’Expertise</h1>
        <a href="{{ route('dashboard.categories.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Ajouter
        </a>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            <h2>Catégories enregistrées</h2>
        </div>
        <div class="card-body">
            @if($categories->isEmpty())
                <p>Aucune catégorie pour le moment.</p>
            @else
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $categorie)
                            <tr>
                                <td>{{ $categorie->titre }}</td>
                                <td>{{ Str::limit($categorie->description, 100) }}</td>
                                <td>
                                    @if($categorie->image)
                                        <img src="{{ asset('storage/' . $categorie->image) }}" alt="{{ $categorie->titre }}" width="100">
                                    @else
                                        <em>Pas d'image</em>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('dashboard.categories.edit', $categorie->id) }}" class="btn btn-sm btn-warning me-1">
                                        <i class="fas fa-edit"></i> Modifier
                                    </a>

                                    <form action="{{ route('dashboard.categories.destroy', $categorie->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Confirmer la suppression ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i> Supprimer
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>

@endsection
