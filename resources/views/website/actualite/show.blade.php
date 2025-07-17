@extends('partials.template')
@section('meta_title', $actualite->titre . ' | 7Elite')
@section('meta_description', Str::limit(strip_tags($actualite->contenu), 160))
@section('meta_image', asset('storage/' . $actualite->image))

@section('content')
<style>
  .actualite-hero {
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

    .actualite-hero .floating-element {
        position: absolute;
        z-index: 1;
        opacity: 0.5;
        animation: float 6s ease-in-out infinite;
    }

    .actualite-hero .cube {
        width: 80px;
        height: 80px;
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid rgba(255, 255, 255, 0.2);
        top: 20%;
        left: 10%;
        animation-delay: 0s;
        backdrop-filter: blur(5px);
    }

    .actualite-hero .sphere {
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

    .actualite-hero .pyramid {
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

    .actualite-hero h1 {
        font-size: 3rem;
        color: #fff;
        z-index: 2;
        position: relative;
        font-weight: bold;
    }

    .actualite-hero p {
        font-size: 1.2rem;
        z-index: 2;
        position: relative;
        color: #fff;
        margin-top: 15px;
    }
    .actualite-hero .container > .text-start {
    z-index: 2;
    position: relative;
    margin-left: 0;
    margin-right: auto;
    padding-left: 15px;}
</style>
<section class="actualite-hero">
    <div class="floating-element cube"></div>
    <div class="floating-element sphere"></div>
    <div class="floating-element pyramid"></div>

    <div class="container">
        <div class="text-start" style="max-width: 700px;">
            <h1>Nos Actualités</h1>
            <p>Suivez nos projets, événements et dernières nouvelles</p>
        </div>
    </div>
</section>

<div class="page-content">
    <div class="container mt-5">
        <h2 class="mb-3">{{ $actualite->titre }}</h2>
        <p class="text-muted">Publié le {{ $actualite->created_at->format('d/m/Y') }} par {{ $actualite->auteur ?? 'Admin' }}</p>

        @if($actualite->image)
            <img src="{{ asset('storage/' . $actualite->image) }}" class="img-fluid mb-4" alt="Image de l’actualité">
        @endif

        <div class="content">
            {!! $actualite->contenu !!}
        </div>

        <a href="{{ route('website.actualite.index') }}" class="btn btn-outline-primary mt-4">← Retour aux actualités</a>
    </div>
</div>
@endsection
