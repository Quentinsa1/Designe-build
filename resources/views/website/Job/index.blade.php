@extends('partials.template')
@section('content')
    <!-- Contenu -->
    <div class="page-content bg-white">
        <!-- Bannière intérieure -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ asset('assets/images/background/b2.jpg') }});">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white"  style="text-align: center">Nos Offres</h1>
                </div>
            </div>
        </div>
        <!-- Fin de la bannière intérieure -->
        <!-- Fil d'Ariane -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('website.index') }}">Accueil</a></li>
                    <li>Nos Offres</li>
                </ul>
            </div>
        </div>
        <!-- Fin du fil d'Ariane -->
        <!-- Zone de contenu -->
        <div class="content-area">
            <!-- Carrière -->
            <div class="container">
                <div class="row">
                    <!-- Partie gauche -->
                    <div class="col-lg-9 col-md-8 m-b30">
                        <h1 class="m-b20 m-t0">Nos Postes Ouverts</h1>
                        <div class="dez-separator bg-primary"></div>
                        <p><strong>Lorem Ipsum est un texte factice standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices.</strong></p>

                        <h2 class="m-t30 m-b10">Responsable Développement Commercial</h2>
                        <ul class="list-angle-right">
                            <li><strong>Type de contrat :</strong> Temps plein</li>
                            <li><strong>Qualifications :</strong> Bac+3/5 en commerce ou équivalent</li>
                            <li><strong>Expérience :</strong> 1-3 ans</li>
                            <li><strong>Localisation :</strong> France</li>
                        </ul>
                        <p>Lorem Ipsum est un texte factice standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices. Ce texte a survécu non seulement à cinq siècles, mais aussi à l'avènement de l'informatique, sans que son contenu n'en soit modifié.</p>
                        <p>Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>

                        <h3>Ce que nous offrons</h3>
                        <ul class="list-check-circle primary">
                            <li>Environnement de travail dynamique et stimulant</li>
                            <li>Opportunités d'évolution de carrière</li>
                            <li>Rémunération attractive avec package avantageux</li>
                            <li>Formations continues pour développer vos compétences</li>
                            <li>Horaires flexibles et possibilité de télétravail</li>
                            <li>Mutuelle d'entreprise et autres avantages sociaux</li>
                        </ul>
                        <a href="javascript:void(0);" class="site-button button-skew"><span>Postuler</span><i class="fa fa-angle-right"></i></a>

                        <h2 class="m-t30 m-b10">Développeur Construction</h2>
                        <ul class="list-angle-right">
                            <li><strong>Type de contrat :</strong> Temps plein</li>
                            <li><strong>Qualifications :</strong> Diplôme d'ingénieur ou équivalent</li>
                            <li><strong>Expérience :</strong> 1-3 ans</li>
                            <li><strong>Localisation :</strong> France</li>
                        </ul>
                        <p>Lorem Ipsum est un texte factice standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices. Ce texte a survécu non seulement à cinq siècles, mais aussi à l'avènement de l'informatique, sans que son contenu n'en soit modifié.</p>
                        <p>Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte.</p>

                        <h3>Ce que nous offrons</h3>
                        <ul class="list-check-circle primary">
                            <li>Projets innovants et variés</li>
                            <li>Équipement de travail haut de gamme</li>
                            <li>Participation aux frais de transport</li>
                            <li>Ticket-restaurant</li>
                            <li>Équipe soudée et ambiance conviviale</li>
                            <li>Participation aux séminaires et conférences du secteur</li>
                        </ul>
                        <a href="javascript:void(0);" class="site-button button-skew"><span>Postuler</span><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- Fin de la partie gauche -->

                </div>
            </div>
        </div>
    </div>
@endsection