@extends('partials.template')

@section('content')

<style>
    /* Hero Section avec Carrousel */
    .hero {
        position: relative;
        height: 100vh;
        min-height: 700px;
        overflow: hidden;
    }
    
    .hero-slider {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
    }
    
    .slide {
        position: absolute;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        opacity: 0;
        transition: opacity 1.5s ease-in-out;
        z-index: 1;
    }
    
    .slide.active {
        opacity: 1;
        z-index: 2;
    }
    
    /* Première image */
    .slide:nth-child(1) {
        background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(236, 236, 236, 0)), 
        url("ACCEUIL 1'''.jpg");
    }
    
    /* Deuxième image */
    .slide:nth-child(2) {
        background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), 
        url("GTT.jpg");
    }
    
    /* Troisième image */
    .slide:nth-child(3) {
        background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), 
        url("ACCEUIL.jpg");
    }
    
    .hero-content {
        position: relative;
        z-index: 3;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: white;
        text-align: center;
        padding: 0 20px;
    }
    
    .hero-content h1 {
        font-size: 4rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        animation: fadeInUp 1s ease-out forwards;
    }
    
    .hero-content p {
        font-size: 1.5rem;
        max-width: 800px;
        margin: 0 auto 2.5rem;
        animation: fadeInUp 1s ease-out 0.3s forwards;
        opacity: 0;
    }
    
    .btn-primary {
        padding: 15px 40px;
        font-size: 1.2rem;
        font-weight: 600;
        border-radius: 50px;
        transition: all 0.3s ease;
        animation: fadeInUp 1s ease-out 0.6s forwards;
        opacity: 0;
        display: inline-block;
    }
    
    /* Animation des éléments flottants */
    .floating-element {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(5px);
        z-index: 2;
        animation: float 15s infinite ease-in-out;
    }
    
    .cube {
        width: 100px;
        height: 100px;
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }
    
    .sphere {
        width: 150px;
        height: 150px;
        bottom: 15%;
        right: 10%;
        animation-delay: 2s;
    }
    
    .pyramid {
        width: 80px;
        height: 80px;
        top: 60%;
        left: 15%;
        animation-delay: 4s;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-30px) rotate(10deg); }
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Indicateurs de slide */
    .slide-indicators {
        position: absolute;
        bottom: 30px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        z-index: 4;
    }
    
    .indicator {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        margin: 0 8px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .indicator.active {
        background: white;
        transform: scale(1.3);
    }
    
    /* Responsive */
    @media (max-width: 992px) {
        .hero-content h1 {
            font-size: 3rem;
        }
        
        .hero-content p {
            font-size: 1.2rem;
        }
    }
    
    @media (max-width: 768px) {
        .hero {
            min-height: 600px;
        }
        
        .hero-content h1 {
            font-size: 2.5rem;
        }
        
        .hero-content p {
            font-size: 1.1rem;
        }
        
        .btn-primary {
            padding: 12px 30px;
            font-size: 1rem;
        }
    }
    
    @media (max-width: 576px) {
        .hero {
            min-height: 500px;
        }
        
        .hero-content h1 {
            font-size: 2rem;
        }
    }
    .button-container {
        display: flex;
        justify-content: center;
        width: 100%;
        margin-top: 2rem;
    }

    .bracket-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 1.2rem 2.5rem;
        font-size: 1.6rem;
        font-weight: 700;
        text-decoration: none;
        color: #fff;
        background: transparent;
        position: relative;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: none;
        animation: fadeInUp 1s ease-out 0.6s forwards;
        opacity: 0;
        overflow: visible;
    }

    .bracket {
        font-size: 2.2rem;
        font-weight: 800;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        color: #D4AF37;
        position: relative;
        z-index: 1;
    }

    .button-text {
        padding: 0 1.2rem;
        transition: all 0.3s ease;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        position: relative;
        z-index: 1;
        font-weight: 600;
    }

    /* Effets de survol élégants */
    .bracket-button:hover .bracket-left {
        transform: translateX(-12px) scale(1.3);
        color: #fff;
        text-shadow: 0 0 15px rgba(212, 175, 55, 0.7);
    }

    .bracket-button:hover .bracket-right {
        transform: translateX(12px) scale(1.3);
        color: #fff;
        text-shadow: 0 0 15px rgba(212, 175, 55, 0.7);
    }

    .bracket-button:hover .button-text {
        letter-spacing: 2.5px;
        color: #D4AF37;
        text-shadow: 0 0 10px rgba(212, 175, 55, 0.5);
    }

    /* Animation des crochets au chargement */
    @keyframes bracketEnter {
        0% {
            opacity: 0;
            transform: translateX(-20px);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .bracket-left {
        animation: bracketEnter 0.8s ease-out 0.8s forwards;
        opacity: 0;
    }

    .bracket-right {
        animation: bracketEnter 0.8s ease-out 0.8s forwards;
        opacity: 0;
    }

    
    .feature-icon {
        margin-bottom: 1.5rem;
        font-size: 4rem; /* Taille agrandie */
        color: #d4af37; /* Couleur principale */
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        display: block;
        position: relative;
        background: transparent !important; /* Aucun fond */
        border: none !important; /* Aucune bordure */
        padding: 0 !important; /* Pas de padding */
        width: auto !important; /* Largeur naturelle */
        height: auto !important; /* Hauteur naturelle */
    }

  

    

    @keyframes iconFadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Style minimaliste pour les boîtes de service */
    .feature-box {
        text-align: center;
        padding: 3rem 2rem;
        background: white;
        border-radius: 12px;
        box-shadow: 0 7px 30px rgba(0, 32, 105, 0.05);
        transition: all 0.4s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(0, 32, 105, 0.05);
    }

  

    .feature-box h3 {
        margin-bottom: 1.2rem;
        font-weight: 700;
        color: #002069;
        position: relative;
        padding-bottom: 10px;
        font-size: 1.5rem;
    }

</style>
  <!-- Hero Section -->
  <section class="hero">
    <!-- Carrousel d'images -->
    <div class="hero-slider">
        <div class="slide active"></div>
        <div class="slide"></div>
        <div class="slide"></div>
    </div>
    
    <!-- Éléments flottants décoratifs -->
   <!--  <div class="floating-element cube"></div>
    <div class="floating-element sphere"></div>
    <div class="floating-element pyramid"></div> -->
    
    <!-- Contenu du hero -->
    <div class="container">
        <div class="hero-content">
            <h1>Construire l'avenir avec excellence et innovation</h1>
            <p>7Elite Design & Build transforme vos visions architecturales en réalités durables et élégantes. Notre expertise allie savoir-faire traditionnel et technologies de pointe pour des résultats exceptionnels.</p>
            <div class="button-container">
            <a href="#services" class="bracket-button">
                <span class="bracket bracket-left">[</span>
                <span class="button-text">NOS DOMAINES D'ACTIVITÉ</span>
                <span class="bracket bracket-right">]</span>
            </a>
        </div>
        </div>
    </div>
    
    <!-- Indicateurs de slide -->
    <div class="slide-indicators">
        <div class="indicator active" data-slide="0"></div>
        <div class="indicator" data-slide="1"></div>
        <div class="indicator" data-slide="2"></div>
    </div>
</section>
    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="stat-box animate">
                        <div class="stat-number" data-count="250">500+</div>
                        <div class="stat-label">Projets Réalisés</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-box animate delay-1">
                        <div class="stat-number" data-count="15">10+</div>
                        <div class="stat-label">Années d'Expérience</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-box animate delay-2">
                        <div class="stat-number" data-count="98">500+</div>
                        <div class="stat-label">Clients Satisfaits</div>
                    </div>
                </div>
             
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <div class="section-title animate">
                <h2>À Propos de Nous</h2>
                <p>Découvrez notre histoire, notre passion et notre engagement envers l'excellence</p>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0 animate">
                    <div class="position-relative card-3d">
                        <img src="DER.jpg" alt="À propos" class="img-fluid rounded shadow-lg">
                        <div class="position-absolute bottom-0 start-0 text-white p-4 m-4 rounded" style='background-color: #d4af37'>
                            <h4 class="mb-0" style='color: #002069'>Depuis plusieurs années</h4>
                            <p class="mb-0">Excellence en construction</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 animate delay-1">
                    <h3 class="mb-4" style="color: #002069">Notre Histoire et Notre Passion</h3>
                    <p class="lead">Fondée depuis plusieurs années, <strong style ="font-weight:bold; color: #002069">7Elite IAC</strong>  qui existait autrefois sous le nom AVESIG s'est imposée comme un leader dans le secteur de la construction haut de gamme grâce à son engagement inébranlable envers la qualité et l'innovation.</p>
                    <p>Notre équipe d'experts passionnés allie savoir-faire traditionnel et technologies de pointe pour créer des espaces exceptionnels qui répondent aux besoins les plus exigeants de nos clients.</p>
                    <div class="mt-4">
                       <!--  <div class="d-flex align-items-center mb-3">
                            <div class="text-white rounded-circle p-3 me-3" style="background-color: #002069">
                                <i class="fas fa-medal fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Certification Qualité</h5>
                                <p class="mb-0">Normes ISO 9001 et Qualibat</p>
                            </div>
                        </div> -->
                        <div class="d-flex align-items-center">
                            <div class="text-white rounded-circle p-3 me-3"  style="background-color: #d4af37">
                                <i class="fas fa-leaf fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="mb-0" style="color: #002069">Construction Durable</h5>
                                <p class="mb-0">Matériaux écologiques et économes en énergie</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section bg-light" id="services">
    <div class="container">
        <div class="section-title animate">
            <h2>Nos Domaines d'Activité</h2>
            <p>Découvrez notre savoir-faire en conception et réalisation de projets intégrés (Design & Build)</p>
        </div>
        
        <div class="row">
            <div class="col-md-4 animate">
                <div class="feature-box">
                    <div class="feature-icon" style="--delay: 1">
                        <i class="fas fa-building" style='color: #d4af37'></i>
                    </div>
                    <h3>Bâtiment</h3>
                    <p>Conception et construction de bâtiments résidentiels et professionnels alliant esthétique, fonctionnalité et durabilité.</p>
                </div>
            </div>
            
            <div class="col-md-4 animate delay-1">
                <div class="feature-box">
                    <div class="feature-icon" style="--delay: 2">
                        <i class="fas fa-road" ></i>
                    </div>
                    <h3>Voirée et Réseaux Divers (VRD)</h3>
                    <p>Études et réalisation d'infrastructures urbaines : routes, assainissement, réseaux d'eau, d'électricité et télécoms.</p>
                </div>
            </div>
            
            <div class="col-md-4 animate delay-2">
                <div class="feature-box">
                    <div class="feature-icon" style="--delay: 3">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3>Topographie et Cartographie</h3>
                    <p>Relevés précis et modélisations géographiques pour une conception technique fiable et optimisée des projets.</p>
                </div>
            </div>
            
            <div class="col-md-4 animate">
                <div class="feature-box">
                    <div class="feature-icon" style="--delay: 4">
                        <i class="fas fa-traffic-light"></i>
                    </div>
                    <h3>Ville, Transport et Mobilité</h3>
                    <p>Conception d'espaces urbains durables, intégrant les flux de transport, la sécurité et le confort des usagers.</p>
                </div>
            </div>
            
            <div class="col-md-4 animate delay-1">
                <div class="feature-box">
                    <div class="feature-icon" style="--delay: 5">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Eau et Assainissement</h3>
                    <p>Conception et mise en œuvre de solutions durables pour l'accès à l'eau potable et la gestion des eaux usées.</p>
                </div>
            </div>
            
            <div class="col-md-4 animate delay-2">
                <div class="feature-box">
                    <div class="feature-icon" style="--delay: 6">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <h3>Conception Sur Mesure</h3>
                    <p>Architecture et ingénierie personnalisées pour des projets uniques répondant à vos objectifs techniques et esthétiques.</p>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Innovation Section -->
    <section class="section" id="innovation">
        <div class="container">
            <div class="section-title animate">
                <h2>Notre Particularité</h2>
                <p>Ce qui nous distingue dans l'industrie de la construction</p>
            </div>
            
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0 animate">
                    <div class="position-relative glass-card">
                        <h3 class="mb-4" style="color: #002069">Innovation et Excellence</h3>
                        <p>Chez 7Elite & Build, nous combinons des techniques de construction avancées avec des matériaux de qualité supérieure pour créer des espaces qui dépassent les attentes.</p>
                        <ul class="list-unstyled mt-4">
                            <li class="mb-3 d-flex">
                                <i class="fas fa-check-circle me-3 mt-1 text-gold" style="color: #d4af37"></i>
                                <span>Approche personnalisée pour chaque projet</span>
                            </li>
                            <li class="mb-3 d-flex">
                                <i class="fas fa-check-circle me-3 mt-1 text-gold" style="color: #d4af37"></i>
                                <span>Utilisation de technologies de pointe (BIM, impression 3D, ...)</span>
                            </li>
                            <li class="mb-3 d-flex">
                                <i class="fas fa-check-circle me-3 mt-1 text-gold" style="color: #d4af37"></i>
                                <span>Engagement envers le développement durable</span>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-check-circle me-3 mt-1 text-gold" style="color: #d4af37"></i>
                                <span>Respect strict des délais et budgets</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 animate delay-1">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="feature-box h-100">
                                <div class="feature-icon">
                                    <i class="fas fa-medal"></i>
                                </div>
                                <h3>Excellence</h3>
                                <p>Nous nous engageons à fournir un travail de la plus haute qualité dans chaque projet que nous entreprenons.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="feature-box h-100">
                                <div class="feature-icon">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <h3>Innovation</h3>
                                <p>Des solutions créatives et des techniques de construction avancées pour des résultats exceptionnels.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box h-100">
                                <div class="feature-icon">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <h3>Fiabilité</h3>
                                <p>Respect des délais et des budgets, avec une communication transparente tout au long du projet.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box h-100">
                                <div class="feature-icon">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <h3>Durabilité</h3>
                                <p>Engagement envers des pratiques écologiques et des matériaux durables.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section bg-light" id="team">
        <div class="container">
            <div class="section-title animate">
                <h2>Notre Équipe de Direction</h2>
                <p>Rencontrez les professionnels qui donnent vie à vos projets</p>
            </div>
            
            <div class="row"  style="padding-left: 300px">
                <div class="col-md-4 animate">
                    <div class="team-member card-3d">
                        <div class="team-img">
                            <img src="assets/images/eeee.jpg" alt="DG Design & Build" class="team-photo">
                        </div>
                        <div class="team-overlay">
                            <h4 style="color: white;">Directeur Général</h4>
                            <p style="color: white;">Amos HOUEWATONOU</p>
                            <div class="social-icons mt-3">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 animate delay-1">
                    <div class="team-member card-3d">
                        <div class="team-img">
                            <img src="assets/images/eeee copieJJ (1).jpg" alt="Directeur AF" class="team-photo">
                        </div>
                        <div class="team-overlay">
                            <h4 style="color: white;">Mme Espérance HOUEWATONOU</h4>
                            <p style="color: white;">Directrice Administratif et Financier</p>
                            <div class="social-icons mt-3">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram" ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- <div class="col-md-4 animate delay-2">
                    <div class="team-member card-3d">
                        <div class="team-img">
                            <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Designer d'intérieur">
                        </div>
                        <div class="team-overlay">
                            <h4>Mr RAOUL</h4>
                            <p>Directeur Régional</p>
                            <div class="social-icons mt-3">
                                <a href="#"><i class="fab fa-linkedin-in" style='color: #d4af37'></i></a>
                                <a href="#"><i class="fab fa-twitter" style='color: #d4af37'></i></a>
                                <a href="#"><i class="fab fa-instagram" style='color: #d4af37'></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section" id="contact">
        <div class="container">
            <div class="section-title animate">
                <h2>Contactez-Nous</h2>
                <p>Discutons de votre prochain projet</p>
            </div>
            
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0 animate">
                    <div class="glass-card h-100">
                        <h3 class="mb-4" style="color: #002069;">Coordonnées</h3>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="fas fa-map-marker-alt me-2" style='color: #d4af37'></i>
                                <strong style="color: #002069;">Adresse:</strong> Cotonou, Sikècodji
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-phone me-2" style='color: #d4af37'></i>
                                <strong style="color: #002069;">Téléphone:</strong> + 229 01 99 53 57 60 
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-envelope me-2" style='color: #d4af37'></i>
                                <strong style="color: #002069;">Email:</strong> contact@7elite-build.fr
                            </li>
                            <li class="mb-4">
                                <i class="fas fa-clock me-2" style='color: #d4af37'></i>
                                <strong style="color: #002069;">Horaires:</strong> Lun-Ven: 8h30 - 18h00
                            </li>
                        </ul>
                        
                        <div class="mt-5">
                            <h4 class="mb-4" style="color: #002069;">Suivez-Nous</h4>
                            <div class="social-icons">
                                <a href="#" ><i class="fab fa-facebook-f" style="color: #d4af37;"></i></a>
                                <a href="#"><i class="fab fa-twitter" style="color: #d4af37;"></i></a>
                                <a href="#"><i class="fab fa-instagram" style="color: #d4af37;"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in" style="color: #d4af37;"></i></a>
                                <a href="#"><i class="fab fa-pinterest" style="color: #d4af37;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 animate delay-1">
                    <div class="contact-form">
                        <h3 class="mb-4" style="color: #002069">Envoyez un message</h3>

                        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

                        <form id="contactForm" action="{{ route('messages.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <input type="text" name="nom" class="form-control" placeholder="Votre nom" required>
        </div>
        <div class="col-md-6 mb-3">
            <input type="email" name="email" class="form-control" placeholder="Votre email" required>
        </div>
    </div>
    <div class="mb-3">
        <input type="text" name="sujet" class="form-control" placeholder="Sujet">
    </div>
    <div class="mb-3">
        <input type="text" name="telephone" class="form-control" placeholder="Téléphone">
    </div>
    <div class="mb-3">
        <textarea name="message" class="form-control" rows="5" placeholder="Votre message" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary w-100">Envoyer le message</button>
</form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    // Carrousel automatique
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.slide');
        const indicators = document.querySelectorAll('.indicator');
        let currentSlide = 0;
        const slideCount = slides.length;
        
        function showSlide(index) {
            // Masquer toutes les slides
            slides.forEach(slide => slide.classList.remove('active'));
            indicators.forEach(ind => ind.classList.remove('active'));
            
            // Afficher la slide courante
            slides[index].classList.add('active');
            indicators[index].classList.add('active');
            currentSlide = index;
        }
        
        function nextSlide() {
            currentSlide = (currentSlide + 1) % slideCount;
            showSlide(currentSlide);
        }
        
        // Changement automatique toutes les 5 secondes
        setInterval(nextSlide, 5000);
        
        // Navigation via les indicateurs
        indicators.forEach(indicator => {
            indicator.addEventListener('click', function() {
                const slideIndex = parseInt(this.getAttribute('data-slide'));
                showSlide(slideIndex);
            });
        });
    });
</script>

@endsection