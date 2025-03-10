<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Scolaire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Gestion Scolaire</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/classe') }}">Gestion Classe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/professeur') }}">Gestion Professeur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/etablissement') }}">Gestion Etablissement</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sections -->
    <div class="container mt-4">
        <section id="gestion-classe">
            <h2>Gestion des Classes</h2>
            <p>Gérez les classes, ajoutez des élèves et affectez les enseignants.</p>
        </section>

        <hr>

        <section id="gestion-cours">
            <h2>Gestion Établissement</h2>
        <p>Gérez les informations relatives à l'établissement, y compris les infrastructures, les départements et les services.</p>
        </section>

        <hr>
        <h2>Gestion Professeurs</h2>
        <p>Suivez et administrez les professeurs, leurs matières enseignées et leur emploi du temps.</p>
        
        </section>
    </div>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
