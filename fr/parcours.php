<!doctype html>
<html lang="fr">

<head>
    <!-- Balises communes -->
    <?php include_once('../assets/module/head-module.php'); ?>

    <!-- Appels ressources page -->
    <link rel="stylesheet" href="/assets/css/style-parcours.css">

    <!-- SEO et identité page -->
    <link rel="canonical" href="https://www.darius-hollard.com/fr/parcours.php" />
    <title>Mon parcours</title>
    <meta name="description" content="Je m'appelle Darius Hollard et je suis designer polyvalent. Découvrez mon parcours et mes qualifications en consultant cette page." />

</head>

<body>

    <!-- navbar -->
    <?php include_once('../assets/module/navbar.php'); ?>

    <main>

        <!-- Section 01 -->
        <section id="sec-parc-01">

            <div class="parc-header">
                <h1 class="page-title">Mon parcours</h1>
            </div>

            <div class="timeline-container">

                <div class="time-row">
                    <h2 class="time-date">2014 - 2018</h2>

                    <div class="time-module">
                        <div class="module-content">
                            <h3 class="mod-title">Études de Communication et de Design</h3>
                            <p class="mod-txt">Mes deux premiers diplômes d’études supérieures m’ont permis d’apprendre les compétences théoriques et pratiques pour devenir un designer graphique professionnel.</p>
                            <div class="mod-toggled">
                                <span class="mod-separator"></span>
                                <p class="mod-txt">Mon BTS Communication m’a enseigné le savoir théorique des canaux de communications passés et actuels, et les méthodes employées pour toucher et convaincre une large audience.</p>
                                <p class="mod-txt">Mon diplôme de Designer m’a apporté les capacités plus techniques nécessaires à la création de contenus visuels comme un site web ou une illustration. Quelques exemples :</p>
                                <ul>
                                    <li>Règles de typographique, colorimétrie, espacement et de mise en page</li>
                                    <li>Utilisation de la Suite Adobe</li>
                                    <li>Bases de code en HTML / CSS</li>
                                    <li>Créations d’illustrations et de pictogrammes</li>
                                </ul>
                            </div>
                        </div>
                        <button class="mod-bottom-bar">
                            <img src="/assets/svg/ico-croix-blanc.svg">
                            <p>En savoir plus</p>
                        </button>
                    </div>

                </div>
            </div>



            </div>


        </section>

    </main>

    <!-- Footer -->
    <?php include_once('../assets/module/footer.php'); ?>

    <!-- Appels et scripts de fin de page -->
    <?php include_once('../assets/module/end-page-module.php'); ?>

    <!-- Script de dépliage et de repliage des modules timeline -->
    <script>
        document.querySelector('.mod-bottom-bar').addEventListener('click', function() {
            // toggle the class for mod-toggled element
            var toggledContent = document.querySelector('.mod-toggled');
            toggledContent.classList.toggle('visible');

            // toggle the class for the img element
            var img = document.querySelector('.mod-bottom-bar img');
            img.classList.toggle('open');
        });
    </script>

</body>

</html>