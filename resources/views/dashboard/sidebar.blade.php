<aside class="sidebar">
    <div class="sidebar-brand">
        <h2>Dashboard</h2>
    </div>

    <div class="sidebar-menu">
        <h3>Réalisation</h3>
        <ul>
            <li>
                <a href="{{ route('realisations.index') }}" class="active">
                    <i class="fas fa-list"></i>
                    <span>Liste des Réalisations</span>
                </a>
            </li>
            <li>
                <a href="{{ route('realisations.create') }}">
                    <i class="fas fa-plus-circle"></i>
                    <span>Poster une Réalisation</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidebar-menu">
        <h3>Actualité</h3>
        <ul>
            <li>
                <a href="#">
                    <i class="fas fa-newspaper"></i>
                    <span>Liste des Actualités</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-plus"></i>
                    <span>Poster une Actualité</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidebar-menu">
        <h3>Offre</h3>
        <ul>
            <li>
                <a href="{{ route('offres.index') }}">
                    <i class="fas fa-briefcase"></i>
                    <span>Liste des Offres</span>
                </a>

            </li>
            <li>
                <a href="{{ route('offres.create') }}">
                    <i class="fas fa-plus-square"></i>
                    <span>Poster une Offre</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-menu">
        <h3>Expertises</h3>
        <ul>
            <li>
                <a href="{{ route('expertises.index') }}">
                    <i class="fas fa-briefcase"></i>
                    <span>Liste Expertises</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dashboard.categories.create') }}">
                    <i class="fas fa-plus-square"></i>
                    <span>Poster Expertise</span>
                </a>
            </li>
        </ul>
    </div>


    <div class="sidebar-menu">
        <h3>Message</h3>
        <ul>
            <li>
                <a href="{{ route('messages.index') }}">
                    <i class="fas fa-envelope"></i>
                    <span>Liste des messages reçus</span>
                </a>
            </li>
        </ul>
    </div>
</aside>