<div class="expertise-section py-5 bg-light position-relative overflow-hidden">
    <!-- Fond décoratif -->
    <div class="position-absolute top-0 end-0 w-100 h-100" style="background: radial-gradient(circle at 80% 20%, rgba(240, 167, 7, 0.03) 0%, transparent 30%); z-index: 0;"></div>

    <div class="container py-4 position-relative z-1">
        <!-- En-tête -->
        <div class="text-center mb-5">
            <span class="d-block text-uppercase fw-bold letter-spacing-2 mb-3" style="color: #f0a707; font-size: 0.9rem;">NOS SAVOIR-FAIRE</span>
            <h2 class="display-5 fw-bold mb-4" style="color: #002169;">Excellence dans chaque domaine</h2>
            <div class="mx-auto" style="width: 80px; height: 3px; background: linear-gradient(to right, #002169, #f0a707);"></div>
        </div>

        <!-- Grille d'expertises -->
        <div class="row g-4">
            @foreach($categories as $category)
            <div class="col-lg-4 col-md-6">
                <div class="expertise-card h-100 p-4 position-relative overflow-hidden transition-all">
                    <!-- Icône -->
                    <div class="icon-wrapper mb-4 mx-auto rounded-circle d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; background: rgba(0, 33, 105, 0.1); color: #002169; font-size: 1.8rem;">
                        <i class="fas fa-{{ $loop->index % 3 == 0 ? 'shield-alt' : ($loop->index % 3 == 1 ? 'hammer' : 'code') }}"></i>
                    </div>

                    <!-- Contenu -->
                    <div class="text-center">
                        <h3 class="h4 fw-bold mb-3" style="color: #002169;">{{ $category->titre }}</h3>
                        <p class="text-muted mb-4">Description courte de l'expertise ou bénéfice clé pour le client.</p>
                        <a href="{{ route('expertises.show', $category->id) }}" class="btn-link fw-bold text-decoration-none" style="color: #002169;">
                            En savoir plus <i class="fas fa-arrow-right ms-2 transition-all"></i>
                        </a>
                    </div>

                    <!-- Effet de survol -->
                    <div class="hover-effect position-absolute bottom-0 start-0 w-100" style="height: 3px; background: linear-gradient(to right, #002169, #f0a707); transform: scaleX(0); transform-origin: left; transition: transform 0.3s ease;"></div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Bouton "Voir tout" -->
        <div class="text-center mt-5 pt-3">
            <a href="{{ route('website.expertise') }}" class="btn btn-primary px-4 py-3 fw-bold rounded-pill border-0 position-relative overflow-hidden" style="background: linear-gradient(to right, #002169, #0038a8);">
                <span class="position-relative z-1">Voir toutes nos expertises</span>
                <span class="btn-hover-effect position-absolute top-0 left-0 w-100 h-100" style="background: linear-gradient(to right, #f0a707, #f8c537); opacity: 0; transition: opacity 0.3s ease;"></span>
                <i class="fas fa-arrow-right ms-2 position-relative z-1"></i>
            </a>
        </div>
    </div>
</div>

<style>
/* Styles personnalisés */
:root {
    --primary: #002169;
    --secondary: #f0a707;
}

.expertise-section {
    background: linear-gradient(to bottom, #FFFFFFFF 0%, #002169 100%);
}

.expertise-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
    border: 1px solid rgba(0, 33, 105, 0.05);
    transition: all 0.3s ease;
}

.expertise-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 33, 105, 0.1);
    border-color: rgba(240, 167, 7, 0.2);
}

.expertise-card:hover .icon-wrapper {
    background: rgba(240, 167, 7, 0.1) !important;
    color: var(--secondary) !important;
    transform: rotateY(180deg);
}

.expertise-card:hover .hover-effect {
    transform: scaleX(1);
}

.btn-link:hover i {
    transform: translateX(5px);
}

.icon-wrapper, .btn-link i {
    transition: all 0.4s ease;
}

.letter-spacing-2 {
    letter-spacing: 2px;
}

.transition-all {
    transition: all 0.3s ease;
}

.btn-primary:hover .btn-hover-effect {
    opacity: 1;
}

/* Animation des cartes */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.col-lg-4 {
    animation: fadeInUp 0.6s forwards;
    opacity: 0;
}

.col-lg-4:nth-child(1) { animation-delay: 0.1s; }
.col-lg-4:nth-child(2) { animation-delay: 0.2s; }
.col-lg-4:nth-child(3) { animation-delay: 0.3s; }
.col-lg-4:nth-child(4) { animation-delay: 0.4s; }
.col-lg-4:nth-child(5) { animation-delay: 0.5s; }
.col-lg-4:nth-child(6) { animation-delay: 0.6s; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation au scroll
    const expertiseCards = document.querySelectorAll('.col-lg-4');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    expertiseCards.forEach(card => {
        card.style.animationPlayState = 'paused';
        observer.observe(card);
    });

    // Effet de vague au survol (optionnel)
    const cards = document.querySelectorAll('.expertise-card');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function(e) {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const ripple = document.createElement('span');
            ripple.className = 'ripple-effect';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            card.appendChild(ripple);

            setTimeout(() => {
                ripple.remove();
            }, 1000);
        });
    });
});
</script>