<header class="site-header style-1 header mo-left header-style-1 ">
    <!-- top bar -->
    <div class="top-bar clearfix">
        <div class="container">
            <div class=" d-flex bar align-items-center justify-content-between">
                <div class="dez-topbar-left">
                    <ul class="left-space">
                        <li><i class="fa fa-phone"></i>+229 99 53 57 60 / 97 44 68 88/ (+33) 01 73 44 09 99</li>
                        <li><i class="fa fa-envelope"></i>d&b@7elite-group.com</li>
                    </ul>
                </div>
                <div class="dez-topbar-right">
                    <ul class="social-bx list-inline pull-right">
                        <li><a target="_blank" href="https://www.facebook.com/dexignzone/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/dexignzones"><i class="fab fa-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/in/dexignzone"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/dexignzone/"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- top bar END-->
    <!-- main header -->
    <div class="sticky-header header-curve main-bar-wraper navbar-expand-lg">
        <div class="main-bar bg-secondry clearfix ">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header mostion">
                    <a href="{{ route('website.index') }}">
                        <img src="{{ asset('assets/images/IAC.png') }}" width="300" height="15" alt="">
                    </a>
                </div>
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- extra nav -->

                <!-- main nav -->
                 <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <!-- Website Logo -->
                    <div class="logo-header mostion">
                        <a href="{{ route('website.index') }}" class="logo"><img src="{{ asset('assets/images/IAC.png') }}" width="250" height="115" alt=""></a>
                    </div>
                     <ul class="nav navbar-nav">
                        <li> <a href="{{ route('website.index') }}">Acceuil<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li> <a href="javascript:void(0);">Slogan</a>
                                </li>
                                <li> <a href="javascript:void(0);">Présentation</a>
                                </li>
                                <li> <a href="javascript:void(0);">Mission, Vision</a>
                                </li>
                                <li> <a href="javascript:void(0);">Notre Particularité</a>
                                </li>
                                <li> <a href="javascript:void(0);">Partenaires</a>
                                </li>
                                <li> <a href="javascript:void(0);">Témoignages</a>
                                </li>


                            </ul>
                        </li>
                        <li> <a href="{{ route('website.about') }}">A Propos</a>
                        </li>
                        <li> <a href="{{ route('website.expertise') }}">Nos Expertises<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li> <a href="javascript:void(0);">BÂTIMENTS </a></li>
                                <li> <a href="javascript:void(0);">Ingénierie de conception & d’exécution</a></li>
                                <li> <a href="javascript:void(0);">BIM & SIG</a></li>
                                <li> <a href="javascript:void(0);">Visualisation architecturale & urbanisme</a></li>
                                <li> <a href="javascript:void(0);">DESIGN D’INTÉRIEUR</a></li>
                                <li> <a href="javascript:void(0);">Suivi de Travaux</a></li>
                            </ul>
                        </li>
                        <li> <a href="{{ route('website.realistation') }}">Nos Réalisations</a>
                        </li>

                        <li> <a href="javascript:void(0);">Actualités</a>
                        </li>
                        <li> <a href="{{ route('website.job') }}">Offres</a>
                        </li>
                        <li> <a href="javascript:void(0);">FAQ</a>
                        </li>
                        <li> <a href="{{ route('website.contact') }}">Contactez-Nous </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>