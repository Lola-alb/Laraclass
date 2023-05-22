<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">   
    <title>Laraclass</title>
</head>
<body>
    <header>
        <nav>
            <div class="navbar-logo"> <img class="image-logo" src="#" alt=" "></div>
            <div>
                <ul>
                    <li class="menu-item"><a href="/">Tous les étudiants</a></li>
                    <li class="menu-item"><a href="/classroom">Trier par classe</a></li>
                    <li class="menu-item"><a href="/form">Ajouter un étudiant</a></li>
                </ul>
            </div>           
        </nav>
        <a href="#" class="toggle-button" id="menu">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
		</a>
    </header>
    <main>
        @yield('content')
    </main>
</body>
<script src="../js/app.js"></script>
</html>