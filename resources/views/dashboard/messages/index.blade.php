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

    .no-data {
        color: #6c757d;
        font-size: 1rem;
        margin-top: 2rem;
    }
</style>

<div class="main-container">
    <div class="page-header">
        <h1 class="text-2xl font-bold text-gray-800">Messages Reçus</h1>
    </div>

    @if($messages->isEmpty())
        <p class="no-data">Aucun message pour le moment.</p>
    @else
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Sujet</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $msg)
                        <tr>
                            <td>{{ $msg->nom }}</td>
                            <td>{{ $msg->email }}</td>
                            <td>{{ $msg->telephone ?? '-' }}</td>
                            <td>{{ $msg->sujet ?? '-' }}</td>
                            <td>{{ Str::limit($msg->message, 80) }}</td>
                            <td>{{ $msg->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
