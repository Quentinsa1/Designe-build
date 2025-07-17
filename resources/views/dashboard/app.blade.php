<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
       :root {
    --primary: #4361ee;
    --primary-light: #e6ecfe;
    --secondary: #3f37c9;
    --dark: #1a1a2e;
    --light: #f8f9fa;
    --gray: #6c757d;
    --success: #4cc9f0;
    --danger: #f72585;
    --warning: #f8961e;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
}

html, body {
    height: 100%;
}

body {
    display: flex;
    min-height: 100vh;
    background-color: #f5f7fb;
    overflow: hidden;
}

/* Sidebar Styles */
.sidebar {
    width: 260px;
    background: white;
    box-shadow: 0 4px 12px 0 rgba(0, 0, 0, 0.05);
    height: 100vh;
    position: fixed;
    transition: all 0.3s ease;
    overflow-y: auto;
}

.sidebar-brand {
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.sidebar-brand h2 {
    color: var(--primary);
    font-weight: 700;
    font-size: 1.5rem;
}

.sidebar-menu {
    padding: 1.5rem;
}

.sidebar-menu h3 {
    color: var(--gray);
    font-size: 0.875rem;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    font-weight: 600;
    margin-bottom: 1rem;
}

.sidebar-menu ul {
    list-style: none;
}

.sidebar-menu li {
    margin-bottom: 0.5rem;
}

.sidebar-menu a {
    display: flex;
    align-items: center;
    padding: 0.75rem 1rem;
    color: var(--gray);
    text-decoration: none;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.sidebar-menu a:hover {
    background-color: var(--primary-light);
    color: var(--primary);
}

.sidebar-menu a.active {
    background-color: var(--primary-light);
    color: var(--primary);
    font-weight: 500;
}

.sidebar-menu a i {
    margin-right: 0.75rem;
    font-size: 1.1rem;
}

/* Main Content Styles */
.main-content {
    flex: 1;
    margin-left: 260px;
    transition: all 0.3s ease;
    height: 100vh;
    overflow-y: auto;
}

header {
    height: 80px;
    background: white;
    box-shadow: 0 4px 12px 0 rgba(0, 0, 0, 0.05);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 2rem;
}

.search-bar {
    display: flex;
    align-items: center;
    background: #f8f9fa;
    padding: 0.5rem 1rem;
    border-radius: 8px;
    width: 400px;
}

.search-bar input {
    border: none;
    background: transparent;
    padding: 0.5rem;
    width: 100%;
    outline: none;
}

.user-profile {
    display: flex;
    align-items: center;
}

.user-profile img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 0.75rem;
}

.user-info h4 {
    font-size: 0.875rem;
    font-weight: 600;
    margin-bottom: 0.125rem;
}

.user-info p {
    font-size: 0.75rem;
    color: var(--gray);
}

/* Main Container */
.main-container {
    padding: 2rem;
}

.page-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
}

.page-header h1 {
    font-size: 1.75rem;
    font-weight: 600;
    color: var(--dark);
}

.btn {
    padding: 0.75rem 1.5rem;
    border-radius: 8px;
    border: none;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
}

.btn i {
    margin-right: 0.5rem;
}

.btn-primary {
    background-color: var(--primary);
    color: white;
}

.btn-primary:hover {
    background-color: var(--secondary);
}

/* Cards */
.card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 12px 0 rgba(0, 0, 0, 0.05);
    padding: 1.5rem;
    margin-bottom: 2rem;
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
}

.card-header h2 {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--dark);
}

/* Scrollbar styling */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: #555;
}

/* Responsive */
@media (max-width: 768px) {
    .sidebar {
        width: 80px;
        overflow: hidden;
    }

    .sidebar-brand h2,
    .sidebar-menu h3,
    .sidebar-menu a span {
        display: none;
    }

    .sidebar-menu a {
        justify-content: center;
        padding: 1rem 0;
    }

    .sidebar-menu a i {
        margin-right: 0;
        font-size: 1.25rem;
    }

    .main-content {
        margin-left: 80px;
    }
}
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
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
                    <a href="{{ route('dashboard.actualites.index')}}">
                        <i class="fas fa-newspaper"></i>
                        <span>Liste des Actualités</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.actualites.create')}}">
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
                    <a href="{{ route('dashboard.categories.index') }}">
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

    <!-- Main Content -->
    <main class="main-content">
        @include('dashboard.header')

        <div class="main-container">
            @yield('content')
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</body>
</html>