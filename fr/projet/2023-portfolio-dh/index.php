<!doctype html>
<html lang="fr">

<head>
    <!-- Balises communes -->
    <?php include_once('../../../assets/module/head-module.php'); ?>

    <!-- Appels ressources page -->
    <link rel="stylesheet" href="/assets/css/style-2023-portfolio-dh.css">

    <!-- SEO et identité page -->
    <link rel="canonical" href="https://darius-hollard.com/fr/projet/2023-portfolio-dh/" />
    <title>Site Portfolio - DH</title>
    <meta name="description" content=""/>

</head>

<body>

    <!-- navbar -->
    <?php include_once('../../../assets/module/navbar.php'); ?>

    <main>

            <!-- ********** Section en-tête page projet ********** -->
            <section id="Header_projet">
                <h1 id="Titre_page">Site portfolio DH</h1>
                <div id="Scroll_btn_header" onclick="headerScrollButton()">
                    <span class="scroll-btn-header-icon"></span>
                </div>
            </section>

            <!-- ********** Section "résumé du projet" ********** -->
            <section id="Resume_projet" class="section-projet">

                <div class="txt-resume-projet">
                    <h2 class="titre-section">01 - Résumé du projet</h2>

                    <div class="bloc-texte">
                        <p>Depuis plusieurs années, je souhaite créer mon site portfolio sur-mesure pour valoriser mes compétences et partager mes projets auprès de collaborateurs, d’amis ou de futurs recruteurs.</p>

                        <p>En fin d’année 2022, j’ai décidé de me lancer et j’ai travaillé sur mon temps libre afin de réaliser ce site.</p>

                        <p>Cette page retrace les différentes étapes du processus de création sous la forme d’une étude de cas.</p>
                    </div>
                </div>
                

                <div class="infos-projet">
                    <span class="bloc-infos-projet">
                        <p id="Info_resume_01" class="titre-infos-projet">Type de projet</p>
                        <p>Design graphique</p>
                        <p>Dev front end</p>
                        <p>UX design</p>
                    </span>

                    <span class="bloc-infos-projet">
                        <p id="Info_resume_02" class="titre-infos-projet">Rôle effectué</p>
                        <p>Gestion du projet de A à Z</p>
                    </span>

                    <span class="bloc-infos-projet">
                        <p id="Info_resume_03" class="titre-infos-projet">Durée du projet</p>
                        <p>250h de travail (2022 - 2023)</p>
                    </span>

                    <span class="bloc-infos-projet">
                        <p id="Info_resume_04" class="titre-infos-projet">Commanditaire</p>
                        <p>Darius Hollard (moi-même)</p>
                    </span>
                </div>

            </section>

            <!-- ********** Section "showreel" ********** -->
            <section id="Showreel_projet" class="section-projet">
                <div class="section-ligne">

                    <div class="full-col">

                        <figure class="bloc-cadre">
                            <div class="cadre-mobile cadre-video">
                            <video class="bloc-video" width="100%" height="auto" autoplay loop muted>
                                <source src="video/showreel-mobile.webm" type="video/webm">
                                <source src="video/showreel-mobile.mp4" type="video/mp4">
                                Votre navigateur ne peut pas lire cette vidéo.
                            </video>
                            </div>

                            <div class="cadre-desktop cadre-video">
                            <video class="bloc-video" width="100%" height="auto" autoplay loop muted>
                                <source src="video/showreel-desktop.webm" type="video/webm">
                                <source src="video/showreel-desktop.mp4" type="video/mp4">
                                Votre navigateur ne peut pas lire cette vidéo.
                            </video>
                            </div>

                            <figcaption class="legende-cadre">Démo du site <a href="https://darius-hollard.com/" target="_blank">darius-hollard.com</a>, scrollez pour voir son processus de création</figcaption>

                        </figure>

                    </div>

                    
                    
                </div>
            </section>

            <!-- ********** Section "objectifs" ********** -->
            <section id="Objectifs_projet" class="section-projet">
                <div class="section-ligne">

                    <div class="section-colonne demi-col">

                        <h2 class="titre-section">02 - Objectifs</h2>

                        <div class="bloc-texte">
                            <p>J’ai débuté la création de ce site pour me permettre d’afficher mes projets et mon parcours sur internet.</p>

                            <p>Son rôle principal est de me permettre de partager ce contenu rapidement avec n’importe qui.</p>

                            <p>Le site portfolio terminé devra remplir le rôle d’un support de présentation esthétique et soigné.</p>

                            <p>Il servira aussi d’exemple concret de mon savoir-faire mis en application.</p>
                        </div>

                    </div>
                    
                    <div class="demi-col">
                        <img src="img/schema-objectifs.png" width="100%">
                    </div>

                </div>

            </section>

    </main>

    <!-- Footer -->
    <?php include_once('../../../assets/module/footer.php'); ?>

    <!-- Appels et scripts de fin de page -->
    <?php include_once('../../../assets/module/end-page-module.php'); ?>

    <!-- Appel scripts spéciaux pages projets -->
    <?php include_once('../../../assets/module/modules-projets/page-projet-module.php'); ?>

</body>

</html>