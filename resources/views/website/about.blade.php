@extends('partials.template')
@section('content')
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle"
            style="background-image:url({{ asset('assets/images/background/b2.jpg') }});">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white" style="text-align: center">A Propos</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('website.index') }}">Acceuil</a></li>
                    <li>A Propos de Nous</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="clearfix">
            <!-- About Company -->
            <div class="section-full content-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-head text-left">
                                <h2 class="text-uppercase">A Propos De 7Elite Design & Build</h2>
                                <h5>Notre Histoire</h5>
                                <div class="aon-separator bg-primary"></div>
                                <p><strong>AVESIG IAC(..........) à 7Elite Design & Build</strong></p>
                                <p class="m-b50">
                                    AVESIG est un cabinet d’ingénierie dynamique et polyvalent installé au BÉNIN et en
                                    France. Nous offrons une gamme complète de services de maitrise d’œuvre et des solutions
                                    3D adaptées à l’ingénierie, des solutions techniques et digitales pour la construction,
                                    le génie civil et la gestion d’infrastructures. Spécialisés dans l’aménagement urbain,
                                    le bâtiment, les voiries et réseaux divers, l’environnement, les transports, et bien
                                    plus encore. Créer à l'initiative des cadres ayant une large et solide expérience,
                                    AVESIG se veut être un instrument important de développement international. Nous sommes
                                    donc fiers d’apporter notre expertise dans chaque projet que nous entreprenons. Notre
                                    différence réside dans notre maitrise du BIM (Building Information Modeling) et notre
                                    utilisation innovante des nouvelles technologies appliquées au Génie urbain. Grâce à ces
                                    atouts, nous créons des solutions sur mesure, optimisées et durables, pour répondre aux
                                    défis complexes de l’urbanisme moderne.
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="icon-bx-wraper bx-style-2 m-l40 m-b30 p-a30 left">
                                        <div class="icon-bx-sm bg-primary radius"> <a href="javascript:void(0);"
                                                class="icon-cell"><i class="flaticon-crane"></i></a> </div>
                                        <div class="icon-content p-l40">
                                            <h5 class="aon-tilte text-uppercase">Bâtiment</h5>
                                            <p>conception à la réception de tous types d’ouvrages : logements, villas, bâtiments industriels, commerciaux… avec réflexion, réalisation et direction des travaux.. 100% Design & Build.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="icon-bx-wraper bx-style-2 m-l40 m-b30 p-a30 left">
                                        <div class="icon-bx-sm bg-primary radius"> <a href="javascript:void(0);"
                                                class="icon-cell"><i class="flaticon-home-repair"></i></a> </div>
                                        <div class="icon-content p-l40">
                                            <h5 class="aon-tilte text-uppercase">Ingénierie de conception & d’exécution</h5>
                                            <p>Études, plans, DAO, suivi, contrôle, assistance marchés, direction de chantier, réception...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="icon-bx-wraper bx-style-2 m-l40 m-b30 p-a30 left">
                                        <div class="icon-bx-sm bg-primary radius"> <a href="javascript:void(0);"
                                                class="icon-cell"><i class="flaticon-construction-1"></i></a> </div>
                                        <div class="icon-content p-l40">
                                            <h5 class="aon-tilte text-uppercase">BIM & SIG</h5>
                                            <p>Maquettes numériques, synthèse technique, production de plans et documents à partir du modèle.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="icon-bx-wraper bx-style-2 m-l40 m-b30 p-a30 left">
                                        <div class="icon-bx-sm bg-primary radius"> <a href="javascript:void(0);"
                                                class="icon-cell"><i class="flaticon-leader"></i></a> </div>
                                        <div class="icon-content p-l40">
                                            <h5 class="aon-tilte text-uppercase">Visualisation architecturale & urbanisme</h5>
                                            <p>Création de rendus 3D pour aider à la projection et à la décision...........</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="icon-bx-wraper bx-style-2 m-l40 m-b30 p-a30 left">
                                        <div class="icon-bx-sm bg-primary radius"> <a href="javascript:void(0);"
                                                class="icon-cell"><i class="flaticon-insurance"></i></a> </div>
                                        <div class="icon-content p-l40">
                                            <h5 class="aon-tilte text-uppercase">Design d’intérieur</h5>
                                            <p>Valorisation de l’espace intérieur jusqu’aux finitions.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="icon-bx-wraper bx-style-2 m-l40 m-b10 p-a30 left">
                                        <div class="icon-bx-sm bg-primary radius"> <a href="javascript:void(0);"
                                                class="icon-cell"><i class="flaticon-building"></i></a> </div>
                                        <div class="icon-content p-l40">
                                            <h5 class="aon-tilte text-uppercase">Suivi de travaux</h5>
                                            <p>Méthodologie de pilotage de chantier, contrôle qualité, respect des délais et budgets.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Company END -->
            <div class="section-full aon-our-services bg-gray bg-img-fix content-inner overlay-black-middle"
                style="background-image:url(images/background/bg2.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 col-sm-6 m-b30">
                            <div class="p-a30 text-white text-center border-3">
                                <div class="icon-lg m-b20">
                                    <div class="icon-cell text-white"> <i class="flaticon-finish-flag"></i> </div>
                                </div>
                                <div class="counter font-26 font-weight-800 text-primary m-b5">1035</div>
                                <span>Projets livrés</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-sm-6 m-b30">
                            <div class="p-a30 text-white text-center border-3">
                                <div class="icon-lg m-b20">
                                    <div class="icon-cell text-white"> <i class="flaticon-leader"></i> </div>
                                </div>
                                <div class="counter font-26 font-weight-800 text-primary m-b5">124</div>
                                <span>Nos Experts</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-sm-6 m-b30">
                            <div class="p-a30 text-white text-center border-3">
                                <div class="icon-lg m-b20">
                                    <div class="icon-cell text-white"> <i class="flaticon-costumer"></i> </div>
                                </div>
                                <div class="counter font-26 font-weight-800 text-primary m-b5">834</div>
                                <span>Clients Satisfaits</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-sm-6 m-b10">
                            <div class="p-a30 text-white text-center border-3">
                                <div class="icon-lg m-b20">
                                    <div class="icon-cell text-white"> <i class="flaticon-development"></i> </div>
                                </div>
                                <div class="counter font-26 font-weight-800 text-primary m-b5">3</div>
                                <span>Pays d'implantation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter END-->
            <!-- Architecture -->
            <div class="section-full aon-our-team bg-white content-inner">
                <div class="container">

                </div>
            </div>
            <!-- Architecture END -->
            <!-- What peolpe are saying -->
            <div class="section-full overlay-black-middle bg-img-fix content-inner-1"
                style="background-image:url(images/background/bg14.jpg);">
                <div class="container">
                    <div class="section-head text-white text-center">
                        <h2 class="text-uppercase">Nos Clients</h2>
                        <span class="title-small">Nos clients témoignent
                        </span>
                        <div class="after-titile-line"></div>
                    </div>
                    <div class="section-content">
                        <div class="testimonial-four owl-carousel owl-theme">
                            <div class="item">
                                <div class="testimonial-4 style-2">
                                    <div class="testimonial-pic"><img src="images/testimonials/pic1.jpg" width="100"
                                            height="100" alt=""></div>
                                    <div class="testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has
                                            been the standard dummy text ever since the when printer. [...]</p>
                                    </div>
                                    <div class="testimonial-detail"> <strong class="testimonial-name">SATOM</strong>
                                        <span class="testimonial-position">Entreprise.........</span> </div>
                                    <div class="quote-right"></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-4 style-2">
                                    <div class="testimonial-pic"><img src="images/testimonials/pic1.jpg" width="100"
                                            height="100" alt=""></div>
                                    <div class="testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has
                                            been the standard dummy text ever since the when printer. [...]</p>
                                    </div>
                                    <div class="testimonial-detail"> <strong class="testimonial-name">SOGEMA</strong>
                                        <span class="testimonial-position">Entreprise.....</span> </div>
                                    <div class="quote-right"></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-4 style-2">
                                    <div class="testimonial-pic"><img src="images/testimonials/pic1.jpg" width="100"
                                            height="100" alt=""></div>
                                    <div class="testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has
                                            been the standard dummy text ever since the when printer. [...]</p>
                                    </div>
                                    <div class="testimonial-detail"> <strong class="testimonial-name">SGDS</strong>
                                        <span class="testimonial-position">Entreprise de ......</span> </div>
                                    <div class="quote-right"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
