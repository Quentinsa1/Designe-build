@extends('dashboard.app')

@section('content')
<style>
    .table-container {
        background-color: white;
        border-radius: 16px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
        padding: 2rem;
        overflow-x: auto;
        max-width: 100%;
        margin: 2rem auto;
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
        vertical-align: top;
    }

    th {
        font-weight: 600;
        color: #495057;
    }

    tr:hover {
        background-color: #f1f3f5;
    }

    .btn-action {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.4rem 0.7rem;
        margin-right: 0.25rem;
        border-radius: 8px;
        font-size: 0.85rem;
        border: none;
        cursor: pointer;
        transition: background-color 0.2s ease;
    }

    .btn-action.edit {
        background-color: #4cc9f0;
        color: white;
    }

    .btn-action.edit:hover {
        background-color: #4895ef;
    }

    .btn-action.delete {
        background-color: #f72585;
        color: white;
    }

    .btn-action.delete:hover {
        background-color: #c9184a;
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
    }
</style>

<div class="main-container">
    <div class="page-header">
        <h1 class="text-2xl font-bold text-gray-800">Liste des Offres</h1>
    </div>

    @if($offres->isEmpty())
        <p class="no-data">Aucune offre enregistrée pour le moment.</p>
    @else
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Contrat</th>
                        <th>Expérience</th>
                        <th>Localisation</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($offres as $offre)
                        <tr>
                            <td>{{ $offre->titre }}</td>
                            <td>{{ $offre->contrat }}</td>
                            <td>{{ $offre->experience }}</td>
                            <td>{{ $offre->localisation }}</td>
                            <td>
                                <a href="{{ route('offres.edit', $offre->id) }}" class="btn-action edit">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <form action="{{ route('offres.destroy', $offre->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Supprimer cette offre ?')">
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
