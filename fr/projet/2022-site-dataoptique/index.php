<!doctype html>
<html lang="fr">

<head>
    <!-- Balises communes -->
    <?php include_once('../../../assets/module/head-module.php'); ?>

    <!-- Appels ressources page -->
    <link rel="stylesheet" href="/assets/css/style-2022-site-dataoptique.css">

    <!-- SEO et identité page -->
    <link rel="canonical" href="https://darius-hollard.com/fr/projet/2022-site-dataoptique/" />
    <title>Site internet - DataOptique</title>
    <meta name="description" content="Projet réalisé en 2022 - Création du site internet de l'entreprise DataOptique" />

</head>

<body>

    <!-- navbar -->
    <?php include_once('../../../assets/module/navbar.php'); ?>

    <main>

        <!-- ********** Section en-tête page projet ********** -->
        <section id="Header_projet">
            <h1 id="Titre_page">Site internet DataOptique</h1>
            <div id="Scroll_btn_header" onclick="headerScrollButton()">
                <span class="scroll-btn-header-icon"></span>
            </div>
        </section>

        <!-- ********** Section "résumé du projet" ********** -->
        <section id="Resume_projet" class="section-projet">

            <div class="section-bloc">
                <div class="section-ligne">

                    <div class="section-colonne full-col">

                        <div class="module-resume">

                            <div class="txt-resume-projet">
                                <h2 class="titre-section">01 - Résumé du projet</h2>

                                <div class="bloc-texte">
                                    <p>Au début de l'année 2021, j'ai été chargé de créer le site vitrine de l'entreprise DataOptique.</p>

                                    <p>J'avais déjà eu pour mission de concevoir d'autres sites pour les services proposés par cette entreprise. Cependant, le besoin d'une plateforme regroupant l'ensemble de ses solutions et son identité se faisait ressentir.</p>

                                    <p>Il était nécessaire de réaliser ce site dans un délai court, ce qui m'a amené vers un design allant à l'essentiel. J'ai gagné du temps sur la durée totale du projet, en limitant la phase de recherche et de prototypage.</p>

                                    <p>Le site dans son ensemble reprend l'identité visuelle de DataOptique (orange et gris) et chaque solution est associée à une couleur afin d'aider les clients à les différencier.</p>

                                    <p>J'ai mené à bien ce projet avec d'autres collaborateurs de DataOptique, principalement pour l'écriture des textes et leurs validations. J'ai pris en charge l'intégralité du design et du développement du produit.</p>
                                </div>
                            </div>


                            <div class="infos-projet">
                                <span class="bloc-infos-projet">
                                    <p id="Info_resume_01" class="titre-infos-projet"><?php include('../../../assets/module/modules-projets/infotitre-resume-proj-01.php'); ?></p>
                                    <p>UI/UX design</p>
                                    <p>Développement</p>
                                </span>

                                <span class="bloc-infos-projet">
                                    <p id="Info_resume_02" class="titre-infos-projet"><?php include('../../../assets/module/modules-projets/infotitre-resume-proj-02.php'); ?></p>
                                    <p>Product Designer et développeur</p>
                                </span>

                                <span class="bloc-infos-projet">
                                    <p id="Info_resume_03" class="titre-infos-projet"><?php include('../../../assets/module/modules-projets/infotitre-resume-proj-03.php'); ?></p>
                                    <p>3 mois (2022)</p>
                                </span>

                                <span class="bloc-infos-projet">
                                    <p id="Info_resume_04" class="titre-infos-projet"><?php include('../../../assets/module/modules-projets/infotitre-resume-proj-04.php'); ?></p>
                                    <p>DataOptique</p>
                                    <p class="info-projet-secondaire">(spécialiste collecte de données d'enquête)</p>
                                </span>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <div class="section-bloc">

                <div class="section-ligne">

                    <div class="section-colonne full-col">

                        <figure class="zone-cadre-video">

                            <div class="cadre-scrollable">
                                <!-- Fausse barre de navigateur -->
                                <?php include('../../../assets/module/modules-projets/navibar-cadre-desk.php'); ?>

                                <div class="cadre-content-wrapper">
                                    <!-- Vidéo format mobile -->
                                    <video class="bloc-video mobile-video" width="100%" height="auto" autoplay playsinline loop muted>
                                        <source src="video/showreel-mobile.webm" type="video/webm">
                                        <source src="video/showreel-mobile.mp4" type="video/mp4">
                                        Votre navigateur ne peut pas lire cette vidéo.
                                    </video>

                                    <!-- Vidéo format ordinateur -->
                                    <video class="bloc-video desktop-video" width="100%" height="auto" autoplay playsinline loop muted>
                                        <source src="video/showreel-desktop.webm" type="video/webm">
                                        <source src="video/showreel-desktop.mp4" type="video/mp4">
                                        Votre navigateur ne peut pas lire cette vidéo.
                                    </video>
                                </div>
                            </div>

                            <figcaption class="legende-visuel">Démo vidéo du site www.dataoptique.com, <a href="https://www.dataoptique.com/" target="_blank">cliquez-ici pour découvrir le site.</a></figcaption>

                        </figure>

                    </div>

                </div>

            </div>

        </section>

    </main>

    <div id="Overlay_sommaire" class="">

    </div>

    <!-- Pre-footer pages projets -->
    <?php include_once('../../../assets/module/modules-projets/end-bloc-projet.php'); ?>

    <!-- Footer -->
    <?php include_once('../../../assets/module/footer.php'); ?>

    <!-- Appels et scripts de fin de page -->
    <?php include_once('../../../assets/module/end-page-module.php'); ?>

    <!-- Appel scripts spéciaux pages projets -->
    <?php include_once('../../../assets/module/modules-projets/page-projet-module-script.php'); ?>

</body>

</html>