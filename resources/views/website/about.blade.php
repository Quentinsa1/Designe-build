@extends('partials.template')

@section('content')
<style>
    /* Styles spécifiques à la page À Propos */
    .about-hero {
        background: url('about.jpg');
        background-size: cover;
        background-position: center;
        height: 70vh;
        min-height: 600px;
        display: flex;
        align-items: center;
        color: white;
        position: relative;
        overflow: hidden;
        padding-top: 80px;
    }
    
  
    
    .history-section {
        position: relative;
        background: url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center center;
        background-size: cover;
        background-attachment: fixed;
        padding: 150px 0;
    }
    
    .history-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 33, 105, 0.85);
    }
    
    .history-content {
        position: relative;
        z-index: 2;
        color: white;
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }
    
    .history-content h2 {
        color: white;
        margin-bottom: 30px;
        position: relative;
        display: inline-block;
    }
    
    .history-content h2::after {
        background: var(--gold);
    }
    
    .timeline {
        position: relative;
        max-width: 1200px;
        margin: 100px auto 50px;
    }
    
    .timeline::after {
        content: '';
        position: absolute;
        width: 6px;
        background-color: var(--gold);
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -3px;
        border-radius: 3px;
    }
    
    .timeline-item {
        padding: 10px 40px;
        position: relative;
        width: 50%;
        box-sizing: border-box;
    }
    
    .timeline-item:nth-child(odd) {
        left: 0;
    }
    
    .timeline-item:nth-child(even) {
        left: 50%;
    }
    
    .timeline-content {
        padding: 20px 30px;
        background-color: white;
        position: relative;
        border-radius: 12px;
        box-shadow: var(--shadow);
        transition: var(--transition);
    }
    
    .timeline-content:hover {
        transform: translateY(-10px);
    }
    
    .timeline-item:nth-child(odd) .timeline-content {
        margin-right: 20%;
    }
    
    .timeline-item:nth-child(even) .timeline-content {
        margin-left: 20%;
    }
    
    .timeline-content::after {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        right: -10px;
        background-color: white;
        top: 40px;
        border-radius: 50%;
        z-index: 1;
        border: 4px solid var(--gold);
    }
    
    .timeline-item:nth-child(even) .timeline-content::after {
        left: -10px;
        right: auto;
    }
    
    .timeline-year {
        background: var(--gold);
        color: var(--primary-dark);
        font-weight: bold;
        padding: 5px 15px;
        border-radius: 20px;
        display: inline-block;
        margin-bottom: 15px;
        font-family: 'Playfair Display', serif;
    }
    
    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }
    
    .value-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: var(--transition);
        position: relative;
        z-index: 1;
    }
    
    .value-card:hover {
        transform: translateY(-15px);
        box-shadow: var(--shadow);
    }
    
    .value-icon {
        height: 120px;
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 48px;
        color: white;
    }
    
    .value-content {
        padding: 30px;
    }
    
    .value-content h3 {
        color: var(--primary);
        margin-bottom: 15px;
    }
    
    .team-section {
        background: #f0f4f8;
    }
    
    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
    }
    
    .team-member-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: var(--transition);
        position: relative;
    }
    
    .team-member-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    }
    
    .team-img {
        height: 300px;
      /*   overflow: hidden; */
    }
    
    .team-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .team-member-card:hover .team-img img {
        transform: scale(1.1);
    }
    
    .team-info {
        padding: 25px;
        text-align: center;
    }
    
    .team-info h4 {
        margin-bottom: 5px;
        color: var(--primary);
    }
    
    .team-info .position {
        color: var(--gold);
        font-weight: 500;
        margin-bottom: 15px;
        display: block;
    }
    
    .social-links {
        display: flex;
        justify-content: center;
        gap: 10px;
    }
    
    .social-links a {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #f0f4f8;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary);
        transition: var(--transition);
    }
    
    .social-links a:hover {
        background: var(--primary);
        color: white;
        transform: translateY(-3px);
    }
    
    .cta-section {
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
        color: white;
        padding: 100px 0;
        position: relative;
    }
    
    .cta-content {
        position: relative;
        z-index: 2;
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
    }
    
    @media (max-width: 992px) {
        .timeline::after {
            left: 31px;
        }
        
        .timeline-item {
            width: 100%;
            padding-left: 70px;
            padding-right: 25px;
        }
        
        .timeline-item:nth-child(even) {
            left: 0;
        }
        
        .timeline-item:nth-child(odd) .timeline-content,
        .timeline-item:nth-child(even) .timeline-content {
            margin: 0;
        }
        
        .timeline-content::after {
            left: 15px;
            right: auto;
        }
    }
    
    .floating-element {
        position: absolute;
        z-index: 1;
        opacity: 0.7;
        animation: float 6s ease-in-out infinite;
    }
    
    .floating-element.cube {
        width: 80px;
        height: 80px;
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid rgba(255, 255, 255, 0.2);
        top: 20%;
        left: 10%;
        animation-delay: 0s;
        backdrop-filter: blur(5px);
    }
    
    .floating-element.sphere {
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
    
    .floating-element.pyramid {
        width: 0;
        height: 0;
        border-left: 40px solid transparent;
        border-right: 40px solid transparent;
        border-bottom: 70px solid rgba(255, 255, 255, 0.1);
        top: 40%;
        right: 10%;
        animation-delay: 2s;
    }
/* 002069 */
.bracket-link {
        display: inline-block;
        position: relative;
        padding: 12px 40px;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: #002069; /* Texte blanc */
        text-decoration: none;
        transition: all 0.4s ease;
        margin-top: 20px;
    }
    
    .bracket-link:before,
    .bracket-link:after {
        content: '';
        position: absolute;
        top: 0;
        height: 100%;
        width: 15px;
        transition: all 0.4s ease;
        border-color: #d3af37; /* Crochets dorés */
    }
    
    .bracket-link:before {
        left: 0;
        border-left: 2px solid #d3af37;
        border-top: 2px solid #d3af37;
        border-bottom: 2px solid #d3af37;
    }
    
    .bracket-link:after {
        right: 0;
        border-right: 2px solid #d3af37;
        border-top: 2px solid #d3af37;
        border-bottom: 2px solid #d3af37;
    }
    
    .bracket-link:hover {
        letter-spacing: 2px;
        color:rgb(247, 247, 249); /* Texte devient bleu foncé au survol */
    }
    
    .bracket-link:hover:before {
        left: -10px;
        opacity: 0.8;
    }
    
    .bracket-link:hover:after {
        right: -10px;
        opacity: 0.8;
    }

    .cta-bracket-link {
        display: inline-block;
        position: relative;
        padding: 12px 40px;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: white;
        text-decoration: none;
        transition: all 0.4s ease;
        margin-top: 20px;
    }
    
    .cta-bracket-link:before,
    .cta-bracket-link:after {
        content: '';
        position: absolute;
        top: 0;
        height: 100%;
        width: 15px;
        transition: all 0.4s ease;
        border-color: #d3af37;
    }
    
    .cta-bracket-link:before {
        left: 0;
        border-left: 2px solid #d3af37;
        border-top: 2px solid #d3af37;
        border-bottom: 2px solid #d3af37;
    }
    
    .cta-bracket-link:after {
        right: 0;
        border-right: 2px solid #d3af37;
        border-top: 2px solid #d3af37;
        border-bottom: 2px solid #d3af37;
    }
    
    .cta-bracket-link:hover {
        letter-spacing: 2px;
        color: #d4af37;
    }
    
    .cta-bracket-link:hover:before {
        left: -10px;
        opacity: 0.8;
    }
    
    .cta-bracket-link:hover:after {
        right: -10px;
        opacity: 0.8;
    }
</style>

<!-- Hero Section -->
<section class="about-hero">
    <div class="floating-element cube"></div>
    <div class="floating-element sphere"></div>
    <div class="floating-element pyramid"></div>
    
    <div class="container">
        <div class="hero-content">
            <h1 style="color: #002069">Notre Histoire, Notre Passion</h1>
            <p>
             Découvrez l'héritage d'excellence et d'innovation qui définit <br style="text-align: center;">
            7Elite &amp; Build depuis sa création.</span>
            </p>
            <a href="#history" class="bracket-link">Explorer notre parcours</a>
            </div>
    </div>
</section>

<!-- Notre Histoire -->
<section class="section" id="history">
    <div class="container">
        <div class="section-title animate">
            <h2 style=" color: #002069;">Notre Histoire</h2>
            <p>Un parcours marqué par l'innovation, la qualité et l'excellence</p>
        </div>
        
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 animate">
                <div class="position-relative card-3d">
                    <img src="vr.jpg" alt="Fondation" class="img-fluid rounded">
                    <div class="position-absolute bottom-0 start-0 text-white p-4 m-4 rounded" style="background-color: #d3af37">
                        <h4 class="mb-0">2017</h4>
                        <p class="mb-0">Fondation de l'entreprise</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 animate delay-1">
                <h3 class="mb-4">Des débuts modestes à une reconnaissance nationale</h3>
                <p class="lead">Fondée en 2017 sous le nom AVESIG notre entreprise s'est rapidement imposée comme un acteur majeur dans le secteur de la construction au Bénin.</p>
                <p>Notre transformation en 7Elite & Build en 2025 marque notre engagement à atteindre les plus hauts standards d'excellence. Notre équipe d'experts passionnés allie savoir-faire traditionnel et technologies de pointe pour créer des espaces exceptionnels qui répondent aux besoins les plus exigeants de nos clients.</p>
                <p>Aujourd'hui, nous sommes fiers d'avoir contribué à façonner le paysage urbain de notre région avec plus de 250 projets réalisés.</p>
            </div>
        </div>
    </div>
</section>

<!-- Timeline -->
<section class="history-section">
    <div class="history-overlay"></div>
    <div class="container">
        <div class="history-content animate">
            <h2>Notre Parcours</h2>
            <p>Les étapes marquantes de notre développement</p>
        </div>
        
        <div class="timeline">
            <div class="timeline-item animate">
                <div class="timeline-content">
                    <span class="timeline-year">2017</span>
                    <h3 style='color: #002069'>Fondation de l'entreprise En France</h3>
                    <p>Création d'AVESIG France avec une équipe de personnes passionnées par l'innovation dans le bâtiment.</p>
                </div>
            </div>
            <div class="timeline-item animate delay-1">
                <div class="timeline-content">
                    <span class="timeline-year">2018</span>
                    <h3 style='color: #002069'> Premier projet majeur</h3>
                    <p>Réalisation du complexe résidentiel "Les Jardins d'Abomey", un projet de 50 logements qui établit notre réputation pour la qualité.</p>
                </div>
            </div>
            <div class="timeline-item animate delay-2">
                <div class="timeline-content">
                    <span class="timeline-year">2017</span>
                    <h3 style='color: #002069'>Expansion régionale</h3>
                    <p>Ouverture de nos bureaux au Bénin doublant notre capacité opérationnelle.</p>
                </div>
            </div>
            <div class="timeline-item animate delay-3">
                <div class="timeline-content">
                    <span class="timeline-year">2025</span>
                    <h3 style='color: #002069'>Transformation en 7Elite & Build</h3>
                    <p>Rebranding stratégique pour refléter notre engagement envers l'excellence et l'innovation dans tous les aspects de notre travail.</p>
                </div>
            </div>
            <div class="timeline-item animate">
             <div class="timeline-content">
             <span class="timeline-year">2023</span>
             <h3 style='color: #002069'>Renforcement de l'équipe</h3>
            <p>Intégration de nouveaux talents dans nos équipes, renforçant notre expertise et notre capacité d’innovation.</p>
            </div>
            </div>

        </div>
    </div>
</section>

<!-- Nos Valeurs -->
<section class="section bg-light">
    <div class="container">
        <div class="section-title animate">
            <h2 style='color: #002069'>Nos Valeurs Fondamentales</h2>
            <p>Les principes qui guident chaque décision et chaque projet</p>
        </div>
        
        <div class="values-grid">
            <div class="value-card animate">
                <div class="value-icon">
                    <i class="fas fa-medal"></i>
                </div>
                <div class="value-content">
                    <h3>Excellence</h3>
                    <p>Nous visons la perfection dans chaque détail, des matériaux sélectionnés à la finition ultime. Notre réputation repose sur notre engagement envers la qualité inégalée.</p>
                </div>
            </div>
            
            <div class="value-card animate delay-1">
                <div class="value-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <div class="value-content">
                    <h3>Innovation</h3>
                    <p>Nous adoptons les dernières technologies de construction, du BIM à l'impression 3D, pour créer des solutions avant-gardistes qui redéfinissent les standards du secteur.</p>
                </div>
            </div>
            
            <div class="value-card animate delay-2">
                <div class="value-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <div class="value-content">
                    <h3>Intégrité</h3>
                    <p>Transparence, honnêteté et respect mutuel sont au cœur de nos relations avec clients, partenaires et employés. Nous tenons toujours nos engagements.</p>
                </div>
            </div>
            
            <div class="value-card animate delay-3">
                <div class="value-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <div class="value-content">
                    <h3>Durabilité</h3>
                    <p>Nous construisons pour l'avenir en intégrant des pratiques écologiques, des matériaux durables et des solutions énergétiques efficaces dans chaque projet.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Notre Équipe -->
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
            
            </div>
        </div>
    </section>

<!-- Stats -->
<section class="stats-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6">
                <div class="stat-box animate">
                    <div class="stat-number" data-count="500">250+</div>
                    <div class="stat-label">Projets Réalisés</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-box animate delay-1">
                    <div class="stat-number" data-count="10">10+</div>
                    <div class="stat-label">Années d'Expérience</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-box animate delay-2">
                    <div class="stat-number" data-count="150">150+</div>
                    <div class="stat-label">Professionnels</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-box animate delay-3">
                    <div class="stat-number" data-count="98">98 %</div>
                    <div class="stat-label">Clients Satisfaits</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content animate">
            <h2 style="color: #d4af37">Prêt à concrétiser votre projet ?</h2>
            <p class="lead mb-4">Notre équipe d'experts est à votre disposition pour discuter de votre vision et la transformer en réalité architecturale.</p>
            <a href="{{ route('website.contact')}}" class="cta-bracket-link">Contactez-nous</a>
        </div>
    </div>
</section>
@endsection