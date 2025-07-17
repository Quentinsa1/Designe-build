@extends('partials.template')

@section('content')
<style>
    /* Styles spécifiques à la page Contact */
    .contact-hero {
        background: linear-gradient(135deg, rgba(126, 133, 148, 0) 0%, rgba(131, 142, 164, 0.04) 50%, rgba(0, 33, 105, 0.7) 100%), 
                    url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
        background-size: cover;
        background-position: center;
        height: 60vh;
        min-height: 500px;
        display: flex;
        align-items: center;
        color: white;
        position: relative;
        overflow: hidden;
        padding-top: 80px;
    }
    
    .contact-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, 
                    rgba(0, 33, 105, 0.37) 0%, 
                    rgba(0, 33, 105, 0.3) 50%, 
                    rgba(0, 33, 105, 0.2) 100%);
        animation: gradientShift 12s ease infinite;
        background-size: 200% 200%;
        z-index: 0;
    }
    
    .contact-info-card {
        background: white;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        height: 100%;
        transition: var(--transition);
    }
    
    .contact-info-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    }
    
    .contact-info-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        background: var(--primary-light);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        color: var(--primary);
        margin-bottom: 20px;
    }
    
    .contact-form-wrapper {
        background: white;
        border-radius: 16px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }
    
    .form-control {
        height: 50px;
        border-radius: 8px;
        border: 1px solid #e0e6ed;
        padding-left: 20px;
        transition: var(--transition);
    }
    
    .form-control:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 0.2rem rgba(0, 33, 105, 0.1);
    }
    
    textarea.form-control {
        height: auto;
        padding-top: 15px;
    }
    
    .btn-send {
        background: var(--primary);
        color: white;
        border: none;
        padding: 12px 30px;
        font-weight: 600;
        border-radius: 8px;
        transition: var(--transition);
    }
    
    .btn-send:hover {
        background: var(--primary-dark);
        transform: translateY(-3px);
    }
    
    .map-container {
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        height: 400px;
    }
    
    .map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
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
    
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
        100% { transform: translateY(0px); }
    }
    
    @keyframes gradientShift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
</style>

<!-- Hero Section -->
<section class="contact-hero">
    <div class="floating-element cube"></div>
    <div class="floating-element sphere"></div>
    <div class="floating-element pyramid"></div>
    
    <div class="container">
        <div class="hero-content">
            <h1 style="color: white;">Contactez Notre Équipe</h1>
            <p>Nous sommes à votre écoute pour répondre à toutes vos questions et discuter de votre prochain projet.</p>
            <a href="#contact-form" class="btn btn-primary btn-lg">Envoyer un message</a>
        </div>
    </div>
</section>

<!-- Contact Info -->
<section class="section">
    <div class="container">
        <div class="section-title animate">
            <h2>Nos Coordonnées</h2>
            <p>Plusieurs façons de nous contacter</p>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4 animate">
                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Adresse</h3>
                    <p>Cotonou, Sikècodji<br>Bénin</p>
                    <a href="https://maps.google.com" target="_blank" class="text-primary">Voir sur la carte →</a>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 animate delay-1">
                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h3>Téléphone</h3>
                    <p>+229 01 99 53 57 60<br>Lun-Ven: 8h30 - 18h00</p>
                    <a href="tel:+2290199535760" class="text-primary">Appeler maintenant →</a>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 animate delay-2">
                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email</h3>
                    <p>contact@7elite-build.fr<br>support@7elite-build.fr</p>
                    <a href="mailto:contact@7elite-build.fr" class="text-primary">Envoyer un email →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Map -->
<section class="section bg-light" id="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0 animate">
                <div class="contact-form-wrapper">
                    <h2 class="mb-4">Envoyez-nous un message</h2>
                    <p class="mb-5">Remplissez le formulaire ci-dessous et notre équipe vous répondra dans les plus brefs délais.</p>
                    
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <input type="text" class="form-control" placeholder="Votre nom" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="email" class="form-control" placeholder="Votre email" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control" placeholder="Sujet" required>
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control" rows="5" placeholder="Votre message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-send">Envoyer le message</button>
                    </form>
                </div>
            </div>
            
            <div class="col-lg-6 animate delay-1">
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.372212253035!2d2.439123315231847!3d6.355995595392981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023555e8a0a0a0a%3A0x5a5a5a5a5a5a5a5a!2sCotonou%2C%20B%C3%A9nin!5e0!3m2!1sfr!2sfr!4v1620000000000!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy"></iframe>
                </div>
                
                <div class="mt-4">
                    <h4 class="mb-3">Suivez-nous</h4>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section">
    <div class="container">
        <div class="section-title animate">
            <h2>Questions Fréquentes</h2>
            <p>Retrouvez ici les réponses aux questions les plus posées</p>
        </div>
        
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item animate">
                <h3 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Quels sont vos horaires d'ouverture ?
                    </button>
                </h3>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Nos bureaux sont ouverts du lundi au vendredi de 8h30 à 18h00. Vous pouvez également nous contacter par email à tout moment, nous nous engageons à répondre dans un délai de 24 heures.
                    </div>
                </div>
            </div>
            
            <div class="accordion-item animate delay-1">
                <h3 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Comment puis-je obtenir un devis pour mon projet ?
                    </button>
                </h3>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Vous pouvez nous contacter via le formulaire sur cette page en décrivant votre projet, ou nous appeler directement. Nous organiserons ensuite une rencontre pour discuter de vos besoins en détail et établir un devis personnalisé.
                    </div>
                </div>
            </div>
            
            <div class="accordion-item animate delay-2">
                <h3 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Dans quelles zones géographiques intervenez-vous ?
                    </button>
                </h3>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Nous intervenons principalement dans tout le Bénin, avec une forte présence à Cotonou et dans les régions avoisinantes. Pour les projets internationaux, n'hésitez pas à nous contacter pour évaluer ensemble la faisabilité.
                    </div>
                </div>
            </div>
            
            <div class="accordion-item animate delay-3">
                <h3 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Quelles sont les étapes pour démarrer un projet avec vous ?
                    </button>
                </h3>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Notre processus se déroule en 4 étapes : 1) Premier contact et analyse de vos besoins, 2) Étude de faisabilité et proposition, 3) Validation et planification, 4) Réalisation du projet avec des points d'étape réguliers. Nous accompagnons chaque client tout au long de ce processus.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0 animate">
                <h2 class="mb-3">Prêt à concrétiser votre projet ?</h2>
                <p class="lead mb-0">Contactez-nous dès aujourd'hui pour discuter de vos idées et obtenir un accompagnement personnalisé.</p>
            </div>
            <div class="col-lg-4 text-lg-end animate delay-1">
                <a href="#contact-form" class="btn btn-light btn-lg">Nous contacter</a>
            </div>
        </div>
    </div>
</section>
@endsection