<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider Élégant - IAC</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <style>
        :root {
            --primary: #1e3a8a;
            --primary-light: #3b5998;
            --accent: #d4af37;
            --light: #f8f9fa;
            --dark: #1a202c;
            --gray: #718096;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--dark);
            background-color: #f5f7fa;
            line-height: 1.6;
        }

        .elegant-slider {
            position: relative;
            overflow: hidden;
            height: 85vh;
            max-height: 900px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e2e8f0 100%);
        }

        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .slide-content {
            height: 100%;
            display: flex;
            align-items: center;
            padding: 0 5%;
            position: relative;
        }

        .slide-content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.7) 40%, transparent 70%);
            z-index: 1;
        }

        .text-content {
            position: relative;
            z-index: 2;
            max-width: 600px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.85);
            border-radius: 16px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            backdrop-filter: blur(10px);
            transform: translateY(30px);
            opacity: 0;
            transition: var(--transition);
        }

        .swiper-slide-active .text-content {
            transform: translateY(0);
            opacity: 1;
        }

        .badge {
            display: inline-block;
            background: var(--accent);
            color: white;
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(212, 175, 55, 0.2);
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.2rem, 4.5vw, 3.5rem);
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 20px;
            color: var(--primary);
        }

        .slide-description {
            font-size: clamp(1rem, 1.8vw, 1.2rem);
            color: var(--gray);
            margin-bottom: 30px;
            max-width: 500px;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            padding: 14px 36px;
            background: var(--primary);
            color: white;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            transition: var(--transition);
            box-shadow: 0 5px 20px rgba(30, 58, 138, 0.3);
            position: relative;
            overflow: hidden;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s ease;
        }

        .cta-button:hover::before {
            transform: translateX(100%);
        }

        .cta-button:hover {
            background: var(--primary-light);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(30, 58, 138, 0.4);
        }

        .cta-button i {
            margin-left: 10px;
            font-size: 0.9rem;
            transition: transform 0.3s ease;
        }

        .cta-button:hover i {
            transform: translateX(5px);
        }

        .image-container {
            position: absolute;
            top: 0;
            right: 0;
            width: 60%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
            opacity: 0;
            transform: scale(0.95);
            transition: var(--transition);
        }

        .swiper-slide-active .image-container {
            opacity: 1;
            transform: scale(1);
        }

        .slide-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            border-radius: 0 0 0 100px;
            box-shadow: -20px 20px 40px rgba(0, 0, 0, 0.1);
        }

        /* Navigation */
        .swiper-button-prev,
        .swiper-button-next {
            width: 56px;
            height: 56px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            color: var(--primary);
            transition: var(--transition);
        }

        .swiper-button-prev:hover,
        .swiper-button-next:hover {
            background: var(--primary);
            color: white;
            transform: scale(1.1);
        }

        .swiper-button-prev::after,
        .swiper-button-next::after {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .swiper-pagination {
            bottom: 30px !important;
        }

        .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            background: rgba(30, 58, 138, 0.3);
            opacity: 1;
            transition: var(--transition);
        }

        .swiper-pagination-bullet-active {
            background: var(--primary);
            width: 30px;
            border-radius: 8px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .elegant-slider {
                height: auto;
                min-height: 80vh;
            }
            
            .slide-content {
                flex-direction: column;
                padding: 80px 5% 120px;
            }
            
            .slide-content::before {
                background: linear-gradient(0deg, rgba(255, 255, 255, 0.95) 0%, rgba(255, 255, 255, 0.85) 40%, transparent 70%);
            }
            
            .text-content {
                max-width: 100%;
                margin-bottom: 40px;
                transform: translateY(0);
                opacity: 1;
            }
            
            .image-container {
                position: relative;
                width: 100%;
                height: 400px;
                border-radius: 20px;
            }
            
            .slide-image {
                border-radius: 20px;
            }
            
            .swiper-button-prev,
            .swiper-button-next {
                top: auto;
                bottom: 40px;
            }
        }

        @media (max-width: 576px) {
            .text-content {
                padding: 30px 20px;
            }
            
            .image-container {
                height: 300px;
            }
            
            .cta-button {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- Slider Élégant -->
    <div class="elegant-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Slide 1 - Excellence Architecturale -->
                <div class="swiper-slide">
                    <div class="slide-content">
                        <div class="text-content">
                            <div class="badge">Nous façonnons le futur</div>
                            <h1>L'excellence architecturale et constructive</h1>
                            <p class="slide-description">
                                Une approche intégrée du design à la réalisation. Un seul interlocuteur pour une maîtrise totale de votre projet.
                            </p>
                            <a href="#" class="cta-button">
                                Découvrir nos expertises
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="image-container">
                            <img src="https://images.pexels.com/photos/3182745/pexels-photo-3182745.jpeg" alt="Équipe d'architectes" class="slide-image">
                        </div>
                    </div>
                </div>

                <!-- Slide 2 - Innovation -->
                <div class="swiper-slide">
                    <div class="slide-content">
                        <div class="text-content">
                            <div class="badge">Innovation - Précision - Qualité</div>
                            <h1>Votre vision, notre expertise</h1>
                            <p class="slide-description">
                                Des solutions sur mesure alliant créativité architecturale et rigueur technique pour des résultats exceptionnels.
                            </p>
                            <a href="#" class="cta-button">
                                Nos réalisations
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="image-container">
                            <img src="https://images.unsplash.com/photo-1487958449943-2429e8be8625" alt="Maquette architecturale" class="slide-image">
                        </div>
                    </div>
                </div>

                <!-- Slide 3 - Solutions Intégrées -->
                <div class="swiper-slide">
                    <div class="slide-content">
                        <div class="text-content">
                            <div class="badge">Conception - Construction - Suivi</div>
                            <h1>Solutions intégrées pour vos projets</h1>
                            <p class="slide-description">
                                De l'étude préliminaire à la livraison finale, nous accompagnons chaque étape de votre projet avec professionnalisme.
                            </p>
                            <a href="#" class="cta-button">
                                Voir nos offres
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="image-container">
                            <img src="https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg" alt="Planification de projet" class="slide-image">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const elegantSwiper = new Swiper('.swiper-container', {
                loop: true,
                speed: 1000,
                autoplay: {
                    delay: 6000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                on: {
                    init: function() {
                        // Initial animation
                        const activeSlide = this.slides[this.activeIndex];
                        activeSlide.querySelector('.text-content').style.opacity = 1;
                        activeSlide.querySelector('.text-content').style.transform = 'translateY(0)';
                        activeSlide.querySelector('.image-container').style.opacity = 1;
                        activeSlide.querySelector('.image-container').style.transform = 'scale(1)';
                    },
                    slideChange: function() {
                        // Reset animations for all slides
                        this.slides.forEach(slide => {
                            slide.querySelector('.text-content').style.opacity = 0;
                            slide.querySelector('.text-content').style.transform = 'translateY(30px)';
                            slide.querySelector('.image-container').style.opacity = 0;
                            slide.querySelector('.image-container').style.transform = 'scale(0.95)';
                        });
                        
                        // Apply animations to active slide
                        const activeSlide = this.slides[this.activeIndex];
                        setTimeout(() => {
                            activeSlide.querySelector('.text-content').style.opacity = 1;
                            activeSlide.querySelector('.text-content').style.transform = 'translateY(0)';
                            activeSlide.querySelector('.image-container').style.opacity = 1;
                            activeSlide.querySelector('.image-container').style.transform = 'scale(1)';
                        }, 100);
                    }
                }
            });
        });
    </script>
</body>
</html>