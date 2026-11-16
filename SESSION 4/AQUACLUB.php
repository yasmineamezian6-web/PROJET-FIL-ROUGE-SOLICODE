<?php

$sports = [
    'plongee' => 'Plongée',
    'natation' => 'Natation',
    'nage-a-palme' => 'Nage à palme',
    'apnee' => 'Apnée',
    'ski-nautique' => 'Ski nautique',
    'voile' => 'Voile',
    'surf' => 'Surf',
    'windsurf' => 'Wind Surf',
    'kayak' => 'Kayak',
];

$cities = [
    'tanger' => 'Tanger',
    'nador' => 'Nador',
    'belyounech' => 'Belyounech',
    'fes' => 'Fès',
    'meknes' => 'Meknès',
    'marrakech' => 'Marrakech',
    'tetouan' => 'Tétouan',
    'kenitra' => 'Kénitra',
    'sale' => 'Salé',
    'rabat' => 'Rabat',
    'bouznika' => 'Bouznika',
    'mohammedia' => 'Mohammedia',
    'casablanca' => 'Casablanca',
    'agadir' => 'Agadir',
    'al-hoceima' => 'Al Hoceïma',
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AquaClub - Clubs et salles de sport au Maroc</title>

    <link rel="stylesheet" href="AQUACLUB.CSS">
</head>

<body>

    <section class="navbar">

        <div class="logo">
            <img class="logo2"
                 src="Image/Aquaclub-logo2.jpg .png"
                 alt="AquaClub Logo">
        </div>

        <div class="navbar-containes">

            <nav class="menu">
                <a href="#">ACCUEIL</a>
                <a href="#">CLUBS</a>
                <a href="#">OFFRES</a>
                <a href="#">ACTIVITÉS</a>
                <a href="#">ÉVÉNEMENTS</a>
                <a href="#">CONTACT</a>
            </nav>

            <div class="btn">
                <button class="sub">S'INSCRIRE</button>
                <button class="CON">SE CONNECTER</button>
            </div>

        </div>

    </section>



    <main class="contenue">
        <section class="first-part">

            <div class="hero-bg">
                <img src="Image/Image-club.jpg"
                     alt="Salle de sport">
            </div>

            <div class="main-text">

                <h1>
                    Trouver facilement votre club ou salle de sport au Maroc
                </h1>

                <p>
                    Nous vous aiderons à trouver le club ou la salle de sport
                    la plus proche de chez vous
                </p>

            </div>


            <!-- BARRE DE RECHERCHE -->
            <div class="search-box">

                <div class="sports">
    <select id="sport" name="sport">

        <option value="">TOUS LES SPORTS</option>

        <?php foreach ($sports as $value => $label): ?>

            <option value="<?= htmlspecialchars($value) ?>">
                <?= htmlspecialchars($label) ?>
            </option>

        <?php endforeach; ?>

    </select>
</div>


               <div class="city">

    <select id="city" name="city">

        <option value="">TOUTES LES VILLES</option>

        <?php foreach ($cities as $value => $label): ?>

            <option value="<?= htmlspecialchars($value) ?>">
                <?= htmlspecialchars($label) ?>
            </option>

        <?php endforeach; ?>

    </select>

</div>

                <button class="search-btn">
                    ⌕ CHERCHER
                </button>

            </div>

        </section>

    </main>


    
    <section class="propos">

        <article>

            <div class="position">

                <img src="Image/POINT-GPS.png" alt="Localisation">

                <h3>+1540 Clubs de sport</h3>

                <p>
                    Plusieurs clubs et salles de sport partout au Maroc.
                </p>

            </div>


            <div class="gift">

                <img src="Image/GIFT.png" alt="Cadeau">

                <h3>Séances d'essai gratuites</h3>

                <p>
                    Testez la salle de votre choix et comparez les clubs.
                </p>

            </div>


            <div class="reservation">

                <img src="Image/CALENDRIER.png" alt="Réservation">

                <h3>Réservation à la séance</h3>

                <p>
                    Réservez vos e-tickets pour un sport sans engagement.
                </p>

            </div>


            <div class="promotion">

                <img src="Image/PROMOTION.png" alt="Promotion">

                <h3>Promotions exclusives</h3>

                <p>
                    Suivez et profitez des promotions de nos partenaires.
                </p>

            </div>

        </article>

    </section>


    <section class="conseil">

        <div class="titre">

            <h1>
                Conseils en sport et nutrition sur notre blog
            </h1>

            <p>
                Trouvez les derniers articles de conseils en sport et nutrition sur notre blog.
            </p>

        </div>

        <div class="articles-grid">


            <div class="article">

                <img src="Image/CONSEIL1.jpg"
                     alt="Escalade au Maroc">

                <div class="texte">

                  =

                    <p>Publié il y a 1 an</p>

                </div>

            </div>


            <div class="article">

                <img src="Image/CONSEIL2.png"
                     alt="Padel au Maroc">

                <div class="texte">

                   

                    <p>Publié il y a 1 an</p>

                </div>

            </div>


            <div class="article">

                <img src="Image/CONSEIL3.png"
                     alt="Sport et santé">

                <div class="texte">

            

                    <p>Publié il y a 1 an</p>

                </div>

            </div>

        </div>


        <button class="consulter">
            › CONSULTEZ NOTRE BLOG
        </button>

    </section>


  
    <section class="disciplines">

        <div class="titre2">

            <h1>
                Découvrez plus de 100 disciplines sportives au Maroc
            </h1>

            <p>
                Découvrez tous les sports que vous pouvez pratiquer
                dans les clubs et les salles de sport au Maroc.
            </p>

        </div>


        <div class="sport">


            <div class="sport-card">

                <img src="Image/plonger.jpg" alt="Plongée">

                <div class="sport-text">

                    <h3>PLONGÉE</h3>

                    <p>Clubs et centres de plongée</p>

                </div>

            </div>


            <div class="sport-card">

                <img src="Image/natation.jpg" alt="Natation">

                <div class="sport-text">

                    <h3>NATATION</h3>

                    <p>Clubs et centres de natation</p>

                </div>

            </div>


            <div class="sport-card">

                <img src="Image/nage-a-palme.jpg" alt="Nage à palmes">

                <div class="sport-text">

                    <h3>NAGE À PALMES</h3>

                    <p>Clubs de nage à palmes</p>

                </div>

            </div>


            <div class="sport-card">

                <img src="Image/surf.jpg" alt="Surf">

                <div class="sport-text">

                    <h3>SURF</h3>

                    <p>Clubs et écoles de surf</p>

                </div>

            </div>


            <div class="sport-card">

                <img src="Image/kayak.jpg" alt="Kayak">

                <div class="sport-text">

                    <h3>KAYAK</h3>

                    <p>Clubs et centres de kayak</p>

                </div>

            </div>


            <div class="sport-card">

                <img src="Image/voile.jpg" alt="Voile">

                <div class="sport-text">

                    <h3>VOILE</h3>

                    <p>Clubs et écoles de voile</p>

                </div>

            </div>


            <div class="sport-card">

                <img src="Image/ski-nautique.jpg" alt="Ski nautique">

                <div class="sport-text">

                    <h3>SKI NAUTIQUE</h3>

                    <p>Clubs de ski nautique</p>

                </div>

            </div>


            <div class="sport-card">

                <img src="Image/windsurf.jpg" alt="Windsurf">

                <div class="sport-text">

                    <h3>WINDSURF</h3>

                    <p>Clubs et écoles de windsurf</p>

                </div>

            </div>

        </div>


        <button class="voir-sports">

            › CONSULTEZ PLUS DE 100 SPORTS A PRATIQUER AU MAROC

        </button>

    </section>


<footer class="footer">

    <div class="footer-content">

        <div class="footer-logo">
            <h2>AQUA<span>CLUB</span></h2>
            <p>Le sport près de chez vous partout au Maroc.</p>
        </div>

        <div class="footer-links">
            <a href="#">Accueil</a>
            <a href="#">Clubs</a>
            <a href="#">Activités</a>
            <a href="#">Contact</a>
        </div>

    </div>

    <div class="footer-bottom">
        <p> AquaClub le monde du sport entre vos main </p>
    </div>

</footer>



</body>
