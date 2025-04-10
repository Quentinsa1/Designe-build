@extends('partials.template')
@section('content')
<div class="page-content">
    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ asset('assets/images/background/b2.jpg') }});">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white" style="text-align: center">Nos Expertises</h1>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="javascript:void(0);">Acceuil</a></li>
                <li>Nos Expertises</li>
            </ul>
        </div>
    </div>
    <!-- contact area -->
    <div class="section-full content-inner bg-white">
        <!-- Services  -->
        <div class="container">
            <div class="row ">
                <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                    <div class="dez-box">
                        <div class="dez-media"> <a href="javascript:void(0);"><img src="images/our-work/pic1.jpg" alt=""></a> </div>
                        <div class="dez-info p-a30 border-1">
                            <h4 class="dez-title m-t0"><a href="javascript:void(0);">BÂTIMENTS </a></h4>
                            <p>conception à la réception de tous types d’ouvrages : logements, villas, bâtiments industriels, commerciaux… avec réflexion, réalisation et direction des travaux.. 100% Design & Build.[...] </p>
                            <a href="javascript:void(0);" class="site-button">Voir Plus</a> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                    <div class="dez-box">
                        <div class="dez-media"> <a href="javascript:void(0);"><img src="images/our-work/pic2.jpg" alt=""></a> </div>
                        <div class="dez-info p-a30 border-1">
                            <h4 class="dez-title m-t0"><a href="javascript:void(0);">Ingénierie de conception & d’exécution</a></h4>
                            <p>Études, plans, DAO, suivi, contrôle, assistance marchés, direction de chantier, réception[...]</p>
                            <a href="javascript:void(0);" class="site-button">Voir Plus</a> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                    <div class="dez-box">
                        <div class="dez-media"> <a href="javascript:void(0);"><img src="images/our-work/pic3.jpg" alt=""></a> </div>
                        <div class="dez-info p-a30 border-1">
                            <h4 class="dez-title m-t0"><a href="javascript:void(0);">BIM & SIG</a></h4>
                            <p>Maquettes numériques, synthèse technique, production de plans et documents à partir du modèle.[...] </p>
                            <a href="javascript:void(0);" class="site-button">More</a> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                    <div class="dez-box">
                        <div class="dez-media"> <a href="javascript:void(0);"><img src="images/our-work/pic1.jpg" alt=""></a> </div>
                        <div class="dez-info p-a30 border-1">
                            <h4 class="dez-title m-t0"><a href="javascript:void(0);">Visualisation architecturale & urbanisme</a></h4>
                            <p>Création de rendus 3D pour aider à la projection et à la décision[...] </p>
                            <a href="javascript:void(0);" class="site-button">Voir Plus</a> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                    <div class="dez-box">
                        <div class="dez-media"> <a href="javascript:void(0);"><img src="images/our-work/pic2.jpg" alt=""></a> </div>
                        <div class="dez-info p-a30 border-1">
                            <h4 class="dez-title m-t0"><a href="javascript:void(0);">DESIGN D’INTÉRIEUR</a></h4>
                            <p>Valorisation de l’espace intérieur jusqu’aux finitions.[...]</p>
                            <a href="javascript:void(0);" class="site-button">More</a> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 m-b10">
                    <div class="dez-box">
                        <div class="dez-media"> <a href="javascript:void(0);"><img src="images/our-work/pic3.jpg" alt=""></a> </div>
                        <div class="dez-info p-a30 border-1">
                            <h4 class="dez-title m-t0"><a href="javascript:void(0);">Suivi de travaux
                            </a></h4>
                            <p>Méthodologie de pilotage de chantier, contrôle qualité, respect des délais et budgets[...] </p>
                            <a href="javascript:void(0);" class="site-button">Voir Plus</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
