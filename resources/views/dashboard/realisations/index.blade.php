@extends('dashboard.app')

@section('content')
<style>
    .table-container {
        background-color: white;
        border-radius: 16px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
        padding: 2rem;
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1rem;
    }

    thead {
        background-color: #f5f7fb;
    }

    th, td {
        padding: 1rem;
        text-align: left;
        font-size: 0.95rem;
        color: #212529;
        border-bottom: 1px solid #dee2e6;
    }

    th {
        font-weight: 600;
        color: #495057;
    }

    tr:hover {
        background-color: #f1f3f5;
    }

    .thumbnail {
        width: 80px;
        height: 60px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .no-data {
        color: #6c757d;
        font-size: 1rem;
        margin-top: 2rem;
    }

    @media (max-width: 768px) {
        th, td {
            padding: 0.75rem;
            font-size: 0.85rem;
        }

        .thumbnail {
            width: 60px;
            height: 45px;
        }
    }
    .btn-action {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0.5rem;
    margin-right: 0.25rem;
    border-radius: 8px;
    color: white;
    font-size: 0.9rem;
    transition: background-color 0.2s ease;
    border: none;
    cursor: pointer;
}

.btn-action.edit {
    background-color: #4cc9f0;
}

.btn-action.edit:hover {
    background-color: #4895ef;
}

.btn-action.delete {
    background-color: #f72585;
}

.btn-action.delete:hover {
    background-color: #c9184a;
}

.btn-action i {
    pointer-events: none;
}

</style>

<div class="main-container">
    <div class="page-header">
        <h1 class="text-2xl font-bold text-gray-800">Liste des Réalisations</h1>
    </div>

    @if($realisations->isEmpty())
        <p class="no-data">Aucune réalisation enregistrée pour le moment.</p>
    @else
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($realisations as $realisation)
                        <tr>
                            <td>
                                @if($realisation->image)
                                    <img src="{{ asset('storage/' . $realisation->image) }}" class="thumbnail" alt="Image Réalisation">
                                @else
                                    <img src="https://via.placeholder.com/80x60?text=No+Image" class="thumbnail" alt="Placeholder">
                                @endif
                            </td>
                            <td>{{ $realisation->titre }}</td>
                            <td>{{ Str::limit($realisation->description, 60) }}</td>
                            <td>{{ $realisation->created_at->format('d/m/Y') }}</td>
                            <td>
                                <!-- Bouton Modifier -->
                                <a href="{{ route('realisations.edit', $realisation->id) }}" class="btn-action edit">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <!-- Bouton Supprimer -->
                                <form action="{{ route('realisations.destroy', $realisation->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette réalisation ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-action delete">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
        </div>
    @endif
</div>
@endsection
