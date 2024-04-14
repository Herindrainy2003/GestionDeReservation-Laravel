<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Ajoutez ici les liens vers les fichiers CSS personnalisés si nécessaire -->
    <style>
        body.dark-mode {
            background-color: #222;
            color: #fff;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard')}}">
               
                Admin Panel
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                   
   <ul class="navbar-nav me-auto">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('voitures.index') }}">
            <i class="bi bi-car"></i> Voitures
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('places.index') }}">
            <i class="bi bi-parking"></i> Places
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('clients.index') }}">
            <i class="bi bi-person"></i> Clients
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('reservations.index') }}">
            <i class="bi bi-calendar-check"></i> Réservations
        </a>
    </li>
</ul>

                </ul>
                <div class="d-flex">
                    <button class="btn btn-outline-light me-2" id="darkModeToggle">Mode Nuit</button>
                    <a class="btn btn-outline-light me-2" href="#" role="button">Déconnexion</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        const darkModeToggle = document.getElementById('darkModeToggle');
        const body = document.body;

        darkModeToggle.addEventListener('click', () => {
            if (body.classList.contains('dark-mode')) {
                body.classList.remove('dark-mode');
                darkModeToggle.textContent = 'Mode Nuit';
            } else {
                body.classList.add('dark-mode');
                darkModeToggle.textContent = 'Mode Clair';
            }
        });
    </script>
</body>

</html>

   
   
   
   
   
   
   