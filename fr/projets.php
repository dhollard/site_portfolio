<!doctype html>
<html lang="fr">

<head>
    <!-- Balises communes -->
    <?php include_once('../assets/module/head-module.php'); ?>

    <!-- Appels ressources page -->
    <link rel="stylesheet" href="/assets/css/style-projets.css">

    <!-- SEO et identité page -->
    <link rel="canonical" href="https://darius-hollard.com/fr/projets" />
    <title>Mes projets</title>
    <meta name="description" content="Découvrez mes projets au travers de pages dédiées qui détaillent le processus de création."/>

</head>

<body>

    <!-- navbar -->
    <?php include_once('../assets/module/navbar.php'); ?>

    <main>

        <!-- Section 01 -->
        <section id="sec-proj-01">

            <!--  Bandeau titre -->
            <div class="page-header">
                <h1>Mes projets</h1>
            </div>

            <div class="grid-wrapper">
                <div class="projet-grid">

                    <a id="Proj_web_site_portfolio_DH_2023" class="projet-bloc" href="/fr/projet/2023-portfolio-dh/">
                        <h2 class="projet-titre">Site portfolio</h2>

                        <p class="projet-date">2023</p>
                        <span class="sepa-info">-</span>
                        <p class="projet-marque">DH</p>
                        
                        <div class="projet-visuel">
                            <div class="projet-miniature"></div>
                            <div class="projet-overlay"></div>
                        </div>
                    </a>

                    <a id="Proj_teasing" class="projet-bloc">
                        <h2 class="projet-titre">Prochainement...</h2>

                        <p class="projet-date"></p>
                        <span class="sepa-info"></span>
                        <p class="projet-marque"></p>
                        
                        <div class="projet-visuel">
                            <div class="projet-miniature"></div>
                            <div class="projet-overlay"></div>
                        </div>
                    </a>

                </div>
            </div>

        </section>


    </main>

    <!-- Footer -->
    <?php include_once('../assets/module/footer.php'); ?>

    <!-- Appels et scripts de fin de page -->
    <?php include_once('../assets/module/end-page-module.php'); ?>

</body>

</html>