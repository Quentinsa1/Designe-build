<div class="stats-section py-5">
    <div class="container py-4">
        <div class="row g-4">
            <!-- Carte 1 -->
            <div class="col-md-4">
                <div class="stat-card text-center p-4 h-100">
                    <div class="stat-icon mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h3 class="stat-number mb-2" data-count="1200">0</h3>
                    <p class="stat-label mb-0">Projets réalisés</p>
                    <div class="stat-decoration"></div>
                </div>
            </div>

            <!-- Carte 2 -->
            <div class="col-md-4">
                <div class="stat-card text-center p-4 h-100">
                    <div class="stat-icon mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="stat-number mb-2" data-count="24">0</h3>
                    <p class="stat-label mb-0">Assistance technique</p>
                    <div class="stat-decoration"></div>
                </div>
            </div>

            <!-- Carte 3 -->
            <div class="col-md-4">
                <div class="stat-card text-center p-4 h-100">
                    <div class="stat-icon mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h3 class="stat-number mb-2" data-count="1000">0</h3>
                    <p class="stat-label mb-0">Clients satisfaits</p>
                    <div class="stat-decoration"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Couleurs personnalisées */
:root {
    --primary-color: #002169;
    --secondary-color: #f0a707;
    --primary-light: rgba(0, 33, 105, 0.1);
    --secondary-light: rgba(240, 167, 7, 0.1);
}

.stats-section {
    background-color: var(--primary-color);
    position: relative;
    overflow: hidden;
}

/* Effet de fond */
.stats-section::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background:
        radial-gradient(circle at 30% 30%, var(--secondary-light) 0%, transparent 50%),
        radial-gradient(circle at 70% 70%, var(--secondary-light) 0%, transparent 50%);
    z-index: 0;
}

.stat-card {
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(8px);
    border-radius: 12px;
    border: 1px solid rgba(240, 167, 7, 0.1);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    z-index: 1;
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    border-color: rgba(240, 167, 7, 0.3);
}

.stat-icon {
    width: 70px;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: var(--secondary-light);
    border-radius: 50%;
    color: var(--secondary-color);
    border: 1px solid rgba(240, 167, 7, 0.2);
    transition: all 0.3s ease;
}

.stat-card:hover .stat-icon {
    background-color: rgba(240, 167, 7, 0.2);
    transform: scale(1.1);
}

.stat-icon svg {
    width: 30px;
    height: 30px;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    color: white;
    position: relative;
}

.stat-number::after {
    content: '+';
    position: absolute;
    right: -15px;
    opacity: 0.7;
}

.stat-label {
    color: rgba(255, 255, 255, 0.85);
    font-size: 1.1rem;
}

.stat-decoration {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%) scaleX(0);
    width: 80%;
    height: 3px;
    background: linear-gradient(90deg, transparent, var(--secondary-color), transparent);
    transition: transform 0.3s ease;
}

.stat-card:hover .stat-decoration {
    transform: translateX(-50%) scaleX(1);
}
</style>

<script>
   document.addEventListener('DOMContentLoaded', function() {
    const statCards = document.querySelectorAll('.stat-card');

    // Animation au scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    statCards.forEach(card => {
        observer.observe(card);
    });

    // Fonction d'animation
    function animateCounters(card) {
        const numberElement = card.querySelector('.stat-number');
        const target = parseInt(numberElement.getAttribute('data-count'));
        const duration = 1500;
        const startValue = 0;
        const startTime = performance.now();

        const updateCounter = (currentTime) => {
            const elapsedTime = currentTime - startTime;
            const progress = Math.min(elapsedTime / duration, 1);
            const currentValue = Math.floor(progress * target);

            numberElement.textContent = currentValue;

            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                numberElement.textContent = target + '+';
            }
        };

        requestAnimationFrame(updateCounter);
    }
});
</script>