@extends('partials.template')

@section('content')
<style>
    /* Expertise Section */
    .expertise-section {
        padding: 100px 0 50px;
    }
    
    .section-title {
        text-align: center;
        margin-bottom: 60px;
    }
    
    .section-title h1 {
        font-size: 2.8rem;
        margin-bottom: 15px;
        color: #333;
    }
    
    .section-title p {
        font-size: 1.2rem;
        color: #666;
        max-width: 700px;
        margin: 0 auto;
    }
    
    .category-card {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        margin-bottom: 30px;
        transition: all 0.3s ease;
    }
    
    .category-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }
    
    .category-img {
        height: 250px;
        overflow: hidden;
    }
    
    .category-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.5s ease;
    }
    
    .category-card:hover .category-img img {
        transform: scale(1.05);
    }
    
    .category-content {
        padding: 30px;
    }
    
    .category-content h3 {
        font-size: 1.6rem;
        margin-bottom: 15px;
        color: #333;
    }
    
    .category-content p {
        color: #666;
        margin-bottom: 20px;
    }
    
    .subcategories-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .subcategories-list li {
        margin-bottom: 10px;
        padding-left: 25px;
        position: relative;
    }
    
    .subcategories-list li::before {
        content: '\f054';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        position: absolute;
        left: 0;
        top: 5px;
        color: #f39c12;
        font-size: 12px;
    }
    
    .subcategories-list li a {
        color: #333;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .subcategories-list li a:hover {
        color: #f39c12;
        padding-left: 5px;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .expertise-section {
            padding: 60px 0 30px;
        }
        
        .section-title h1 {
            font-size: 2.2rem;
        }
    }

    /* Hero Subpage */
    .hero-subpage {
        padding: 140px 0 80px;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                    url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
        background-size: cover;
        background-position: center;
        color: white;
        position: relative;
    }

    .hero-subpage h1 {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .breadcrumb {
        padding: 0;
        margin-bottom: 0;
        background: transparent;
    }

    .breadcrumb-item a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .breadcrumb-item a:hover {
        color: white;
    }

    .breadcrumb-item.active {
        color: #f39c12;
    }

    .breadcrumb-item + .breadcrumb-item::before {
        color: rgba(255, 255, 255, 0.5);
    }
</style>

<!-- Hero Section -->
<section class="hero-subpage">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h1>Domaines d'Expertise</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('website.index') }}">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Domaines d'Expertise</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Expertise Section -->
<section class="expertise-section">
    <div class="container">
        <div class="section-title">
            <h1>Nos Domaines d'Expertise</h1>
            <p>Découvrez notre savoir-faire à travers nos différents domaines de compétences. Nous mettons à votre disposition une expertise pointue pour répondre à tous vos projets.</p>
        </div>
        
        <div class="row">
            @foreach ($categories as $categorie)
            <div class="col-lg-6">
                <div class="category-card">
                    <div class="category-img">
                        <img src="https://via.placeholder.com/600x400" alt="{{ $categorie->titre }}">
                    </div>
                    <div class="category-content">
                        <h3>{{ $categorie->titre }}</h3>
                        <p>{{ $categorie->description }}</p>
                        
                      
            <ul class="subcategories-list">
           @foreach ($categorie->sousCategories as $sousCategorie)
    <li>
            <a href="{{ route('website.expertise.show', ['slug' => $sousCategorie->slug]) }}">
         {{ $sousCategorie->titre }}
        </a>
    </li>
    @endforeach
</ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection