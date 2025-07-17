<section class="innovation py-5 bg-light position-relative overflow-hidden">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- Colonne Image -->
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="media-container position-relative rounded-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/work3.jpg') }}" alt="Technologies innovantes" class="img-fluid w-100 scale-hover">

                    <!-- Badges Technologiques -->
                    <div class="tech-badge position-absolute bg-primary text-white rounded-pill shadow-sm d-flex align-items-center px-3 py-2">
                        <i class="fas fa-cube me-2"></i>
                        <span>BIM</span>
                    </div>
                    <div class="tech-badge position-absolute bg-warning text-dark rounded-pill shadow-sm d-flex align-items-center px-3 py-2">
                        <i class="fas fa-robot me-2"></i>
                        <span>IA</span>
                    </div>
                    <div class="tech-badge position-absolute bg-gradient-primary-warning text-white rounded-pill shadow-sm d-flex align-items-center px-3 py-2">
                        <i class="fas fa-project-diagram me-2"></i>
                        <span>3D</span>
                    </div>
                </div>
            </div>

            <!-- Colonne Contenu -->
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="ps-lg-4">
                    <span class="badge bg-warning-opacity text-warning mb-3">NOTRE ADN</span>
                    <h2 class="display-5 fw-bold mb-4 text-primary-dark">L'innovation technologique au service du bâti</h2>

                    <div class="divider bg-gradient-primary-warning mb-4"></div>

                    <p class="lead text-secondary mb-5">Nous réinventons les processus constructifs par l'intégration des dernières avancées numériques.</p>

                    <div class="row g-4">
                        <!-- Feature 1 -->
                        <div class="col-md-6 feature-item">
                            <div class="d-flex">
                                <div class="icon-box bg-primary-opacity text-primary me-3">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-2 text-dark">Études de faisabilité</h5>
                                    <p class="text-muted small mb-0">Analyse approfondie des contraintes techniques</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="col-md-6 feature-item">
                            <div class="d-flex">
                                <div class="icon-box bg-primary-opacity text-primary me-3">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-2 text-dark">Avant-projets techniques</h5>
                                    <p class="text-muted small mb-0">APS/APD détaillés et optimisés</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="col-md-6 feature-item">
                            <div class="d-flex">
                                <div class="icon-box bg-primary-opacity text-primary me-3">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-2 text-dark">Contrôle qualité</h5>
                                    <p class="text-muted small mb-0">Supervision rigoureuse des chantiers</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 4 -->
                        <div class="col-md-6 feature-item">
                            <div class="d-flex">
                                <div class="icon-box bg-warning-opacity text-warning me-3">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-2 text-dark">Solutions logicielles</h5>
                                    <p class="text-muted small mb-0">BIM, CAO, SIG intégrés</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 5 -->
                        <div class="col-md-6 feature-item">
                            <div class="d-flex">
                                <div class="icon-box bg-warning-opacity text-warning me-3">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-2 text-dark">Suivi de chantier</h5>
                                    <p class="text-muted small mb-0">Application propriétaire dédiée</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 6 -->
                        <div class="col-md-6 feature-item">
                            <div class="d-flex">
                                <div class="icon-box bg-warning-opacity text-warning me-3">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-2 text-dark">Intelligence artificielle</h5>
                                    <p class="text-muted small mb-0">Analyse prédictive des données</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
:root {
    --primary: #002169;
    --primary-dark: #001a54;
    --primary-opacity: rgba(0, 33, 105, 0.1);
    --warning: #f0a707;
    --warning-opacity: rgba(240, 167, 7, 0.1);
    --secondary: #6c757d;
}

/* Classes utilitaires */
.bg-gradient-primary-warning {
    background: linear-gradient(135deg, var(--primary), var(--warning)) !important;
}

.text-primary-dark {
    color: var(--primary-dark) !important;
}

.bg-primary-opacity {
    background-color: var(--primary-opacity) !important;
}

.bg-warning-opacity {
    background-color: var(--warning-opacity) !important;
}

/* Styles section */
.innovation {
    background: linear-gradient(to bottom, #f8f9fa 0%, #e9ecef 100%);
}

.media-container {
    transition: transform 0.3s ease;
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.scale-hover {
    transition: transform 0.6s ease;
}

.media-container:hover {
    transform: translateY(-5px);
}

.media-container:hover .scale-hover {
    transform: scale(1.03);
}

.tech-badge {
    opacity: 0;
    transition: all 0.5s cubic-bezier(0.25, 1, 0.5, 1);
    z-index: 2;
}

.tech-badge:nth-child(1) {
    top: 20%;
    left: 10%;
    transform: translateX(-30px);
}

.tech-badge:nth-child(2) {
    top: 50%;
    right: 10%;
    transform: translateX(30px);
}

.tech-badge:nth-child(3) {
    bottom: 20%;
    left: 50%;
    transform: translate(-50%, 30px);
}

.media-container:hover .tech-badge {
    opacity: 1;
    transform: translate(0, 0) !important;
}

.media-container:hover .tech-badge:nth-child(1) {
    transition-delay: 0.1s;
}

.media-container:hover .tech-badge:nth-child(2) {
    transition-delay: 0.2s;
}

.media-container:hover .tech-badge:nth-child(3) {
    transition-delay: 0.3s;
}

.divider {
    width: 60px;
    height: 3px;
}

.icon-box {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.feature-item:hover .icon-box {
    transform: scale(1.1);
}

.feature-item {
    transition: transform 0.3s ease;
}

.feature-item:hover {
    transform: translateY(-5px);
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.feature-item {
    animation: slideIn 0.6s forwards;
    opacity: 0;
}

.feature-item:nth-child(1) { animation-delay: 0.1s; }
.feature-item:nth-child(2) { animation-delay: 0.2s; }
.feature-item:nth-child(3) { animation-delay: 0.3s; }
.feature-item:nth-child(4) { animation-delay: 0.4s; }
.feature-item:nth-child(5) { animation-delay: 0.5s; }
.feature-item:nth-child(6) { animation-delay: 0.6s; }

/* Responsive */
@media (max-width: 991.98px) {
    .ps-lg-4 {
        padding-left: 0 !important;
    }

    .tech-badge {
        opacity: 1;
        transform: translate(0, 0) !important;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation au scroll
    const featureItems = document.querySelectorAll('.feature-item');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
            }
        });
    }, { threshold: 0.1 });

    featureItems.forEach(item => {
        item.style.animationPlayState = 'paused';
        observer.observe(item);
    });

    // Effet parallaxe pour l'image
    const mediaContainer = document.querySelector('.media-container');
    if (mediaContainer) {
        window.addEventListener('scroll', function() {
            const scrollPosition = window.pageYOffset;
            mediaContainer.style.transform = `translateY(${scrollPosition * 0.03}px) translateX(${scrollPosition * 0.01}px)`;
        });
    }
});
</script>