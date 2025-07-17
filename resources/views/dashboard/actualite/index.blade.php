@extends('dashboard.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Liste des Actualités</h2>

    <a href="{{ route('actualites.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Ajouter une actualité
    </a>

    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Image</th>
                <th>Date de publication</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($actualites as $actu)
                <tr>
                    <td>{{ $actu->titre }}</td>
                    <td>{{ $actu->auteur ?? '—' }}</td>
                    <td>
                        @if($actu->image)
                            <img src="{{ asset('storage/' . $actu->image) }}" alt="Image" width="80">
                        @else
                            <span class="text-muted">Aucune</span>
                        @endif
                    </td>
                    <td>{{ $actu->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('actualites.edit', $actu->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                        <form action="{{ route('actualites.destroy', $actu->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cette actualité ?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Aucune actualité enregistrée.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        {{ $actualites->links() }}
    </div>
</div>
@endsection
