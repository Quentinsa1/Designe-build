<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7Elite & Build | Excellence en Construction</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #002169;
            --primary-light: #0038a0;
            --primary-dark: #00113d;
            --gold: #d4af37;
            --light: #f8f9fa;
            --gray: #6c757d;
            --dark: #212529;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            --glass: rgba(255, 255, 255, 0.1);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            color: #333;
            overflow-x: hidden;
            background-color: #f9fafb;
            line-height: 1.6;
            position: relative;
        }
        
        /* Effet de particules */
        #particles-js {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
        }
        
        /* Mode sombre */
        .dark-mode {
            --primary: #1a73e8;
            --primary-light: #5c93ff;
            --primary-dark: #004ec4;
            --light: #121212;
            --gray: #9e9e9e;
            --dark: #e0e0e0;
            background-color: #121212;
            color: #e0e0e0;
        }
        
        .dark-mode h1, 
        .dark-mode h2, 
        .dark-mode h3, 
        .dark-mode h4, 
        .dark-mode h5 {
            color: #ffffff;
        }
        
        .dark-mode .navbar {
            background-color: rgba(18, 18, 18, 0.97);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.5);
        }
        
        .dark-mode .feature-box,
        .dark-mode .testimonial-card,
        .dark-mode .team-member {
            background-color: #1e1e1e;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        
        .dark-mode .feature-box:hover {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }
        
        .dark-mode .stats-section {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
        }
        
        .dark-mode .footer-links a {
            color: #ccc;
        }
        
        .dark-mode .footer-links a:hover {
            color: white;
        }
        
        h1, h2, h3, h4, h5 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: var(--primary-dark);
            line-height: 1.2;
        }
        
        a {
            text-decoration: none;
            transition: var(--transition);
        }
        
        /* Header & Navigation */
        .navbar {
            background-color: rgba(255, 255, 255, 0.97);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
            padding: 15px 0;
            transition: var(--transition);
            backdrop-filter: blur(10px);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            color: #002169;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--primary);
            font-size: 1.8rem;
            display: flex;
            align-items: center;
        }
        
        .navbar-brand span {
            color: var(--gold);
        }
        
        .navbar-brand .logo-icon {
            font-size: 2rem;
            margin-right: 10px;
            transition: var(--transition);
        }
        
        .navbar-nav .nav-link {
            color: var(--dark);
            font-weight: 500;
            margin: 0 10px;
            position: relative;
            padding: 8px 0;
        }
        
        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--primary);
            transition: width 0.3s ease;
        }
        
        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 100%;
        }
        
        .navbar-nav .nav-link:hover {
            color: var(--primary);
        }
        
        .dropdown-menu {
            border: none;
            box-shadow: var(--shadow);
            border-radius: 8px;
            margin-top: 10px;
            overflow: hidden;
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.9);
        }
        
        .dark-mode .dropdown-menu {
            background-color: rgba(30, 30, 30, 0.9);
        }
        
        .dropdown-item {
            padding: 12px 20px;
            transition: var(--transition);
        }
        
        .dropdown-item:hover {
            background-color: var(--primary);
            color: white;
            transform: translateX(5px);
        }
        
        /* Hero Section - Animated Gradient */
        .hero {
            background: linear-gradient(135deg, rgba(126, 133, 148, 0) 0%, rgba(131, 142, 164, 0.04) 50%, rgba(0, 33, 105, 0.7) 100%), 
                        url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            height: 100vh;
            min-height: 800px;
            display: flex;
            align-items: center;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
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
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .hero-content {
            max-width: 800px;
            position: relative;
            z-index: 2;
        }
        
        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            margin-bottom: 20px;
            line-height: 1.2;
            color: white;
            animation: fadeInUp 1s ease-out forwards;
            opacity: 0;
            transform: translateY(20px);
        }
        
        .hero p {
            font-size: clamp(1rem, 1.5vw, 1.2rem);
            margin-bottom: 30px;
            animation: fadeInUp 1s ease-out 0.2s forwards;
            opacity: 0;
            transform: translateY(20px);
        }
        
        .btn-primary {
            background-color: var(--gold);
            border: none;
            padding: 15px 40px;
            font-weight: 600;
            transition: var(--transition);
            border-radius: 50px;
            color: var(--primary-dark);
            position: relative;
            overflow: hidden;
            z-index: 1;
            animation: fadeInUp 1s ease-out 0.4s forwards;
            opacity: 0;
            transform: translateY(20px);
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background-color: var(--primary);
            transition: width 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
            z-index: -1;
        }
        
        .btn-primary:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
        
        .btn-primary:hover::before {
            width: 100%;
        }
        
        .btn-primary:hover {
            color: white;
        }
        
        /* Floating Elements */
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
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(10deg); }
            100% { transform: translateY(0px) rotate(0deg); }
        }
        
        /* Sections */
        .section {
            padding: 120px 0;
            position: relative;
            overflow: hidden;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 80px;
            position: relative;
        }
        
        .section-title h2 {
            font-size: clamp(1.8rem, 3vw, 2.8rem);
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
            color: var(--primary);
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--gold);
            border-radius: 2px;
        }
        
        .section-title p {
            max-width: 700px;
            margin: 20px auto 0;
            font-size: 1.1rem;
            color: var(--gray);
        }
        
        /* Features */
        .feature-box {
            text-align: center;
            padding: 40px 30px;
            border-radius: 16px;
            transition: var(--transition);
            margin-bottom: 30px;
            background: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .feature-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            transition: width 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
            z-index: -1;
        }
        
        .feature-box:hover {
            transform: translateY(-15px);
            box-shadow: var(--shadow);
        }
        
        .feature-box:hover::before {
            width: 100%;
        }
        
        .feature-box:hover * {
            color: white;
        }
        
        .feature-icon {
            width: 90px;
            height: 90px;
            background: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            color: white;
            font-size: 36px;
            transition: var(--transition);
        }
        
        .feature-box:hover .feature-icon {
            background: white;
            color: var(--primary);
            transform: scale(1.1);
        }
        
        .feature-box h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            transition: var(--transition);
        }
        
        .feature-box p {
            transition: var(--transition);
        }
        
        /* Testimonials */
        .testimonials {
            background-color: #f0f4f8;
            position: relative;
        }
        
        .testimonial-card {
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            position: relative;
            transition: var(--transition);
        }
        
        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        .client-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 20px;
            border: 3px solid var(--gold);
        }
        
        .client-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        /* Partners */
        .partner-logo {
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
            filter: grayscale(100%);
            opacity: 0.6;
            transition: var(--transition);
        }
        
        .partner-logo:hover {
            filter: grayscale(0);
            opacity: 1;
            transform: translateY(-10px);
        }
        
        /* Stats */
        .stats-section {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .stat-box {
            text-align: center;
            padding: 30px;
            position: relative;
            z-index: 2;
        }
        
        .stat-number {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            margin-bottom: 10px;
            font-family: 'Playfair Display', serif;
        }
        
        .stat-label {
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        /* Team */
        .team-member {
            position: relative;
            overflow: hidden;
            border-radius: 16px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
        }
        
        .team-member:hover {
            transform: translateY(-15px);
        }
        
        .team-img {
            position: relative;
            overflow: hidden;
            height: 300px;
        }
        
        .team-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .team-member:hover .team-img img {
            transform: scale(1.1);
        }
        
        .team-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgb(14, 10, 120) 0%, transparent 100%);
            padding: 30px 20px 20px;
            color: white;
            transform: translateY(100%);
            transition: var(--transition);
        }
        
        .team-member:hover .team-overlay {
            transform: translateY(0);
        }
        .team-img {
    width: 100%;
    height: 400px; /* Ajuste selon ton design */
    overflow: hidden;
    border-radius: 12px; /* Optionnel pour arrondir */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.team-photo {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
}

        /* Animation Classes */
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
        
        .animate {
            opacity: 0;
        }
        
        .animate.animated {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        .delay-1 {
            animation-delay: 0.2s;
        }
        
        .delay-2 {
            animation-delay: 0.4s;
        }
        
        .delay-3 {
            animation-delay: 0.6s;
        }
        
        /* Footer */
        footer {
            background-color: var(--primary-dark);
            color: white;
            padding: 100px 0 0;
            position: relative;
        }
        
        .footer-title {
            font-size: 1.5rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 15px;
        }
        
        .footer-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--gold);
            border-radius: 2px;
        }
        
        .footer-links a {
            color: #aaa;
            display: block;
            margin-bottom: 12px;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 8px;
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 50%;
            margin-right: 10px;
            transition: var(--transition);
        }
        
        .social-icons a:hover {
            background: var(--gold);
            transform: translateY(-5px);
        }
        
        .copyright {
            background-color: rgba(0, 0, 0, 0.2);
            padding: 25px 0;
            margin-top: 60px;
            text-align: center;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .section {
                padding: 80px 0;
            }
            
            .hero {
                height: 80vh;
                min-height: 700px;
            }
            
            .navbar {
                padding: 10px 0;
            }
        }
        
        @media (max-width: 768px) {
            .hero {
                height: 70vh;
                min-height: 600px;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .section {
                padding: 60px 0;
            }
            
            .feature-box {
                padding: 30px 20px;
            }
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 5px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-light);
        }
        
        /* Dark mode toggle */
        .dark-mode-toggle {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            z-index: 999;
            transition: var(--transition);
        }
        
        .dark-mode-toggle:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }
        
        /* Contact Form */
        .contact-form {
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .dark-mode .contact-form {
            background: #1e1e1e;
        }
        
        .form-control {
            padding: 15px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            margin-bottom: 20px;
            transition: var(--transition);
        }
        
        .dark-mode .form-control {
            background: #2d2d2d;
            border-color: #444;
            color: #e0e0e0;
        }
        
        .form-control:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 0.25rem rgba(212, 175, 55, 0.25);
        }
        
        /* Page loader */
        .page-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--primary);
            z-index: 99999;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.5s, visibility 0.5s;
        }
        
        .page-loader.fade-out {
            opacity: 0;
            visibility: hidden;
        }
        
        .loader {
            width: 48px;
            height: 48px;
            border: 5px solid #fff;
            border-bottom-color: var(--gold);
            border-radius: 50%;
            animation: rotation 1s linear infinite;
        }
        
        @keyframes rotation {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* 3D Card Effect */
        .card-3d {
            transform-style: preserve-3d;
            perspective: 1000px;
            transition: transform 0.5s;
        }
        
        .card-3d:hover {
            transform: rotateY(10deg) rotateX(5deg) translateY(-10px);
        }
        
        /* Glassmorphism */
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            padding: 30px;
            transition: var(--transition);
        }
        
        .dark-mode .glass-card {
            background: rgba(30, 30, 30, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .glass-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        /* Neumorphism */
        .neumorphic {
            border-radius: 16px;
            background: #f8f9fa;
            box-shadow:  20px 20px 60px #d3d4d5, 
                         -20px -20px 60px #ffffff;
        }
        
        .dark-mode .neumorphic {
            background: #1e1e1e;
            box-shadow:  20px 20px 60px #191919, 
                         -20px -20px 60px #232323;
        }

        /* Dans la section CSS existante */
.navbar-brand .logo-icon {
    height: 40px; /* Ajustez selon la taille souhaitée */
    margin-right: 10px;
    transition: var(--transition);
}

/* Pour le mode sombre - inversion des couleurs du logo */
.dark-mode .navbar-brand .logo-icon {
    filter: invert(1) brightness(1.5);
}

/* Responsive - ajustement pour mobile */
@media (max-width: 768px) {
    .navbar-brand .logo-icon {
        height: 30px;
    }
}
    </style>
    </style>
    @if(config('app.env') === 'production')
        <meta name="env" content="production">
    @else
        <meta name="env" content="development">
    @endif
</head>

<body>
    <!-- Page Loader -->
    <div class="page-loader">
        <div class="loader"></div>
    </div>
    
    <!-- Particles Background -->
    <div id="particles-js"></div>
    
    <!-- Dark Mode Toggle -->
    <div class="dark-mode-toggle" id="darkModeToggle">
        <i class="fas fa-moon"></i>
    </div>

        @include('partials.header')

        <div class="page-content">
            @yield('content')
        </div>

        @include('partials.footer')
    </div>
    
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        // Initialize particles.js
        particlesJS("particles-js", {
            particles: {
                number: {
                    value: 80,
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                color: {
                    value: "#d4af37"
                },
                shape: {
                    type: "circle",
                    stroke: {
                        width: 0,
                        color: "#000000"
                    }
                },
                opacity: {
                    value: 0.5,
                    random: true,
                    anim: {
                        enable: true,
                        speed: 1,
                        opacity_min: 0.1,
                        sync: false
                    }
                },
                size: {
                    value: 3,
                    random: true,
                    anim: {
                        enable: true,
                        speed: 2,
                        size_min: 0.1,
                        sync: false
                    }
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#d4af37",
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 1,
                    direction: "none",
                    random: true,
                    straight: false,
                    out_mode: "out",
                    bounce: false
                }
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: {
                        enable: true,
                        mode: "grab"
                    },
                    onclick: {
                        enable: true,
                        mode: "push"
                    },
                    resize: true
                },
                modes: {
                    grab: {
                        distance: 140,
                        line_linked: {
                            opacity: 1
                        }
                    },
                    push: {
                        particles_nb: 4
                    }
                }
            },
            retina_detect: true
        });

        // Animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize animations
            const animateElements = document.querySelectorAll('.animate');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animated');
                    }
                });
            }, {
                threshold: 0.1
            });
            
            animateElements.forEach(el => {
                observer.observe(el);
            });
            
            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.style.padding = '10px 0';
                    navbar.style.boxShadow = '0 2px 15px rgba(0, 0, 0, 0.1)';
                } else {
                    navbar.style.padding = '15px 0';
                    navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.08)';
                }
            });
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop - 70,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Counter animation for stats
            const counters = document.querySelectorAll('.stat-number');
            const speed = 200;
            
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-count');
                    const count = +counter.innerText;
                    
                    const inc = target / speed;
                    
                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 10);
                    } else {
                        counter.innerText = target;
                    }
                };
                
                // Start counting when element is in view
                const counterObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCount();
                            counterObserver.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.5
                });
                
                counterObserver.observe(counter);
            });
            
            // Dark mode toggle
            const darkModeToggle = document.getElementById('darkModeToggle');
            const darkModeIcon = darkModeToggle.querySelector('i');
            
            darkModeToggle.addEventListener('click', () => {
                document.body.classList.toggle('dark-mode');
                if (document.body.classList.contains('dark-mode')) {
                    darkModeIcon.classList.remove('fa-moon');
                    darkModeIcon.classList.add('fa-sun');
                    localStorage.setItem('darkMode', 'enabled');
                } else {
                    darkModeIcon.classList.remove('fa-sun');
                    darkModeIcon.classList.add('fa-moon');
                    localStorage.setItem('darkMode', 'disabled');
                }
            });
            
            // Check for saved dark mode preference
            if (localStorage.getItem('darkMode') === 'enabled') {
                document.body.classList.add('dark-mode');
                darkModeIcon.classList.remove('fa-moon');
                darkModeIcon.classList.add('fa-sun');
            }
            
            // Page loader
            window.addEventListener('load', function() {
                const pageLoader = document.querySelector('.page-loader');
                pageLoader.classList.add('fade-out');
                setTimeout(() => {
                    pageLoader.style.display = 'none';
                }, 100);
            });
            
            // Contact form submission
            const contactForm = document.getElementById('contactForm');
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                // Simulate form submission
                const submitBtn = contactForm.querySelector('button');
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Envoi en cours...';
                submitBtn.disabled = true;
                
                setTimeout(() => {
                    submitBtn.innerHTML = '<i class="fas fa-check"></i> Message envoyé';
                    submitBtn.classList.add('btn-success');
                    
                    // Reset form after 3 seconds
                    setTimeout(() => {
                        contactForm.reset();
                        submitBtn.innerHTML = 'Envoyer le message';
                        submitBtn.classList.remove('btn-success');
                        submitBtn.disabled = false;
                    }, 3000);
                }, 2000);
            });
        });
    </script>
</body>
</html>