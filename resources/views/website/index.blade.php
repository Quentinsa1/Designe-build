@extends('partials.template')
@section('content')

<div class="page-content font-style-2">

    <!-- Slider -->
    <div class="slidearea">
        <div class="silder-one overflow-hidden">
            <div class="swiper-container main-silder-swiper-01">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" >
                        <div class="inner-content" style="background-image:url({{ asset('assets/images/background/bgban1.jpg') }});">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-md-12">
                                        <div class="inner-text">
                                            <h6 class="sub-title white" style="color: white; font-weight: bold; padding-top: 30px;">Concevoir-Contrôler-Construire</h6>
                                            <h1 class="title" data-swiper-parallax="-1000">On pense, on trace, on bâtit</h1>
                                            <p class="text" data-swiper-parallax="-1500">Un service complet : penser, dessiner, construire. Moins d’intermédiaires, plus de résultats.</p>
                                            <div class="d-flex align-items-center" data-swiper-parallax="-2000">
                                                <a href="services-1.html" class="site-button radius-no ">Nos Domaines</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12">
                                        <div class="overlay-slide style-1">
                                            <img src="{{ asset('assets/images/banner/ban11.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" >
                        <div class="inner-content" style="background-image:url({{ asset('assets/images/background/bgban2.jpg') }});">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-md-12">
                                        <div class="inner-text">
                                            <h6 class="sub-title white" style="color: white; font-weight: bold; padding-top: 30px;">Concevoir-Contrôler-Construire</h6>
                                            <h1 class="title" data-swiper-parallax="-1000">On pense, on trace, on bâtit</h1>
                                            <p class="text" data-swiper-parallax="-1500">Un service complet : penser, dessiner, construire. Moins d’intermédiaires, plus de résultats.</p>
                                            <div class="d-flex align-items-center" data-swiper-parallax="-2000">
                                                <a href="services-1.html" class="site-button radius-no ">Nos Domaines</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12">
                                        <div class="overlay-slide style-1">
                                            <img src="{{ asset('assets/images/banner/ban11.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="inner-content" style="background-image:url({{ asset('assets/images/background/bgban2.jpg') }});">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-md-12">
                                        <div class="inner-text">
                                            <h6 class="sub-title white" style="color: white; font-weight: bold; padding-top: 30px;">Concevoir-Contrôler-Construire</h6>
                                            <h1 class="title" data-swiper-parallax="-1000">On pense, on trace, on bâtit</h1>
                                            <p class="text" data-swiper-parallax="-1500">Un service complet : penser, dessiner, construire. Moins d’intermédiaires, plus de résultats.</p>
                                            <div class="d-flex align-items-center" data-swiper-parallax="-2000">
                                                <a href="services-1.html" class="site-button radius-no ">Nos Domaines</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12">
                                        <div class="overlay-slide style-1">
                                            <img src="{{ asset('assets/images/banner/ban11.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="num-pagination style-1">
                    <div class="banner-next btn-prev"><i class="fa fa-angle-left"></i></div>
                    <div class="banner-prev btn-next"><i class="fa fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>


    <!-- meet & ask -->
    <div class="section-full counter-wrapper1 w-100" style="width: auto !important; background-color: #FFFFFF;">
        <div class="row justify-content-end no-gutters">
            <div class="col-lg-12 p-0">
                <div class="counter-inner">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 m-tb10">
                            <div class="icon-bx-wraper clearfix text-white left">
                                <div class="icon-lg"> <span class="icon-cell"><i class="flaticon-buildings"></i></span> </div>
                                <div class="icon-content">
                                    <h3 class="dez-tilte"><span class="counter">1200</span>+</h3>
                                    <h6 class="dez-sub-title">Projets</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 m-tb10">
                            <div class="icon-bx-wraper clearfix text-white left">
                                <div class="icon-lg"> <span class="icon-cell"><i class="flaticon-construction-tools"></i></span> </div>
                                <div class="icon-content">
                                    <h3 class="dez-tilte"><span class="counter">24</span>H/24</h3>
                                    <h6 class="dez-sub-title">Assistance</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 m-tb10">
                            <div class="icon-bx-wraper clearfix text-white left border-0">
                                <div class="icon-lg"> <span class="icon-cell"><i class="flaticon-finish-flag"></i></span> </div>
                                <div class="icon-content">
                                    <h3 class="dez-tilte"><span class="counter">1000</span>+</h3>
                                    <h6 class="dez-sub-title">Clients Satisfaits</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- meet & ask END -->


    <!-- About Company -->
    <div class="section-full bg-white content-inner-1 about-section style-1">
        <div class="container">
            <div class="section-content ">
                <div class="row">
                    <div class="col-lg-6 m-b30">
                        <div class="about-media style-1">
                            <img src="{{ asset('assets/images/work2.jpg') }}" alt="">
                            <div class="about-img">
                                <img src="{{ asset('assets/images/work1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-contact">
                            <div class="section-head style-1">
                                <h6 class="sub-title text-primary">A Propos de Nous</h6>
                                <h2 class="title"> <span style="color: #04285d">7Elite</span> Design & Build</h2>
                                <p class="text">Nous sommes une entité, qui va vous fournir à la fois les services de design (conception et architecture) et de construction (maîtrise d’ouvrage et exécution des travaux). </p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="icon-bx-wraper style-1 m-b30">
                                        <div class="icon-bx-sm bg-secondry "> <span class="icon-cell"><i class="flaticon-development text-light"></i></span> </div>
                                        <div class="icon-content">
                                            <h3 class="dez-tilte text-uppercase">Mission</h3>
                                            <p class="text">Offrir un service de Design & Build d’exception, en alliant créativité architecturale, précision technique et excellence d’exécution.

                                                Nous accompagnons nos clients de la première idée à la livraison clé en main, avec un engagement total sur la qualité, le détail et la performance.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="icon-bx-wraper style-1 m-b30">
                                        <div class="icon-bx-sm bg-secondry"> <span class="icon-cell"><i class="flaticon-technical-support text-light"></i></span> </div>
                                        <div class="icon-content">
                                            <h3 class="dez-tilte text-uppercase">Vision</h3>
                                            <p class="text">Devenir une référence internationale dans le Design & Build haut de gamme, en alliant exigence, innovation et maîtrise à chaque étape.

                                                Nous visons l’excellence sans frontières : chaque projet que nous concevons est une vitrine de notre savoir-faire, pensée pour impacter, inspirer, et durer.

                                                Construire à la hauteur des ambitions de nos clients, ici comme ailleurs.</p>
                                        </div>I
                                    </div>
                                </div>
                            </div>
                            <div class="contact-box style-1">
                                <a href="" class="site-button lg  radius-no ">Savoir plus</a>
                                <div class="content-box style-1">
                                    <i class="fa fa-phone bg-primary text-light"></i>
                                    <div>                                        <h6 class="number">+229 99 53 57 60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Company END -->

    <div class="section-full bg-secondry content-inner-1 service style-1">
        <div class="container">
            <div class="section-head style-1 text-center">
                <h6 class="sub-title text-primary">Nos Services</h6>
                <h2 class="title text-light">Nous offrons le meilleur service</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                    <div class="icon-bx-wraper style-2">
                        <div class="icon-bx-sm bg-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-antivirus"></i></a> </div>
                        <div class="icon-content">
                            <h5 class="dez-tilte text-uppercase text-light">Bâtiment</h5>
                            <p>conception à la réception de tous types d’ouvrages : logements, villas, bâtiments industriels, commerciaux… avec réflexion, réalisation et direction des travaux..  100% Design & Build.</p>
                        </div>
                        <a href="" class="site-button lg  radius-no ">Voir Plus<span><i class="fa fa-angle-right"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                    <div class="icon-bx-wraper style-2">
                        <div class="icon-bx-sm bg-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-excavator"></i></a> </div>
                        <div class="icon-content">
                            <h5 class="dez-tilte text-uppercase text-light">Ingénierie de conception & d’exécution </h5>
                            <p>Études, plans, DAO, suivi, contrôle, assistance marchés, direction de chantier, réception...</p>
                        </div>
                        <a href="" class="site-button lg  radius-no ">Voir Plus<span><i class="fa fa-angle-right"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                    <div class="icon-bx-wraper style-2">
                        <div class="icon-bx-sm bg-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-development"></i></a> </div>
                        <div class="icon-content">
                            <h5 class="dez-tilte text-uppercase text-light">BIM & SIG</h5>
                            <p>Maquettes numériques, synthèse technique, production de plans et documents à partir du modèle.</p>
                        </div>
                        <a href="" class="site-button lg  radius-no ">Voir Plus<span><i class="fa fa-angle-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                    <div class="icon-bx-wraper style-2">
                        <div class="icon-bx-sm bg-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-antivirus"></i></a> </div>
                        <div class="icon-content">
                            <h5 class="dez-tilte text-uppercase text-light">Visualisation architecturale & urbanisme </h5>
                            <p>Création de rendus 3D pour aider à la projection et à la décision...........</p>
                        </div>
                        <a href="" class="site-button lg  radius-no ">Voir Plus<span><i class="fa fa-angle-right"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                    <div class="icon-bx-wraper style-2">
                        <div class="icon-bx-sm bg-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-excavator"></i></a> </div>
                        <div class="icon-content">
                            <h5 class="dez-tilte text-uppercase text-light">Design d’intérieur</h5>
                            <p>Valorisation de l’espace intérieur jusqu’aux finitions.
                            </p>
                        </div>
                        <a href="" class="site-button lg  radius-no ">Voir Plus<span><i class="fa fa-angle-right"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                    <div class="icon-bx-wraper style-2">
                        <div class="icon-bx-sm bg-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-development"></i></a> </div>
                        <div class="icon-content">
                            <h5 class="dez-tilte text-uppercase text-light">Suivi de travaux </h5>
                            <p>Méthodologie de pilotage de chantier, contrôle qualité, respect des délais et budgets.</p>
                        </div>
                        <a href="" class="site-button lg  radius-no ">Voir Plus<span><i class="fa fa-angle-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Company -->
    <div class="section-full bg-white content-inner-2">
        <div class="container">
            <div class="section-content ">
                <div class="row">
                    <div class="col-lg-6 m-b30">
                        <div class="about-media styel-2">
                            <img src="{{ asset('assets/images/work3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-contact">
                            <div class="section-head style-1 p-t20">
                                <h6 class="sub-title text-primary">Notre Particularité</h6>
                                <h2 class="title">Le Numérique au centre de toutes nos actions</h2>
                                <p class="text">Nous intervenons de la conception à la réalisation, avec une approche globale et sur mesure.</p>
                            </div>
                            <div class="service-box style-1">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <ul>
                                            <li><span><i class="fa fa-check text-primary"></i></span><a href="javascript:void(0)">Études de faisabilité</a></li>
                                            <li><span><i class="fa fa-check text-primary"></i></span><a href="javascript:void(0)">Avant-projets (APS, APD), DAO</a></li>
                                            <li><span><i class="fa fa-check text-primary"></i></span><a href="javascript:void(0)">Supervision des travaux</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <ul>
                                            <li><span><i class="fa fa-check text-primary"></i></span><a href="javascript:void(0)">Logiciels spécialisés pour (CAO/DAO, BIM, SIG / Cartographie, Calculs techniques)</a></li>
                                            <li><span><i class="fa fa-check text-primary"></i></span><a href="javascript:void(0)">Application de Suivi de chantier développée par 7Elite</a></li>
                                            <li><span><i class="fa fa-check text-primary"></i></span><a href="javascript:void(0)"> Innovation technologique : elle intègre la 3D, le BIM, la data, l’IA et le SIG dans ses processus.</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-full bg-white content-inner-1">
        <div class="container">
            <div class="section-head style-1 text-center">
                <h6 class="sub-title text-primary">Notre Équipe</h6>
                <h2 class="title">Rencontrez Notre Direction</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 aos-item" data-aos="flip-down" data-aos-duration="1500" data-aos-delay="200">
                    <div class="dz-team style-1 text-center m-b30 overlay-shine aos-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                        <div class="dz-media">
                            <a href="javascript:void(0);"><img src="images/team/pic3.jpg" alt=""></a>
                        </div>
                        <div class="dz-content">
                            <h5 class="dz-name"><a href="javascript:void(0);">Mr .......</a></h5>
                            <h6 class="dz-position ">Responsable Design & Build</h6>
                        </div>
                        <ul class="team-social">
                            <li><a href="https://www.facebook.com/" target="blank" class="bg-primary"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.youtube.com//" target="blank" class="bg-primary"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://www.instagram.com/" target="blank" class="bg-primary" ><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://twitter.com/" target="blank" class="bg-primary" ><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 aos-item" data-aos="flip-down" data-aos-duration="1500" data-aos-delay="200">
                    <div class="dz-team style-1 text-center m-b30 overlay-shine aos-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                        <div class="dz-media">
                            <a href="javascript:void(0);"><img src="images/team/pic2.jpg" alt=""></a>
                        </div>
                        <div class="dz-content">
                            <h5 class="dz-name"><a href="javascript:void(0);">Mr Raoul</a></h5>
                            <h6 class="dz-position ">Directeur Regionnal</h6>
                        </div>
                        <ul class="team-social">
                            <li><a href="https://www.facebook.com/" target="blank" class="bg-primary"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.youtube.com//" target="blank" class="bg-primary"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://www.instagram.com/" target="blank" class="bg-primary" ><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://twitter.com/" target="blank" class="bg-primary" ><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 aos-item" data-aos="flip-down" data-aos-duration="1500" data-aos-delay="200">
                    <div class="dz-team style-1 text-center m-b30 overlay-shine aos-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                        <div class="dz-media">
                            <a href="javascript:void(0);"><img src="images/team/pic3.jpg" alt=""></a>
                        </div>
                        <div class="dz-content">
                            <h5 class="dz-name"><a href="javascript:void(0);">Mme Espérance</a></h5>
                            <h6 class="dz-position ">Directeur Général</h6>
                        </div>
                        <ul class="team-social">
                            <li><a href="https://www.facebook.com/" target="blank" class="bg-primary"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.youtube.com//" target="blank" class="bg-primary"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://www.instagram.com/" target="blank" class="bg-primary" ><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://twitter.com/" target="blank" class="bg-primary" ><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 aos-item" data-aos="flip-down" data-aos-duration="1500" data-aos-delay="200">
                    <div class="dz-team style-1 text-center m-b30 overlay-shine aos-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                        <div class="dz-media">
                            <a href="javascript:void(0);"><img src="images/team/pic4.jpg" alt=""></a>
                        </div>
                        <div class="dz-content">
                            <h5 class="dz-name"><a href="javascript:void(0);">Mr Amos</a></h5>
                            <h6 class="dz-position ">Directeur Général</h6>
                        </div>
                        <ul class="team-social">
                            <li><a href="https://www.facebook.com/" target="blank" class="bg-primary"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.youtube.com//" target="blank" class="bg-primary"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://www.instagram.com/" target="blank" class="bg-primary" ><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://twitter.com/" target="blank" class="bg-primary" ><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-full bg-gray bg-img-fix content-inner-1">
        <div class="container">
                <div class="section-head style-1 text-center">
                    <h6 class="sub-title text-primary">Témoignages</h6>
                    <h2 class="title">Nos clients témoignent</h2>
                </div>
                <div class="testi-inner">
                    <div class="swiper-container testimonial-swiper-1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-11">
                                    <div class="testimonial-media">
                                        <div class="d-flex align-items-center">
                                            <div class="testimonial-pic"><img src="images/testimonials/pic4.jpg" width="100" height="100" alt=""></div>
                                            <div class="testimonial-detail">
                                                <h6 class="testimonial-name">CNCB</h6>
                                                <span class="testimonial-position text-primary">Entreprise de .....</span>
                                            </div>
                                        </div>
                                        <div class="quote-right text-primary"></div>
                                    </div>
                                    <div class="testimonial-text">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-11">
                                    <div class="testimonial-media">
                                        <div class="d-flex align-items-center">
                                            <div class="testimonial-pic"><img src="images/testimonials/pic5.jpg" width="100" height="100" alt=""></div>
                                            <div class="testimonial-detail">
                                                <h6 class="testimonial-name">SATOM</h6>
                                                <span class="testimonial-position text-primary">Entreprise de ...</span>
                                            </div>
                                        </div>
                                        <div class="quote-right text-primary"></div>
                                    </div>
                                    <div class="testimonial-text">
                                        <p> Ex asperiores architecto nobis atque perferendis consequatur quod, iure at facilis alias natus quis ducimus vel, repellendus rem. Corporis vel id aperiam?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-11">
                                    <div class="testimonial-media">
                                        <div class="d-flex align-items-center">
                                            <div class="testimonial-pic"><img src="images/testimonials/pic6.jpg" width="100" height="100" alt=""></div>
                                            <div class="testimonial-detail">
                                                <h6 class="testimonial-name">CICII</h6>
                                                <span class="testimonial-position text-primary">Entreprise de .....</span>
                                            </div>
                                        </div>
                                        <div class="quote-right text-primary"></div>
                                    </div>
                                    <div class="testimonial-text">
                                        <p>T Ex asperiores architecto nobis atque perferendis consequatur quod, iure at facilis alias natus quis ducimus vel, repellendus rem. Corporis vel id aperiam?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="num-pagination style-2">
                            <div class="testimonial-1-next btn-prev"><i class="fa fa-arrow-left"></i></div>
                            <div class="testimonial-1-pagination"></div>
                            <div class="testimonial-1-prev btn-next"><i class="fa fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>


<!-- Ils nous font confiance -->
<div class="section-full bg-white content-inner-1">
    <div class="container">
        <div class="section-head style-1 text-center">
            <h6 class="sub-title text-primary">Nos Partenaires</h6>
            <h2 class="title">Ils nous font confiance</h2>
        </div>
        <div class="row justify-content-center">
            <!-- Logo 1 -->
            <div class="col-lg-2 col-md-4 col-sm-6 m-b30">
                <div class="client-logo">
                    <img src="{{ asset('assets/images/clients/logo1.png') }}" alt="Logo 1" class="img-fluid">
                </div>
            </div>
            <!-- Logo 2 -->
            <div class="col-lg-2 col-md-4 col-sm-6 m-b30">
                <div class="client-logo">
                    <img src="{{ asset('assets/images/clients/logo2.png') }}" alt="Logo 2" class="img-fluid">
                </div>
            </div>
            <!-- Logo 3 -->
            <div class="col-lg-2 col-md-4 col-sm-6 m-b30">
                <div class="client-logo">
                    <img src="{{ asset('assets/images/clients/logo3.png') }}" alt="Logo 3" class="img-fluid">
                </div>
            </div>
            <!-- Logo 4 -->
            <div class="col-lg-2 col-md-4 col-sm-6 m-b30">
                <div class="client-logo">
                    <img src="{{ asset('assets/images/clients/logo4.png') }}" alt="Logo 4" class="img-fluid">
                </div>
            </div>
            <!-- Logo 5 -->
            <div class="col-lg-2 col-md-4 col-sm-6 m-b30">
                <div class="client-logo">
                    <img src="{{ asset('assets/images/clients/logo5.png') }}" alt="Logo 5" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ils nous font confiance END -->
@endsection