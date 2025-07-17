{{-- realisations.blade.php --}}
@extends('partials.template')

@section('content')
<style>
    /* Style du hero pour les réalisations */
    .realisations-hero {
        background: url('frr.jpg') no-repeat center center;
        background-size: cover;
        height: 30vh;
        min-height: 600px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        position: relative;
        overflow: hidden;
        padding-top: 80px;
        text-align: center;
    }

    .realisations-hero .floating-element {
        position: absolute;
        z-index: 1;
        opacity: 0.5;
        animation: float 6s ease-in-out infinite;
    }

    .realisations-hero .cube {
        width: 80px;
        height: 80px;
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid rgba(255, 255, 255, 0.2);
        top: 20%;
        left: 10%;
        animation-delay: 0s;
        backdrop-filter: blur(5px);
    }

    .realisations-hero .sphere {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: rgba(212, 175, 55, 0.1);
        border: 2px solid rgba(212, 175, 55, 0.2);
        bottom: 30%;
        right: 15%;
        animation-delay: 1s;
        backdrop-filter: blur(5px);
    }

    .realisations-hero .pyramid {
        width: 0;
        height: 0;
        border-left: 40px solid transparent;
        border-right: 40px solid transparent;
        border-bottom: 70px solid rgba(255, 255, 255, 0.1);
        top: 40%;
        right: 10%;
        animation-delay: 2s;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-15px);
        }
    }

    .realisations-hero h1 {
        font-size: 3rem;
        color: #fff;
        z-index: 2;
        position: relative;
        font-weight: bold;
    }

    .realisations-hero p {
        font-size: 1.2rem;
        z-index: 2;
        position: relative;
        color: #fff;
        margin-top: 15px;
    }
    .realisations-hero .container > .text-start {
        z-index: 2;
        position: relative;
        margin-left: 0;
        margin-right: auto;
        padding-left: 15px;
    }

</style>

<section class="realisations-hero">
    <div class="floating-element cube"></div>
    <div class="floating-element sphere"></div>
    <div class="floating-element pyramid"></div>

    <div class="container">
        <div class="text-start" style="max-width: 700px;">
            <h1>Nos Réalisations</h1>
            <p>Découvrez nos projets et réalisations exceptionnelles</p>
        </div>
    </div>
</section>

<div class="breadcrumb-row bg-light py-2">
    <div class="container">
        <ul class="breadcrumb text-dark m-0 px-0 bg-transparent">
            <li class="breadcrumb-item"><a href="{{ route('website.index') }}">Accueil</a></li>
            <li class="breadcrumb-item active">Réalisations</li>
        </ul>
    </div>
</div>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            @foreach($realisations as $realisation)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow border-0">
                        <a href="">
                            <img src="{{ asset('storage/' . $realisation->image) }}" class="card-img-top" alt="{{ $realisation->titre }}">
                        </a>
                        <div class="card-body d-flex flex-column">
                            <small class="text-muted mb-2">
                                <i class="fa fa-calendar-alt me-1"></i>
                                {{ $realisation->created_at->format('d M Y') }} &nbsp;|&nbsp;
                                <i class="fa fa-tag me-1"></i>
                                {{ $realisation->categorie->nom ?? 'Non catégorisé' }}
                            </small>
                            <h5 class="card-title mb-3">
                                <a href="" class="text-dark text-decoration-none">
                                    {{ $realisation->titre }}
                                </a>
                            </h5>
                            <div class="mt-auto">
                                <a href="" class="btn btn-outline-primary rounded-pill btn-sm">
                                    Voir plus <i class="fa fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        @if ($realisations->hasPages())
            <div class="d-flex justify-content-center mt-5">
                {{ $realisations->links('vendor.pagination.custom') }}
            </div>
        @endif
    </div>
</section>
@endsection