<div class="about-modern">
    <div class="about-container">
        <div class="about-grid">
            <div class="about-media-modern">
                <div class="main-image-wrapper">
                    <img src="{{ asset('assets/images/work2.jpg') }}" alt="Chantier de construction" class="main-image">
                    <div class="image-overlay"></div>
                </div>
                <div class="secondary-image-wrapper">
                    <img src="{{ asset('assets/images/work1.jpg') }}" alt="Équipe 7Elite" class="secondary-image">
                    <div class="experience-badge">
                        <span style="padding-left: 30px">10+ ans d'expertise</span>
                    </div>
                </div>
            </div>

            <div class="about-content-modern">
                <div class="section-header-modern">
                    <span class="section-subtitle-modern">L'essence 7Elite</span>
                    <h2 class="section-title-modern">
                        <span class="highlight-text">7Elite</span> Design & Build
                    </h2>
                    <p class="section-description">
                        Votre partenaire intégré pour des projets architecturaux d'exception, combinant vision créative et excellence constructive.
                    </p>
                </div>

                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon" style="color: white">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div class="feature-content">
                            <h3>Notre Mission</h3>
                            <p>Transformer vos aspirations architecturales en réalités tangibles grâce à une approche Design & Build intégrée. Nous conjugons innovation esthétique, rigueur technique et qualité d'exécution pour des espaces qui inspirent et perdurent.</p>
                        </div>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon" style="color: white">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="feature-content">
                            <h3>Notre Vision</h3>
                            <p>Redéfinir les standards du Design & Build en Afrique et au-delà, en intégrant les dernières technologies numériques à notre savoir-faire artisanal. Créer des espaces qui marquent leur époque tout en respectant leur environnement.</p>
                        </div>
                    </div>
                </div>

                <div class="action-bar">
                    <a href="{{ route('website.expertise') }}" class="modern-button">
                        En savoir plus
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-details">
                            <span>Contactez-nous</span>
                            <h4>+229 99 53 57 60</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.about-modern {
    padding: 120px 0;
    background: linear-gradient(135deg, #ffffff 0%, #f8faff 100%);
    position: relative;
    overflow: hidden;
    font-family: 'Inter', sans-serif;
}

.about-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.about-media-modern {
    position: relative;
    height: 100%;
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.main-image-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 25px 50px rgba(4, 40, 93, 0.1);
    height: 400px;
}

.main-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.8s cubic-bezier(0.25, 1, 0.5, 1);
}

.main-image-wrapper:hover .main-image {
    transform: scale(1.05);
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to top, rgba(4, 40, 93, 0.4) 0%, transparent 50%);
}

.secondary-image-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 25px 50px rgba(4, 40, 93, 0.1);
    height: 300px;
    margin-left: 60px;
    margin-top: -80px;
}

.secondary-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.experience-badge {
    position: absolute;
    bottom: 30px;
    left: -30px;
    background: linear-gradient(135deg, #04285d 0%, #3a0ca3 100%);
    color: white;
    padding: 15px 25px;
    border-radius: 10px;
    font-weight: 600;
    box-shadow: 0 10px 30px rgba(4, 40, 93, 0.3);
    z-index: 2;
}

.about-content-modern {
    display: flex;
    flex-direction: column;
    gap: 40px;
}

.section-header-modern {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.section-subtitle-modern {
    font-size: 14px;
    font-weight: 600;
    color: #4361ee;
    text-transform: uppercase;
    letter-spacing: 3px;
}

.section-title-modern {
    font-size: 42px;
    font-weight: 700;
    color: #1a1a2e;
    line-height: 1.2;
}

.highlight-text {
    color: #04285d;
    position: relative;
    display: inline-block;
}

.highlight-text::after {
    content: '';
    position: absolute;
    bottom: 5px;
    left: 0;
    width: 100%;
    height: 10px;
    background: rgba(67, 97, 238, 0.2);
    z-index: -1;
}

.section-description {
    font-size: 16px;
    line-height: 1.8;
    color: #4a5568;
}

.features-grid {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.feature-card {
    display: flex;
    gap: 20px;
    padding: 25px;
    border-radius: 15px;
    background: white;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(67, 97, 238, 0.15);
}

.feature-icon {
    width: 60px;
    height: 60px;
    min-width: 60px;
    background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 24px;
    box-shadow: 0 8px 20px rgba(67, 97, 238, 0.3);
}

.feature-content h3 {
    font-size: 20px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 10px;
}

.feature-content p {
    font-size: 15px;
    line-height: 1.7;
    color: #4a5568;
}

.action-bar {
    display: flex;
    align-items: center;
    gap: 30px;
    flex-wrap: wrap;
}

.modern-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 16px 32px;
    background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
    color: white;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    box-shadow: 0 10px 30px rgba(67, 97, 238, 0.4);
    transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
}

.modern-button i {
    margin-left: 10px;
    transition: transform 0.3s ease;
}

.modern-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(67, 97, 238, 0.6);
}

.modern-button:hover i {
    transform: translateX(5px);
}

.contact-info {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px 25px;
    background: white;
    border-radius: 50px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
}

.contact-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #04285d 0%, #4361ee 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 18px;
}

.contact-details {
    display: flex;
    flex-direction: column;
}

.contact-details span {
    font-size: 12px;
    color: #6c757d;
    font-weight: 500;
}

.contact-details h4 {
    font-size: 18px;
    color: #1a1a2e;
    margin: 0;
    font-weight: 700;
}

/* Responsive */
@media (max-width: 992px) {
    .about-grid {
        grid-template-columns: 1fr;
    }

    .about-media-modern {
        height: auto;
        flex-direction: row;
        gap: 20px;
    }

    .main-image-wrapper {
        height: 300px;
    }

    .secondary-image-wrapper {
        height: 200px;
        margin-left: 0;
        margin-top: 100px;
    }
}

@media (max-width: 768px) {
    .about-modern {
        padding: 80px 0;
    }

    .about-media-modern {
        flex-direction: column;
    }

    .secondary-image-wrapper {
        margin-top: -50px;
        margin-left: 40px;
    }

    .section-title-modern {
        font-size: 32px;
    }

    .feature-card {
        flex-direction: column;
    }

    .action-bar {
        flex-direction: column;
        align-items: flex-start;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation des éléments
    const aboutSection = document.querySelector('.about-modern');
    const elements = [
        ...document.querySelectorAll('.about-media-modern > *'),
        ...document.querySelectorAll('.section-header-modern > *'),
        ...document.querySelectorAll('.feature-card'),
        ...document.querySelectorAll('.action-bar > *')
    ];

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                elements.forEach((el, i) => {
                    setTimeout(() => {
                        el.style.opacity = '1';
                        el.style.transform = 'translateY(0)';
                    }, i * 100);
                });
            }
        });
    }, { threshold: 0.1 });

    observer.observe(aboutSection);

    // Initial state for animation
    elements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'all 0.6s cubic-bezier(0.25, 1, 0.5, 1)';
    });
});
</script>