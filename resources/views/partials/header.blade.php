<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('website.index') }}">
            <img src="assets/images/IAC1.png" alt="" 
                 class="logo-icon" 
                 style="width: 180px; height: auto;">           
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                {{-- Accueil --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('website.index') }}" id="homeDropdown"
                       role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Accueil
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                        <li><a class="dropdown-item" href="{{ route('website.index') }}#slogan">Slogan</a></li>
                        <li><a class="dropdown-item" href="{{ route('website.index') }}#presentation">Présentation</a></li>
                        <li><a class="dropdown-item" href="{{ route('website.index') }}#mission">Mission</a></li>
                        <li><a class="dropdown-item" href="{{ route('website.index') }}#vision">Vision</a></li>
                        <li><a class="dropdown-item" href="{{ route('website.index') }}#particularite">Notre Particularité</a></li>
                        <li><a class="dropdown-item" href="{{ route('website.index') }}#partenaires">Partenaires</a></li>
                        <li><a class="dropdown-item" href="{{ route('website.index') }}#temoignages">Témoignages</a></li>
                    </ul>
                </li>

                {{-- A propos --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('website.about') }}">À Propos</a>
                </li>

                {{-- Nos Domaines --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('website.expertise.index') }}" id="expertiseDropdown"
                       role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Nos Domaines
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="expertiseDropdown">
                        @foreach(App\Models\CategorieExpertise::with('sousCategories')->active()->orderBy('ordre')->get() as $categorie)
                            <li class="dropdown-header">{{ $categorie->titre }}</li>
                            @foreach($categorie->sousCategories as $sousCategorie)
                                <li>
                                    <a class="dropdown-item" href="{{ route('website.expertise.show', $sousCategorie->slug) }}">
                                        {{ $sousCategorie->nom }}
                                    </a>
                                </li> 
                            @endforeach
                            @if(!$loop->last)
                                <li><hr class="dropdown-divider"></li>
                            @endif
                        @endforeach
                    </ul>
                </li>

                {{-- Réalisations --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('website.realisation') }}">Nos Réalisations</a>
                </li>

                {{-- Actualités --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('website.actualite.index') }}">Actualités</a>
                </li>

                {{-- Contact --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('website.contact') }}">Contactez-Nous</a>
                </li>
            </ul>
        </div>
    </div>
</nav>