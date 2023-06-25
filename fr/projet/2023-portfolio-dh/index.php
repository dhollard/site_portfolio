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
                <div class="section-bloc">

                    <div class="section-ligne">

                        <div class="section-colonne full-col">

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

                                <figcaption class="legende-visuel">Démo du site <a href="https://darius-hollard.com/" target="_blank">darius-hollard.com</a>, scrollez pour voir son processus de création</figcaption>

                            </figure>

                        </div>

                    </div>

                </div>
            </section>

            <!-- ********** Section "objectifs" ********** -->
            <section id="Objectifs_projet" class="section-projet">
                <div class="section-bloc">

                    <div class="section-ligne">
                        <div class="section-colonne demi-col">
                            <h2 class="titre-section">02 - Objectifs</h2>
                        </div>

                    </div>

                    <div class="section-ligne">

                        <div class="section-colonne demi-col">

                            <div class="bloc-texte">
                                <p>J’ai débuté la création de ce site pour me permettre d’afficher mes projets et mon parcours sur internet.</p>

                                <p>Son rôle principal est de me permettre de partager ce contenu rapidement avec n’importe qui.</p>

                                <p>Le site portfolio terminé devra remplir le rôle d’un support de présentation esthétique et soigné.</p>

                                <p>Il servira aussi d’exemple concret de mon savoir-faire mis en application.</p>
                            </div>

                        </div>
                        
                        <div class="section-colonne demi-col">
                            <img class="schema-objectifs" src="img/schema-objectifs.png" width="100%">
                        </div>

                    </div>

                </div>
            </section>

            <!-- ********** Section "Processus de création" ********** -->
            <section id="Processus_projet" class="section-projet">

                <!-- Bloc titre et texte -->
                <div class="section-bloc">
                    <div class="section-ligne">

                        <div class="section-colonne demi-col">
                            <h2 class="titre-section">03 - Processus de création</h2>
                        </div>

                    </div>

                    <div class="section-ligne">
                        <div class="section-colonne demi-col">
                            <p class="phrase-forte">J’ai commencé par évaluer l’ampleur du projet et quelle approche choisir.</p>
                        </div>

                        <div class="section-colonne demi-col">
                            <div class="bloc-texte">
                                <p>La première étape a été de choisir entre différents moyens de mettre en avant mon parcours et mes projets.</p>

                                <p>Réaliser un site portfolio bâti de zéro ? Avoir recourt à un template préfabriqué ? Miser uniquement sur les réseaux sociaux ?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bloc colonnes comparatives -->
                <div id="Bloc_compare_options_site" class="section-bloc">
                    <div class="section-ligne">

                        <div class="section-colonne tiers-col compare-col">
                            <div class="compare-header">
                                <img class="compare-icon" src="svg/ico-compare-negatif-blanc.svg" width="32px">
                                <p class="compare-titre">Réseaux sociaux<br class="retour-ligne"> uniquement</p>
                            </div>
                            <ul class="liste-puce-projet compare-list">
                                <li>Formats et règles imposés par la plateforme tierce (Behance, Instagram...)</li>
                                <li>Fiabilité incertaine dans le temps</li>
                                <li>Portée aléatoire, accès pas toujours garanti sans compte ou application</li>
                            </ul>
                        </div>

                        <div class="section-colonne tiers-col compare-col compare-focus">
                            <div class="compare-header">
                                <img class="compare-icon" src="svg/ico-compare-positif-blanc.svg" width="32px">
                                <p class="compare-titre">Site portfolio<br class="retour-ligne"> original</p>
                            </div>
                            <ul class="liste-puce-projet compare-list">
                                <li>Design totalement libre et donc plus créatif et unique</li>
                                <li>Permet de construire son image de marque à travers l’identité visuelle</li>
                                <li>Une expérience utilisateur sur-mesure</li>
                            </ul>
                        </div>

                        <div class="section-colonne tiers-col compare-col">
                            <div class="compare-header">
                                <img class="compare-icon" src="svg/ico-compare-negatif-blanc.svg" width="32px">
                                <p class="compare-titre">Template basique<br class="retour-ligne"> modifié</p>
                            </div>
                            <ul class="liste-puce-projet compare-list">
                                <li>Ne met pas en avant mes capacités de développement web</li>
                                <li>Rapidement contre-productif pour créer des mises en page originales</li>
                                <li>Similaire à tant d’autres sites et donc oubliable</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Bloc phrase de conclusion -->
                <div class="section-bloc">
                    <div class="section-ligne">

                        <div class="full-col">
                            <p id="Conclusion_sec_processus">Après analyse, un site conçu et codé sur-mesure combiné aux réseaux sociaux, m’a semblé <span class="focus-color">plus complexe mais nettement plus efficace.</span></p>
                        </div>

                    </div>
                </div>

            </section>

            <!-- ********** Section "Structure du site" ********** -->
            <section id="Structure_site" class="section-projet">

                <!-- Bloc titre + texte + schema -->
                <div class="section-bloc">

                    <div class="section-ligne">
                        <div class="section-colonne demi-col">
                            <h2 class="titre-section">I. Structure du site</h2>
                        </div>
                    </div>

                    <div class="section-ligne">
                        <div class="section-colonne demi-col">
                            <p class="phrase-forte">Aller à l’essentiel dans l’arborescence du site en définissant le rôle de chaque page.</p>
                        </div>

                        <div class="section-colonne demi-col">

                            <div class="bloc-texte">
                                <p>Pour la première version de mon site, j’ai imaginé une architecture simple qui répond aux besoins suivants :</p>

                                <ul class="liste-puce-projet">
                                    <li>En savoir plus sur moi rapidement et parcourir mon CV</li>

                                    <li>Voir mes projets passés et la mise en pratique de mes compétences</li>

                                    <li>Pouvoir me contacter facilement</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="section-ligne">
                        <div class="section-colonne full-col">

                            <figure class="bloc-visuel schema-arborescence">

                                <img src="img/schema-arborescence-structure-site.png" width="100%">

                                <figcaption class="legende-visuel">Arborescence planifiée du site après analyse des besoins</figcaption>

                            </figure>

                        </div>
                    </div>

                </div>

                <!-- Bloc texte + post-it -->
                <div class="section-bloc">

                    <div class="section-ligne">
                        <div class="section-colonne demi-col">
                            <p class="phrase-forte">Il faut parfois savoir laisser certaines idées de côté pour plus tard.</p>
                        </div>

                        <div class="section-colonne demi-col">
                            <div class="bloc-texte">
                                <p>Sachant que ce projet allait avancer à un rythme variable sur mon temps libre, j’ai dû mettre de côté certaines idées.</p>

                                <p>Il s’agit d’une situation très fréquente dans le cadre professionnel : savoir prioriser et identifier les tâches nécessaires à la réussite d’un projet.</p>

                                <p>Je souhaite cependant intégrer ces idées dans une future version du site.</p>
                            </div>
                        </div>

                    </div>

                    <div class="section-ligne">
                        <div class="section-colonne full-col">
                            
                            <figure class="bloc-visuel">

                                <div class="post-it-wrapper">

                                    <div class="post-it-bloc">
                                        <div class="post-it-header"></div>
                                        <p class="post-it-text">Créer une section pédagogique qui explique mon métier au travers d’exemples visuels</p>
                                    </div>

                                    <div class="post-it-bloc">
                                        <div class="post-it-header"></div>
                                        <p class="post-it-text">Mettre en place une chasse au trésor dans le site pour les plus curieux</p>
                                    </div>

                                    <div class="post-it-bloc">
                                        <div class="post-it-header"></div>
                                        <p class="post-it-text">Personnaliser la page 404 et autres erreurs</p>
                                    </div>

                                    <div class="post-it-bloc">
                                        <div class="post-it-header"></div>
                                        <p class="post-it-text">Inclure plus d’illustrations et d’animations sur le site</p>
                                    </div>

                                    <div class="post-it-bloc">
                                        <div class="post-it-header"></div>
                                        <p class="post-it-text">Ajouter la totalité de mes projets passés et un système de tri avancé</p>
                                    </div>

                                </div>

                                <figcaption class="legende-visuel">Sélection d’une partie des idées remises à plus tard car trop chronophages ou non essentielles pour la version 1 du site</figcaption>

                            </figure>

                        </div>
                    </div>

                </div>

            </section>

            <!-- ********** Section "Identité visuelle" ********** -->
            <section id="Identite_visuelle" class="section-projet">

                <!-- Bloc titre et outils utilisés + texte -->
                <div class="section-bloc">

                    <div class="section-ligne">
                        <div class="section-colonne demi-col">
                            <h2 class="titre-section">II. Identité visuelle</h2>
                        </div>

                        <div class="section-colonne demi-col">
                            outils utilisés
                        </div>
                    </div>

                    <div class="section-ligne">
                        <div class="section-colonne demi-col">
                            <p class="phrase-forte">J’ai choisi d’évoquer une ambiance moderne et raffinée au travers de la direction artistique.</p>
                        </div>

                        <div class="section-colonne demi-col">

                            <div class="bloc-texte">
                                <p>Pour les couleurs, j’ai choisi un duo rouge clair et vert turquoise, associés à un gris anthracite qui recouvre l’ensemble des pages.</p>

                                <p>Pour les textes, j’ai testé plusieurs combinaisons avant d’opter pour deux typographies sans-serif rondes et élégantes.</p>

                                <p>Afin d’apporter une touche de caractère, j’ai aussi inclus une typo plus traditionnelle, réservée aux gros titres.</p>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Bloc typographies et couleurs utilisées -->
                <div class="section-bloc">

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