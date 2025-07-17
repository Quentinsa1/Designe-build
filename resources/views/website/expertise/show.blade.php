@extends('partials.template')

@section('content')
<style>
    /* Expertise Detail */
    .expertise-detail {
        padding: 100px 0;
    }
    
    .detail-header {
        margin-bottom: 50px;
    }
    
    .detail-header h1 {
        font-size: 2.8rem;
        margin-bottom: 20px;
        color: #333;
    }
    
    .breadcrumb {
        background: transparent;
        padding: 0;
    }
    
    .detail-content {
        margin-bottom: 50px;
    }
    
    .detail-img {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        margin-bottom: 30px;
    }
    
    .detail-img img {
        width: 100%;
        height: auto;
    }
    
    .detail-text {
        margin-bottom: 30px;
    }
    
    .detail-text h2 {
        font-size: 1.8rem;
        margin-bottom: 20px;
        color: #333;
        padding-bottom: 10px;
        border-bottom: 3px solid #f39c12;
        display: inline-block;
    }
    
    .services-list {
        list-style: none;
        padding: 0;
    }
    
    .services-list li {
        margin-bottom: 15px;
        padding-left: 30px;
        position: relative;
    }
    
    .services-list li::before {
        content: '\f00c';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        position: absolute;
        left: 0;
        top: 2px;
        color: #f39c12;
    }
    
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }
    
    .feature-card {
        background: white;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
    }
    
    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.12);
    }
    
    .feature-icon {
        width: 70px;
        height: 70px;
        background: rgba(243, 156, 18, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }
    
    .feature-icon i {
        font-size: 30px;
        color: #f39c12;
    }
    
    .feature-card h3 {
        font-size: 1.4rem;
        margin-bottom: 15px;
        color: #333;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .expertise-detail {
            padding: 60px 0;
        }
        
        .detail-header h1 {
            font-size: 2.2rem;
        }
    }
    /* Hero Subpage */
    .hero-subpage {
        padding: 140px 0 80px;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                    url('about.jpg');
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
        color:rgb(194, 135, 42);
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
                <h1>{{ $subcategory->nom }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('website.index') }}">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('website.expertise.index') }}">Domaines d'Expertise</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $subcategory->categorie ? $subcategory->categorie->titre : 'Catégorie inconnue' }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Expertise Detail -->
<section class="expertise-detail">
    <div class="container">
        <div class="detail-header">
            <h1>{{ $subcategory->nom }}</h1>
            <p>Découvrez notre expertise dans ce domaine spécifique</p>
        </div>
        
        <div class="row detail-content">
            <div class="col-lg-8">
                <div class="detail-img">
                    <img src="https://via.placeholder.com/800x500" alt="{{ $subcategory->nom }}">
                </div>
                
                <div class="detail-text">
                    <h2>Notre Expertise</h2>
                    <p>{{ $subcategory->description }}</p>
                    <p>Chez 7Elite Design & Build, nous combinons innovation technique et savoir-faire traditionnel pour offrir des solutions sur mesure dans le domaine de {{ $subcategory->nom }}. Nos équipes d'experts maîtrisent les dernières technologies et normes du secteur pour garantir des résultats exceptionnels.</p>
                </div>
                
                <div class="detail-text">
                    <h2>Services Spécifiques</h2>
                    <ul class="services-list">
                        @if($subcategory->categorie->titre == 'Topographie et Cartographie (SIG)')
                            <li>Relevé topographique et levé à différentes échelles</li>
                            <li>Implantation d'ouvrages</li>
                            <li>Nivellement statique et dynamique</li>
                            <li>Utilisation de la station totale</li>
                            <li>Nivellement et GPS</li>
                            <li>Saisie sous SIG</li>
                            <li>Cartographie thématique</li>
                            <li>Analyse spatiale</li>
                        @elseif($subcategory->categorie->titre == 'Ville, Transport et Mobilité')
                            <li>Études de mobilité, de trafics, de transport et d'aménagement urbain</li>
                            <li>Étude d'impact de la transition énergétique et écologique</li>
                            <li>Accompagnement d'acteurs (ANV)</li>
                            <li>Études de sécurité routière et maîtrise d'ouvrage</li>
                        @elseif($subcategory->categorie->titre == 'Eaux et Assainissement')
                            <li>Études hydrauliques</li>
                            <li>Études et dimensionnement d'ouvrages</li>
                            <li>Gestion d'inondation</li>
                            <li>Modélisation hydraulique et hydrologique</li>
                            <li>Maîtrise d'œuvre complète</li>
                        @elseif($subcategory->categorie->titre == 'Bâtiment')
                            <li>Maîtrise d'œuvre bâtiment et ouvrages</li>
                            <li>Études et réalisation</li>
                            <li>Génie civil / structure</li>
                            <li>Conception des bâtiments</li>
                            <li>Réhabilitation</li>
                            <li>Coordination de travaux</li>
                            <li>Suivi / planification</li>
                            <li>Économie de la construction (ECO)</li>
                        @elseif($subcategory->categorie->titre == 'Voirie et Réseaux Divers (VRD)')
                            <li>Aménagement urbain et réhabilitation de voiries</li>
                            <li>Conception / dimensionnement des réseaux hydrauliques</li>
                            <li>Contrôle de l'environnement des ouvrages et diagnostics</li>
                            <li>Calculs d'assainissement</li>
                            <li>Études de faisabilité, contrôle et suivi de projets</li>
                            <li>Économie de Projet et Coordination (OPC)</li>
                        @elseif($subcategory->categorie->titre == 'Building Information Modeling (BIM/CM)')
                            <li>AMO BIM</li>
                            <li>Scan 3D</li>
                            <li>Solution et maquette BIM</li>
                            <li>Détection de conflits (GTB)</li>
                            <li>Audit de maquettes BIM</li>
                            <li>Gestion Technique du Bâtiment (GTC)</li>
                        @endif
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg">
                    <div class="card-header bg-primary text-white py-3">
                        <h3 class="mb-0">Domaines Associés</h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @foreach($subcategory->categorie->sousCategories as $sous)
                            <li class="list-group-item d-flex align-items-center">
                                @if($sous->id === $subcategory->id)
                                <i class="fas fa-arrow-right me-2 text-primary"></i>
                                <strong>{{ $sous->nom }}</strong>
                                @else
                                <i class="far fa-dot-circle me-2 text-muted"></i>
                                <a href="{{ route('website.expertise.show', $sous->slug) }}">
                                {{ $sous->nom }}</a>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                
                <div class="mt-4 card border-0 shadow-lg">
                    <div class="card-header bg-primary text-white py-3">
                        <h3 class="mb-0">Demande de Devis</h3>
                    </div>
                    <div class="card-body">
                        <p>Vous avez un projet dans ce domaine ?</p>
                        <p>Notre équipe d'experts est à votre disposition pour étudier votre projet et vous proposer une solution sur mesure.</p>
                        <a href="{{ route('website.contact') }}" class="btn btn-primary w-100 mt-3">
                            <i class="fas fa-paper-plane me-2"></i>Demander un devis
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3>Solutions Innovantes</h3>
                <p>Nous développons des approches créatives pour résoudre les défis techniques les plus complexes.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Optimisation des Coûts</h3>
                <p>Nos solutions sont conçues pour maximiser votre retour sur investissement tout en garantissant la qualité.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3>Approche Durable</h3>
                <p>Intégration des principes de développement durable dans toutes nos réalisations.</p>
            </div>
        </div>
    </div>
</section>
@endsection