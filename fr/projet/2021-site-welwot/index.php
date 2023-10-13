<!doctype html>
<html lang="fr">

<head>
    <!-- Balises communes -->
    <?php include_once('../../../assets/module/head-module.php'); ?>

    <!-- Appels ressources page -->
    <link rel="stylesheet" href="/assets/css/style-2021-site-welwot.css">

    <!-- SEO et identité page -->
    <link rel="canonical" href="https://darius-hollard.com/fr/projet/2023-portfolio-dh/" />
    <title>Site internet - Welwot</title>
    <meta name="description" content="Projet réalisé en 2021 - Création du site internet de l'entreprise Welwot" />

</head>

<body>

    <!-- navbar -->
    <?php include_once('../../../assets/module/navbar.php'); ?>

    <main>

        <!-- ********** Section en-tête page projet ********** -->
        <section id="Header_projet">
            <h1 id="Titre_page">Site internet Welwot</h1>
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
                                    <p>Texte.</p>

                                    <p>Texte.</p>

                                    <p>Texte.</p>
                                </div>
                            </div>


                            <div class="infos-projet">
                                <span class="bloc-infos-projet">
                                    <p id="Info_resume_01" class="titre-infos-projet">Type de projet</p>
                                    <p>Design graphique</p>
                                    <p>Dev front end</p>
                                    <p>UI/UX design</p>
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
                                    <p>Projet personnel</p>
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
                                    <video id="Video_showreel_mob" class="bloc-video" width="100%" height="auto" autoplay playsinline loop muted>
                                        <source src="video/showreel-mobile.mp4" type="video/mp4">
                                        <source src="video/showreel-mobile.webm" type="video/webm">
                                        Votre navigateur ne peut pas lire cette vidéo.
                                    </video>

                                    <!-- Vidéo format ordinateur -->
                                    <video id="Video_showreel_desk" class="bloc-video" width="100%" height="auto" autoplay playsinline loop muted>
                                        <source src="video/showreel-desktop.webm" type="video/webm">
                                        <source src="video/showreel-desktop.mp4" type="video/mp4">
                                        Votre navigateur ne peut pas lire cette vidéo.
                                    </video>
                                </div>
                            </div>

                            <figcaption class="legende-visuel">Démo du site <a href="https://darius-hollard.com/" target="_blank">darius-hollard.com</a>, continuez la lecture de cette page pour découvrir son processus de création</figcaption>

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
                            <p>J’ai débuté la création de ce site pour rendre accessibles mes projets et mon parcours sur internet.</p>

                            <p>Son but principal est de me permettre de partager mon contenu rapidement avec quelqu'un.</p>

                            <p>Une fois achevé, mon site portfolio devra remplir le rôle d’un support de présentation esthétique et soigné.</p>

                            <p>Il servira aussi d’exemple concret de mon savoir-faire mis en œuvre.</p>
                        </div>

                    </div>

                    <div class="section-colonne demi-col">
                        <picture class="schema-objectifs">
                            <source srcset="img/schema-objectifs.webp" type="image/webp" width="100%" height="auto">
                            <source srcset="img/schema-objectifs.png" type="image/jpeg" width="100%" height="auto">
                            <img src="img/schema-objectifs.png" width="100%" height="auto" alt="">
                        </picture>
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
                        <p class="phrase-forte">J’ai commencé par évaluer l’ampleur du projet et pour quelle approche opter.</p>
                    </div>

                    <div class="section-colonne demi-col">
                        <div class="bloc-texte">
                            <p>La première étape a été de choisir entre différents moyens de mettre en avant mon parcours et mes projets.</p>

                            <p>Réaliser un site portfolio bâti de zéro ? Avoir recours à un template préfabriqué ? Miser uniquement sur les réseaux sociaux ?</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bloc colonnes comparatives -->
            <div id="Bloc_compare_options_site" class="section-bloc">
                <div class="section-ligne">

                    <div class="section-colonne tiers-col compare-col">
                        <div class="compare-header">
                            <img class="compare-icon" src="svg/ico-compare-negatif-blanc.svg" width="32px" alt="icone d'une croix indiquant un sentiment négatif">
                            <p class="compare-titre">Réseaux sociaux<br class="retour-ligne"> uniquement</p>
                        </div>
                        <ul class="liste-puce-projet compare-list">
                            <li>Formats et règles imposés par la plateforme tierce (Behance, Instagram...)</li>
                            <li>Fiabilité incertaine dans le temps</li>
                            <li>Référencement aléatoire, accès sans compte ou application parfois impossible</li>
                        </ul>
                    </div>

                    <div class="section-colonne tiers-col compare-col compare-focus">
                        <div class="compare-header">
                            <img class="compare-icon" src="svg/ico-compare-positif-blanc.svg" width="32px" alt="icone d'un coche indiquant une validation positive">
                            <p class="compare-titre">Site portfolio<br class="retour-ligne"> original</p>
                        </div>
                        <ul class="liste-puce-projet compare-list">
                            <li>Design totalement libre et donc plus créatif et unique</li>
                            <li>Permet de construire son image de marque à travers une identité visuelle</li>
                            <li>Une expérience utilisateur sur-mesure</li>
                        </ul>
                    </div>

                    <div class="section-colonne tiers-col compare-col">
                        <div class="compare-header">
                            <img class="compare-icon" src="svg/ico-compare-negatif-blanc.svg" width="32px" alt="icone d'une croix indiquant un sentiment négatif">
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
                        <p id="Conclusion_sec_processus">Après analyse, un site conçu et codé sur-mesure combiné aux réseaux sociaux, m’a semblé <span class="focus-color">plus ambitieux mais nettement plus efficace.</span></p>
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

                            <img src="img/schema-arborescence-structure-site.png" width="100%" alt="schéma listant les pages du site et leurs rôles">

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
                                    <p class="post-it-text">Personnaliser la page 404 et autres messages</p>
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

                <div class="section-ligne no-gap">
                    <div class="section-colonne demi-col">
                        <h2 class="titre-section">II. Identité visuelle</h2>
                    </div>

                    <div class="section-colonne demi-col">
                        <div class="outil-languette">
                            <p class="outil-txt">Outils<br>utilisés</p>
                            <div class="outil-blob-wrapper">
                                <div class="outil-blob outil-illustrator"></div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="section-ligne">
                    <div class="section-colonne demi-col">
                        <p class="phrase-forte">J’ai choisi d’évoquer une ambiance moderne et élégante au travers de la direction artistique.</p>
                    </div>

                    <div class="section-colonne demi-col">

                        <div class="bloc-texte">
                            <p>Pour les couleurs de l'identité, j’ai sélectionné un duo rouge clair et vert turquoise, associé à un gris anthracite qui habille l’ensemble des pages.</p>

                            <p>Pour les textes du site, j’ai testé plusieurs combinaisons avant d’opter pour deux typographies sans-serif rondes et élégantes.</p>

                            <p>Afin d’apporter une touche de caractère, j’ai aussi inclus une typo plus traditionnelle, réservée aux gros titres.</p>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Bloc typographies et couleurs utilisées -->
            <div id="Bloc_typo_couleur_projet" class="section-bloc">
                <div class="section-ligne">

                    <div class="section-colonne demi-col">
                        <div class="bloc-typographie-projet">

                            <p class="titre-typo">Typographies</p>

                            <div id="Typo_projet_01" class="typo-projet">
                                <p class="typo-showcase">Playfair Display</p>
                                <p class="typo-contexte">Pour les titres importants</p>
                            </div>

                            <div id="Typo_projet_02" class="typo-projet">
                                <p class="typo-showcase">Alegreya Sans</p>
                                <p class="typo-contexte">Pour les titres plus simples</p>
                            </div>

                            <div id="Typo_projet_03" class="typo-projet">
                                <p class="typo-showcase">Assistant</p>
                                <p class="typo-contexte">Pour les paragraphes de texte</p>
                            </div>

                        </div>
                    </div>

                    <div class="section-colonne demi-col">

                        <div class="bloc-palette-couleurs-projet">

                            <p class="titre-couleurs">Couleurs</p>

                            <div id="Palette_projet_01" class="palette-couleurs-projet">
                                <div class="palette-majeure">
                                    <p class="nom-teinte-majeure">Couleur principale</p>
                                    <p class="code-teinte-majeure">#FF6666</p>
                                </div>
                                <div class="palette-mineure">
                                    <div class="carre-palette"></div>
                                    <div class="carre-palette"></div>
                                    <div class="carre-palette"></div>
                                    <div class="carre-palette"></div>
                                    <div class="carre-palette"></div>
                                    <div class="carre-palette"></div>
                                </div>
                            </div>

                            <div id="Palette_projet_02" class="palette-couleurs-projet">
                                <div class="palette-majeure">
                                    <p class="nom-teinte-majeure">Couleur complémentaire</p>
                                    <p class="code-teinte-majeure">#439A86</p>
                                </div>
                                <div class="palette-mineure">
                                    <div class="carre-palette"></div>
                                    <div class="carre-palette"></div>
                                    <div class="carre-palette"></div>
                                    <div class="carre-palette"></div>
                                    <div class="carre-palette"></div>
                                    <div class="carre-palette"></div>
                                </div>
                            </div>

                            <div id="Palette_projet_03" class="palette-couleurs-projet">
                                <div class="palette-majeure">
                                    <p class="nom-teinte-majeure">Couleur d’habillage globale</p>
                                    <p class="code-teinte-majeure">#342B33</p>
                                </div>
                                <div class="palette-mineure">
                                    <div class="carre-palette"></div>
                                    <div class="carre-palette"></div>
                                    <div class="carre-palette"></div>
                                    <div class="carre-palette"></div>
                                    <div class="carre-palette"></div>
                                    <div class="carre-palette"></div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </section>

        <!-- ********** Section "Maquette du site" ********** -->
        <section id="Maquette_site" class="section-projet">

            <!-- Bloc titre et outils utilisés + texte -->
            <div class="section-bloc">

                <div class="section-ligne no-gap">
                    <div class="section-colonne demi-col">
                        <h2 class="titre-section">III. Maquette du site</h2>
                    </div>

                    <div class="section-colonne demi-col">
                        <div class="outil-languette">
                            <p class="outil-txt">Outils<br>utilisés</p>
                            <div class="outil-blob-wrapper">
                                <div class="outil-blob outil-figma"></div>
                                <div class="outil-blob outil-illustrator"></div>
                                <div class="outil-blob outil-photoshop"></div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="section-ligne">
                    <div class="section-colonne demi-col">
                        <p class="phrase-forte">Réaliser une maquette permet de tester ses idées rapidement et de simplifier la phase de développement.</p>
                    </div>

                    <div class="section-colonne demi-col">

                        <div class="bloc-texte">
                            <p>J’ai utilisé Figma pour créer une maquette interactive haute fidélité.</p>

                            <p>En parallèle, certains éléments graphiques ont été conçus sur Adobe Illustrator et Photoshop puis importés dans la maquette.</p>

                            <p>Lorsqu’une page de la maquette est suffisamment aboutie, je la décline sur plusieurs formats.</p>

                            <p>Ce travail supplémentaire permet d’anticiper les besoins et blocages en terme d’expérience responsive, avant d’entamer la phase de développement.</p>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Bloc maquette "page d'accueil" -->
            <div class="section-bloc">

                <div class="section-ligne">
                    <div class="section-colonne full-col">
                        <h3 class="titre-secondaire-section">Sélection de pages issues de la maquette</h3>
                        <span class="sep-ligne"></span>
                    </div>
                </div>

                <div class="section-ligne">
                    <div class="section-colonne demi-col">
                        <p class="phrase-forte focus-color">Page d’accueil :</p>
                        <p class="phrase-forte">Une ambiance visuelle qui introduit mon identité et celle du site.</p>
                    </div>

                    <div class="section-colonne demi-col">

                        <div class="bloc-texte">
                            <p>En arrivant sur le site, l’utilisateur découvre immédiatement mon identité et mes différentes expertises.</p>

                            <p>Au travers d’animations thématiques, j’ai choisi de renforcer l’impact visuel de chaque élément.</p>

                            <p>Le reste de la page d’accueil guide l’utilisateur dans son exploration du site et vers d’autres contenus.</p>

                        </div>

                    </div>
                </div>

                <div class="section-ligne">
                    <div id="Cadre_page_accueil" class="section-colonne full-col">

                        <div class="cadre-trigger">
                            <div class="cadre-scrollable force-mobile">
                                <!-- Fausse barre de navigateur -->
                                <?php include('../../../assets/module/modules-projets/navibar-cadre-desk.php'); ?>

                                <!-- Conteneur visuels -->
                                <div class="cadre-content-wrapper">
                                    <!-- Mobile -->
                                    <picture class="cadre-img-content cadre-content-mobile">
                                        <source srcset="img/maquette-site-accueil-mobile.webp" type="image/webp" width="100%" height="auto">
                                        <source srcset="img/maquette-site-accueil-mobile.png" type="image/jpeg" width="100%" height="auto">
                                        <img src="img/maquette-site-accueil-mobile.png" width="100%" height="auto" alt="image de la maquette de la page d'accueil du site en format mobile">
                                    </picture>

                                    <!-- Desktop -->
                                    <picture class="cadre-img-content cadre-content-desktop">
                                        <source srcset="img/maquette-site-accueil-desktop.webp" type="image/webp" width="100%" height="auto">
                                        <source srcset="img/maquette-site-accueil-desktop.png" type="image/jpeg" width="100%" height="auto">
                                        <img src="img/maquette-site-accueil-desktop.png" width="100%" height="auto" alt="image de la maquette de la page d'accueil du site en format écran large">
                                    </picture>

                                    <!-- Overlay trigger -->
                                    <div class="cadre-trigger-overlay">  
                                        <div class="trigger-instruction-tag">
                                            <div class="trigger-tag-ico"></div>
                                            <div class="trigger-tag-txt"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <figcaption class="legende-visuel">Maquette de la page "accueil"</figcaption>
                        </div>

                        <div class="zone-fullscreen-cadre">

                            <button class="hide-cadre-btn"></button>
                            
                            <div class="fullcadre-top-zone">
                                <figcaption class="legende-visuel-fullcadre">Maquette de la page "accueil"</figcaption>
                                <p class="fullcadre-instruction">
                                    <span class="fullcadre-instruction-ico"></span>
                                    Scrollez la page avec votre
                                    <span class="keyword-fullcadre-instru"></span></p>
                            </div>
                            

                            <div class="cadre-scrollable">
                                <!-- Fausse barre de navigateur -->
                                <?php include('../../../assets/module/modules-projets/navibar-cadre-desk.php'); ?>

                                <!-- Conteneur visuels -->
                                <div class="cadre-content-wrapper">
                                    <!-- Mobile -->
                                    <picture class="cadre-img-content cadre-content-mobile">
                                        <source srcset="img/maquette-site-accueil-mobile.webp" type="image/webp" width="100%" height="auto">
                                        <source srcset="img/maquette-site-accueil-mobile.png" type="image/jpeg" width="100%" height="auto">
                                        <img src="img/maquette-site-accueil-mobile.png" width="100%" height="auto" alt="image de la maquette de la page d'accueil du site en format mobile">
                                    </picture>

                                    <!-- Desktop -->
                                    <picture class="cadre-img-content cadre-content-desktop">
                                        <source srcset="img/maquette-site-accueil-desktop.webp" type="image/webp" width="100%" height="auto">
                                        <source srcset="img/maquette-site-accueil-desktop.png" type="image/jpeg" width="100%" height="auto">
                                        <img src="img/maquette-site-accueil-desktop.png" width="100%" height="auto" alt="image de la maquette de la page d'accueil du site en format écran large">
                                    </picture>

                                </div> 
                            </div>

                            <div class="fullcadre-bottom-zone">
                                <div class="switch-cadre">
                                    <div class="switch-cadre-ico"></div>
                                    <p class="switch-cadre-txt"></p>
                                </div>
                            </div>
                            

                            <span class="fullcadre-back-overlay"></span>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Bloc maquette "Mes projets" -->
            <div class="section-bloc">

                <div class="section-ligne">
                    <div class="section-colonne full-col">
                        <span class="sep-ligne"></span>
                    </div>
                </div>

                <div class="section-ligne">
                    <div class="section-colonne demi-col">
                        <p class="phrase-forte focus-color">Page “Mes projets” :</p>
                        <p class="phrase-forte">Une vitrine ergonomique et valorisante pour mes créations.</p>
                    </div>

                    <div class="section-colonne demi-col">

                        <div class="bloc-texte">
                            <p>Les projets les plus pertinents d’un portfolio sont généralement les derniers en date.</p>

                            <p>Je souhaite toutefois utiliser cette page en tant qu’archive numérique de mon parcours sur le long terme.</p>

                            <p>Pour réconcilier ces deux réalités, il sera possible de filtrer les projets sur plusieurs critères. Par défaut, la page affichera les dernières années uniquement.</p>

                        </div>

                    </div>
                </div>

                <div class="section-ligne">
                    <div id="Cadre_page_projets" class="section-colonne full-col">

                        <div class="cadre-trigger">
                            <div class="cadre-scrollable force-mobile">
                                <!-- Fausse barre de navigateur -->
                                <?php include('../../../assets/module/modules-projets/navibar-cadre-desk.php'); ?>

                                <!-- Conteneur visuels -->
                                <div class="cadre-content-wrapper">
                                    <!-- Mobile -->
                                    <picture class="cadre-img-content cadre-content-mobile">
                                        <source srcset="img/maquette-site-projets-mobile.webp" type="image/webp" width="100%" height="auto">
                                        <source srcset="img/maquette-site-projets-mobile.png" type="image/jpeg" width="100%" height="auto">
                                        <img src="img/maquette-site-projets-mobile.png" width="100%" height="auto" alt="image de la maquette de la page des projets du site en format mobile">
                                    </picture>

                                    <!-- Desktop -->
                                    <picture class="cadre-img-content cadre-content-desktop">
                                        <source srcset="img/maquette-site-projets-desktop.webp" type="image/webp" width="100%" height="auto">
                                        <source srcset="img/maquette-site-projets-desktop.png" type="image/jpeg" width="100%" height="auto">
                                        <img src="img/maquette-site-projets-desktop.png" width="100%" height="auto" alt="image de la maquette de la page des projets du site en format grand écran">
                                    </picture>

                                    <!-- Overlay trigger -->
                                    <div class="cadre-trigger-overlay">  
                                        <div class="trigger-instruction-tag">
                                            <div class="trigger-tag-ico"></div>
                                            <div class="trigger-tag-txt"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <figcaption class="legende-visuel">Maquette de la page "mes projets"</figcaption>
                        </div>

                        <div class="zone-fullscreen-cadre">

                            <button class="hide-cadre-btn"></button>
                            
                            <div class="fullcadre-top-zone">
                                <figcaption class="legende-visuel-fullcadre">Maquette de la page "mes projets"</figcaption>
                                <p class="fullcadre-instruction">
                                    <span class="fullcadre-instruction-ico"></span>
                                    Scrollez la page avec votre
                                    <span class="keyword-fullcadre-instru"></span></p>
                            </div>
                            

                            <div class="cadre-scrollable">
                                <!-- Fausse barre de navigateur -->
                                <?php include('../../../assets/module/modules-projets/navibar-cadre-desk.php'); ?>

                                <!-- Conteneur visuels -->
                                <div class="cadre-content-wrapper">
                                    <!-- Mobile -->
                                    <picture class="cadre-img-content cadre-content-mobile">
                                        <source srcset="img/maquette-site-projets-mobile.webp" type="image/webp" width="100%" height="auto">
                                        <source srcset="img/maquette-site-projets-mobile.png" type="image/jpeg" width="100%" height="auto">
                                        <img src="img/maquette-site-projets-mobile.png" width="100%" height="auto" alt="image de la maquette de la page des projets du site en format mobile">
                                    </picture>

                                    <!-- Desktop -->
                                    <picture class="cadre-img-content cadre-content-desktop">
                                        <source srcset="img/maquette-site-projets-desktop.webp" type="image/webp" width="100%" height="auto">
                                        <source srcset="img/maquette-site-projets-desktop.png" type="image/jpeg" width="100%" height="auto">
                                        <img src="img/maquette-site-projets-desktop.png" width="100%" height="auto" alt="image de la maquette de la page des projets du site en format grand écran">
                                    </picture>

                                </div> 
                            </div>

                            <div class="fullcadre-bottom-zone">
                                <div class="switch-cadre">
                                    <div class="switch-cadre-ico"></div>
                                    <p class="switch-cadre-txt"></p>
                                </div>
                            </div>
                            

                            <span class="fullcadre-back-overlay"></span>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Bloc maquette "Mon parcours" -->
            <div class="section-bloc">

                <div class="section-ligne">
                    <div class="section-colonne full-col">
                        <span class="sep-ligne"></span>
                    </div>
                </div>

                <div class="section-ligne">
                    <div class="section-colonne demi-col">
                        <p class="phrase-forte focus-color">Page “Mon parcours” :</p>
                        <p class="phrase-forte">Une vue d’ensemble de mon expérience scolaire et professionnelle.</p>
                    </div>

                    <div class="section-colonne demi-col">

                        <div class="bloc-texte">
                            <p>Cette page liste mes expériences par ordre chronologique, sous la forme de blocs dépliables permettant deux niveaux de lecture :</p>

                            <ul class="liste-puce-projet">
                                <li>Une lecture rapide sans ouvrir le module, qui résume les points clés de la période en question.</li>

                                <li>Une lecture plus détaillée en appuyant sur “en savoir plus”, grâce au texte complémentaire placé à l’intérieur du module.</li>
                            </ul>

                        </div>

                    </div>
                </div>

                <div class="section-ligne">
                    <div id="Cadre_page_parcours" class="section-colonne full-col">

                        <div class="cadre-trigger">
                            <div class="cadre-scrollable force-mobile">
                                <!-- Fausse barre de navigateur -->
                                <?php include('../../../assets/module/modules-projets/navibar-cadre-desk.php'); ?>

                                <!-- Conteneur visuels -->
                                <div class="cadre-content-wrapper">
                                    <!-- Mobile -->
                                    <picture class="cadre-img-content cadre-content-mobile">
                                        <source srcset="img/maquette-site-parcours-mobile.webp" type="image/webp" width="100%" height="auto">
                                        <source srcset="img/maquette-site-parcours-mobile.png" type="image/jpeg" width="100%" height="auto">
                                        <img src="img/maquette-site-parcours-mobile.png" width="100%" height="auto" alt="image de la maquette de la page mon parcours du site en format mobile">
                                    </picture>

                                    <!-- Desktop -->
                                    <picture class="cadre-img-content cadre-content-desktop">
                                        <source srcset="img/maquette-site-parcours-desktop.webp" type="image/webp" width="100%" height="auto">
                                        <source srcset="img/maquette-site-parcours-desktop.png" type="image/jpeg" width="100%" height="auto">
                                        <img src="img/maquette-site-parcours-desktop.png" width="100%" height="auto" alt="image de la maquette de la page mon parcours du site en format grand écran">
                                    </picture>

                                    <!-- Overlay trigger -->
                                    <div class="cadre-trigger-overlay">  
                                        <div class="trigger-instruction-tag">
                                            <div class="trigger-tag-ico"></div>
                                            <div class="trigger-tag-txt"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <figcaption class="legende-visuel">Maquette de la page "mon parcours"</figcaption>
                        </div>

                        <div class="zone-fullscreen-cadre">

                            <button class="hide-cadre-btn"></button>
                            
                            <div class="fullcadre-top-zone">
                                <figcaption class="legende-visuel-fullcadre">Maquette de la page "mon parcours"</figcaption>
                                <p class="fullcadre-instruction">
                                    <span class="fullcadre-instruction-ico"></span>
                                    Scrollez la page avec votre
                                    <span class="keyword-fullcadre-instru"></span></p>
                            </div>
                            

                            <div class="cadre-scrollable">
                                <!-- Fausse barre de navigateur -->
                                <?php include('../../../assets/module/modules-projets/navibar-cadre-desk.php'); ?>

                                <!-- Conteneur visuels -->
                                <div class="cadre-content-wrapper">
                                    <!-- Mobile -->
                                    <picture class="cadre-img-content cadre-content-mobile">
                                        <source srcset="img/maquette-site-parcours-mobile.webp" type="image/webp" width="100%" height="auto">
                                        <source srcset="img/maquette-site-parcours-mobile.png" type="image/jpeg" width="100%" height="auto">
                                        <img src="img/maquette-site-parcours-mobile.png" width="100%" height="auto" alt="image de la maquette de la page mon parcours du site en format mobile">
                                    </picture>

                                    <!-- Desktop -->
                                    <picture class="cadre-img-content cadre-content-desktop">
                                        <source srcset="img/maquette-site-parcours-desktop.webp" type="image/webp" width="100%" height="auto">
                                        <source srcset="img/maquette-site-parcours-desktop.png" type="image/jpeg" width="100%" height="auto">
                                        <img src="img/maquette-site-parcours-desktop.png" width="100%" height="auto" alt="image de la maquette de la page mon parcours du site en format grand écran">
                                    </picture>

                                </div> 
                            </div>

                            <div class="fullcadre-bottom-zone">
                                <div class="switch-cadre">
                                    <div class="switch-cadre-ico"></div>
                                    <p class="switch-cadre-txt"></p>
                                </div>
                            </div>
                            

                            <span class="fullcadre-back-overlay"></span>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Bloc conclusion maquette -->
            <div class="section-bloc">

                <div class="section-ligne">
                    <div class="section-colonne full-col">

                        <div class="bloc-conclusion-maquette">
                            <p class="conclusion-maquette-txt">Envie de voir le reste de la maquette ?</p>
                            <p class="conclusion-maquette-txt">Ses déclinaisons responsive et interactions ?</p>

                            <a class="conclusion-maquette-btn" href="https://www.figma.com/file/MteIU7aD4xXnPuOax6YnlT/Porfolio-perso-V1?node-id=0%3A1&t=MthQvsCoa1aIF2xx-1" target="_blank">Découvrez-la sur Figma</a>
                        </div>

                    </div>
                </div>

            </div>

        </section>

        <!-- ********** Section "Développement web" ********** -->
        <section id="Developpement_web" class="section-projet">

            <!-- Bloc titre et outils utilisés + texte -->
            <div class="section-bloc">

                <div class="section-ligne no-gap">
                    <div class="section-colonne demi-col">
                        <h2 class="titre-section">IV. Développement web</h2>
                    </div>

                    <div class="section-colonne demi-col">
                        <div class="outil-languette">
                            <p class="outil-txt">Outils<br>utilisés</p>
                            <div class="outil-blob-wrapper">
                                <div class="outil-blob outil-vscode"></div>
                                <div class="outil-blob outil-git"></div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="section-ligne">
                    <div class="section-colonne demi-col">
                        <p class="phrase-forte">Transformer le design en une expérience utilisateur interactive et agréable.</p>
                    </div>

                    <div class="section-colonne demi-col">

                        <div class="bloc-texte">
                            <p>Une fois la maquette du site finalisée, j’ai commencé à rédiger le code source de mon portfolio.</p>

                            <p>N’ayant pas eu recours à un CMS ou à un template, j’ai principalement codé de zéro sur Visual Studio Code.</p>
                        </div>

                    </div>
                </div>


            </div>

            <!-- Bloc texte + schema langages utilisés -->
            <div class="section-bloc">

                <div class="section-ligne">
                    <div class="section-colonne demi-col">
                        <div class="bloc-texte">
                            <p>J’ai rédigé du code SCSS plutôt que du simple CSS, pour garder mon code organisé et facile à entretenir. Cela m’a permis également d’optimiser le nombre de requêtes envoyées au serveur.</p>

                            <p>J’ai utilisé JavaScript, JQuery et PHP pour importer mon code de façon modulaire et réagir aux actions de l’utilisateur (notamment sur des éléments interactifs et pour le formulaire de contact).</p>

                            <p>Les besoins de la V1.0 du site étant simples, j’ai limité le nombre de langages et de bibliothèques utilisés. Inclure des frameworks lourds pour appeler 5% de leurs capacités m’a paru contre-productif.</p>
                        </div>
                    </div>

                    <div class="section-colonne demi-col">

                        <figure class="bloc-visuel schema-code-lang">

                            <video class="bloc-video" width="100%" height="auto" autoplay playsinline loop muted>
                                <source src="video/schema-code-lang.webm" type="video/webm">
                                <source src="video/schema-code-lang.mp4" type="video/mp4">
                                Votre navigateur ne peut pas lire cette vidéo.
                            </video>

                            <figcaption class="legende-visuel">Schématisation du rôle de chaque langage employé.</figcaption>

                        </figure>

                    </div>
                </div>


            </div>

            <!-- Bloc visualisation git + texte -->
            <div class="section-bloc">

                <div class="section-ligne">

                    <div class="section-colonne demi-col">

                        <p class="phrase-forte">Utiliser un outil de contrôle de versions est essentiel pour visualiser et gérer l’évolution d’un projet.</p>

                        <figure class="bloc-visuel">

                            <video class="bloc-video" width="100%" height="auto" autoplay playsinline loop muted>
                                <source src="video/video-chronologie-git.mp4" type="video/mp4">
                                <source src="video/video-chronologie-git.webm" type="video/webm">
                                Votre navigateur ne peut pas lire cette vidéo.
                            </video>

                        </figure>

                    </div>

                    <div class="section-colonne demi-col">
                        <div class="bloc-texte">
                            <p>Je souhaite pouvoir entretenir et améliorer mon site portfolio sur le long terme.</p>

                            <p>C'est pourquoi j'ai eu recours à Git pour garder en mémoire un historique détaillé de mes avancées sur ce projet et créer du code durable.</p>

                            <p>Cette démarche me permet aussi de rendre mon code public sur GitHub, pour valoriser davantage mes capacités de développeur front-end.</p>
                        </div>

                        <a class="github-btn-link" href="https://github.com/dhollard/site_portfolio" target="_blank">Voir le projet sur GitHub</a>
                    </div>

                </div>

            </div>

            <!-- Bloc showcase dev "intitulés métiers" -->
            <div class="section-bloc">

                <div class="section-ligne">
                    <div class="section-colonne full-col">
                        <h3 class="titre-secondaire-section">Sélection d’interactions UI/UX présentes sur le site</h3>
                        <span class="sep-ligne"></span>
                    </div>
                </div>

                <div class="section-ligne">
                    <div class="section-colonne demi-col no-gap">
                        <p class="phrase-forte">Représenter chaque facette de mes compétences.</p>

                        <figure class="bloc-visuel anim-dev-showcase">

                            <video class="bloc-video" width="100%" height="auto" autoplay playsinline loop muted>
                                <source src="video/anim-showcase-titres-accueil.webm" type="video/webm">
                                <source src="video/anim-showcase-titres-accueil.mp4" type="video/mp4">
                                Votre navigateur ne peut pas lire cette vidéo.
                            </video>

                        </figure>
                    </div>

                    <div class="section-colonne demi-col">

                        <div class="bloc-texte">
                            <p>Au chargement de la page d’accueil, l’utilisateur voit apparaître trois lignes de textes.</p>

                            <p>Elles mettent chacune en avant l’un de mes domaines d’expertise à l’aide d’une petite animation.</p>

                            <ul class="liste-puce-projet">
                                <li>Le web design est représenté par des balises de codes HTML et des couleurs de formatage typiquement utilisées dans un éditeur de code.</li>
                                <li>Le motion design est évoqué par la notion de mouvement perpétuel.</li>
                                <li>L’animation du design graphique puise dans les racines typographiques propres à ce métier.</li>
                            </ul>

                        </div>

                    </div>
                </div>

            </div>

            <!-- Bloc showcase dev "portrait" -->
            <div class="section-bloc">

                <div class="section-ligne">
                    <div class="section-colonne full-col">
                        <span class="sep-ligne"></span>
                    </div>
                </div>

                <div class="section-ligne">
                    <div class="section-colonne demi-col">
                        <p class="phrase-forte">Apporter un côté plus humain à l’identité graphique.</p>

                        <figure class="bloc-visuel anim-dev-showcase">

                            <video class="bloc-video" width="100%" height="auto" autoplay playsinline loop muted>
                                <source src="video/anim-showcase-portrait.webm" type="video/webm">
                                <source src="video/anim-showcase-portrait.mp4" type="video/mp4">
                                Votre navigateur ne peut pas lire cette vidéo.
                            </video>

                        </figure>
                    </div>

                    <div class="section-colonne demi-col">

                        <div class="bloc-texte">
                            <p>J’ai ajouté mon portrait à la page d’accueil du site pour le rendre plus convivial.</p>

                            <p>Le fait d’en apprendre plus sur l’auteur d’un portfolio rend l’expérience plus personnelle et mémorable selon moi.</p>

                            <p>L’animation appliquée sur cet élément le rend plus dynamique et pousse à visiter la page “mon parcours”.</p>

                            <p>Elle reproduit l'expression d’une parole dans une bulle de texte minimaliste.</p>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Bloc showcase dev "module parcours" -->
            <div class="section-bloc">

                <div class="section-ligne">
                    <div class="section-colonne full-col">
                        <span class="sep-ligne"></span>
                    </div>
                </div>

                <div class="section-ligne">
                    <div class="section-colonne demi-col">
                        <p class="phrase-forte">Savoir s’adapter aux différents utilisateurs du site.</p>

                        <figure class="bloc-visuel anim-dev-showcase">

                            <video class="bloc-video" width="100%" height="auto" autoplay playsinline loop muted>
                                <source src="video/anim-showcase-module-parcours.webm" type="video/webm">
                                <source src="video/anim-showcase-module-parcours.mp4" type="video/mp4">
                                Votre navigateur ne peut pas lire cette vidéo.
                            </video>

                        </figure>
                    </div>

                    <div class="section-colonne demi-col">

                        <div class="bloc-texte">
                            <p>Un recruteur ou un proche ne liront pas mon site de la même manière, notamment en ce qui concerne mon parcours.</p>

                            <p>Pour m’adapter aux besoins du lecteur, j’ai imaginé des modules dépliables, qui permettent d’aller à l’essentiel ou d’obtenir plus de détails.</p>

                            <p>La frise chronologique centrale s’adapte automatiquement aux changements de tailles des modules pour préserver l’harmonie de la page.</p>

                        </div>

                    </div>
                </div>

            </div>

            <!-- Bloc showcase dev "bouton CV" -->
            <div class="section-bloc">

                <div class="section-ligne">
                    <div class="section-colonne full-col">
                        <span class="sep-ligne"></span>
                    </div>
                </div>

                <div class="section-ligne">
                    <div class="section-colonne demi-col">
                        <p class="phrase-forte">Capter l’attention en direction de mon CV.</p>

                        <figure class="bloc-visuel anim-dev-showcase">

                            <video class="bloc-video" width="100%" height="auto" autoplay playsinline loop muted>
                                <source src="video/anim-showcase-bouton-cv.webm" type="video/webm">
                                <source src="video/anim-showcase-bouton-cv.mp4" type="video/mp4">
                                Votre navigateur ne peut pas lire cette vidéo.
                            </video>

                        </figure>
                    </div>

                    <div class="section-colonne demi-col">

                        <div class="bloc-texte">
                            <p>J’ai créé un style unique pour le bouton permettant de télécharger mon CV, afin qu’il se démarque du reste de la page.</p>

                            <p>Ce bouton existe en trois déclinaisons pour pouvoir proposer une expérience responsive adaptée et mobile friendly.</p>

                            <p>Puisque les animations de survol sont peu compatibles avec l’usage mobile, j’ai opté pour un design plus classique sur ce support.</p>

                            <p>Pour des supports plus grands, le bouton devient plus abstrait mais plus dépendant de l’animation d’interaction.</p>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Bloc showcase dev "miniature projet" -->
            <div class="section-bloc">

                <div class="section-ligne">
                    <div class="section-colonne full-col">
                        <span class="sep-ligne"></span>
                    </div>
                </div>

                <div class="section-ligne">
                    <div class="section-colonne demi-col">
                        <p class="phrase-forte">Mettre en valeur chaque projet pour donner l'envie d'explorer.</p>

                        <figure class="bloc-visuel anim-dev-showcase">

                            <video class="bloc-video" width="100%" height="auto" autoplay playsinline loop muted>
                                <source src="video/anim-showcase-miniature-projet.webm" type="video/webm">
                                <source src="video/anim-showcase-miniature-projet.mp4" type="video/mp4">
                                Votre navigateur ne peut pas lire cette vidéo.
                            </video>

                        </figure>
                    </div>

                    <div class="section-colonne demi-col">

                        <div class="bloc-texte">
                            <p>Pour mettre en page les aperçus de mes projets, j’ai opté pour un système de grille, facilement adaptable au nombre croissant d’éléments.</p>

                            <p>Le visuel représentant chaque projet évoque son identité graphique au travers d’une composition minimaliste.</p>

                            <p>L’animation de survol complète l’aperçu avec les informations clés du projet.</p>

                            <p>Sur mobile, j’ai dû compenser l’usage inadapté de l’interaction de survol. Les informations viennent alors se greffer sous la forme d’un cadre rappelant le format d’une photo polaroid.</p>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Bloc showcase dev "formulaire cookie" -->
            <div class="section-bloc">

                <div class="section-ligne">
                    <div class="section-colonne full-col">
                        <span class="sep-ligne"></span>
                    </div>
                </div>

                <div class="section-ligne">
                    <div class="section-colonne demi-col">
                        <p class="phrase-forte">Respecter les droits de l’utilisateur, tout en lui offrant une expérience agréable.</p>

                        <figure class="bloc-visuel anim-dev-showcase">

                            <video class="bloc-video" width="100%" height="auto" autoplay playsinline loop muted>
                                <source src="video/anim-showcase-modal-cookie.webm" type="video/webm">
                                <source src="video/anim-showcase-modal-cookie.mp4" type="video/mp4">
                                Votre navigateur ne peut pas lire cette vidéo.
                            </video>

                        </figure>
                    </div>

                    <div class="section-colonne demi-col">

                        <div class="bloc-texte">
                            <p>Le formulaire de préférences des cookies prend la forme d’un élément visuellement plaisant, qui ne perturbe pas la navigation.</p>

                            <p>Trop de pages web sont devenues pénibles à visiter, à cause des demandes de consentement envahissantes ou volontairement trompeuses.</p>

                            <p>Je compte maintenir à jour cet élément pour respecter les changements des normes RGPD, mais toujours en veillant au confort des utilisateurs.</p>
                        </div>

                    </div>
                </div>

            </div>

        </section>

        <!-- ********** Section "Résultats obtenus" ********** -->
        <section id="Resultat_obtenu" class="section-projet">

            <!-- Bloc titre et contenu -->
            <div class="section-bloc bloc-emoji-special-gap">

                <!-- Titre -->
                <div class="section-ligne">
                    <div class="section-colonne full-col">
                        <h2 class="titre-section">04 - Résultats obtenus</h2>
                    </div>
                </div>

                <!-- Resultat n°1 -->
                <div class="section-ligne">
                    <div class="section-colonne demi-col">
                        <div class="bloc-emoji-phrase">
                            <img class="emoji" src="svg/emoji-resultat-01.svg" alt="emoji d'un cartable">
                            <p class="phrase-illustrative">Avec la finalisation de mon site, j’ai gagné une vitrine <span class="focus-color">professionnelle et qualitative.</span></p>
                        </div>

                    </div>

                    <div class="section-colonne demi-col">
                        <div class="bloc-texte">
                            <p>Ce site sera un outil essentiel, aussi bien pour démarcher des entreprises que pour partager mes expériences avec des contacts.</p>

                            <p>J’ai longtemps souhaité pouvoir créer un site portfolio à la hauteur de mes attentes. Terminer ce projet a donc été un vrai accomplissement personnel.</p>
                        </div>
                    </div>
                </div>

                <!-- Resultat n°2 -->
                <div class="section-ligne">
                    <div class="section-colonne demi-col">
                        <div class="bloc-emoji-phrase">
                            <img class="emoji" src="svg/emoji-resultat-02.svg" alt="emoji d'une paire d'yeux">
                            <p class="phrase-illustrative">Mes projets sont <span class="focus-color">devenus plus accessibles.</span></p>
                        </div>

                    </div>

                    <div class="section-colonne demi-col">
                        <div class="bloc-texte">
                            <p>Pouvoir partager mes travaux simplement était l’objectif principal de mon site. En proposant des pages projets soignées, mon travail est mis en valeur et facile d’accès.</p>
                        </div>
                    </div>
                </div>

                <!-- Resultat n°3 -->
                <div class="section-ligne">
                    <div class="section-colonne demi-col">
                        <div class="bloc-emoji-phrase">
                            <img class="emoji" src="svg/emoji-resultat-03.svg" alt="emoji d'une fusée">
                            <p class="phrase-illustrative">Il reste encore <span class="focus-color">du chemin</span> à parcourir...</p>
                        </div>

                    </div>

                    <div class="section-colonne demi-col">
                        <div class="bloc-texte">
                            <p>Malgré cette première version finalisée, il me reste encore beaucoup à accomplir sur ce site portfolio :</p>

                            <ul class="liste-puce-projet">
                                <li>Recueillir des retours d’utilisateurs pour identifier des pistes d’amélioration.</li>
                                <li>Revenir sur mes idées non essentielles à la V1.0 laissées de côté.</li>
                                <li>Continuer à peupler la page “mes projets” avec toutes mes créations passées et tâcher de les ajouter au fur et à mesure à l’avenir.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <!-- ********** Section "Ce que j'ai appris" ********** -->
        <section id="Enseignements_appris" class="section-projet">

            <!-- Bloc titre et contenu -->
            <div class="section-bloc bloc-emoji-special-gap">

                <!-- Titre -->
                <div class="section-ligne">
                    <div class="section-colonne demi-col">
                        <h2 class="titre-section">I. Ce que j’ai appris</h2>
                    </div>
                </div>

                <!-- Enseignement n°1 -->
                <div class="section-ligne">
                    <div class="section-colonne demi-col">
                        <div class="bloc-emoji-phrase">
                            <img class="emoji" src="svg/emoji-enseignement-01.svg" alt="emoji d'un cerveau">
                            <p class="phrase-illustrative">J’ai aiguisé mon sens de l’organisation et de la <span class="focus-color">gestion de projet.</span></p>
                        </div>

                    </div>

                    <div class="section-colonne demi-col">
                        <div class="bloc-texte">
                            <p>Conscient que ce projet allait avancer de façon variable sur mon temps libre, j’ai décidé de m’organiser efficacement dès le départ.</p>

                            <p>J’ai donc compté les heures passées sur chaque étape. Je me suis fixé des deadlines en visualisant l’avancement du projet avec un diagramme de Gantt.</p>
                        </div>
                    </div>
                </div>

                <!-- Enseignement n°2 -->
                <div class="section-ligne">
                    <div class="section-colonne demi-col">
                        <div class="bloc-emoji-phrase">
                            <img class="emoji" src="svg/emoji-enseignement-02.svg" alt="emoji d'un trophée">
                            <p class="phrase-illustrative"><span class="focus-color">Profiter</span> de la liberté totale de créer, mais <span class="focus-color">sans perdre de vue</span> la ligne d'arrivée.</p>
                        </div>

                    </div>

                    <div class="section-colonne demi-col">
                        <div class="bloc-texte">
                            <p>Mon site portfolio est un outil professionnel précieux qui me faisait défaut. Le fait de le finaliser était donc assez urgent.</p>

                            <p>Étant à la fois le chef de projet et l’exécutant, j’ai veillé à ne négliger aucun détail, tout en visant une mise en ligne du site la plus rapide possible.</p>
                        </div>
                    </div>
                </div>

                <!-- Enseignement n°3 -->
                <div class="section-ligne">
                    <div class="section-colonne demi-col">
                        <div class="bloc-emoji-phrase">
                            <img class="emoji" src="svg/emoji-enseignement-03.svg" alt="emoji d'une personne avec des lunettes">
                            <p class="phrase-illustrative"><span class="focus-color">Ma polyvalence</span> fait déjà ma force, mais il y a toujours davantage à apprendre.</p>
                        </div>

                    </div>

                    <div class="section-colonne demi-col">
                        <div class="bloc-texte">
                            <p>Grâce à toute ma palette de compétences, j’ai pû gérer ce projet de A à Z. J’ai réalisé moi-même les textes, les visuels, le code et les supports de suivi du projet.</p>

                            <p>Cependant, j’ai aussi dû apprendre de nouvelles connaissances et surmonter des obstacles pour concrétiser ma vision du site.</p>

                            <p>J’ai dû remettre à plus tard des idées trop ambitieuses. Certaines compétences me faisaient défaut et les acquérir m’aurait coûté trop de temps.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bloc phrase de conclusion -->
            <div class="section-bloc">
                <div class="section-ligne">
                    <div class="section-colonne full-col">

                        <p class="phrase-conclusion-page">Au final, créer ce site fut pour moi un <span class="focus-color">défi exigeant</span> sur la durée, mais <span class="focus-color">grandement enrichissant.</span></p>

                    </div>
                </div>
            </div>

        </section>

    </main>

    <div id="Overlay_sommaire" class="">

    </div>

    <div id="Sommaire" class="mask-sommaire no-resize-transition">

        <div id="Sommaire_top_bar_mobile">
            <div class="top-mob-handle"></div>
            <p class="top-mob-txt"></p>
            <div class="top-mob-sep"></div>
        </div>

        <div id="Sommaire_top_bar_desktop">
            <div class="eyecatch-desk-box">
                <span class="eyecatch-desk-arrow"></span>
                <p class="eyecatch-desk-txt">Afficher le sommaire</p>
            </div>
            <button id="Sommaire_switch_desktop"></button>
            <div class="top-desk-wrapper">
                <div class="top-desk-titre-ico"></div>
                <p class="top-desk-titre">Sommaire</p>
            </div>

        </div>

        <div id="Sommaire_link_wrapper">
            <a class="som-link" href="#Resume_projet">01 - Résumé du projet</a>
            <a class="som-link" href="#Objectifs_projet">02 - Objectifs</a>
            <a class="som-link" href="#Processus_projet">03 - Processus de création</a>
            <a class="som-link som-sub-link" href="#Structure_site">I. Structure du site</a>
            <a class="som-link som-sub-link" href="#Identite_visuelle">II. Identité visuelle</a>
            <a class="som-link som-sub-link" href="#Maquette_site">III. Maquette du site</a>
            <a class="som-link som-sub-link" href="#Developpement_web">IV. Développement web</a>
            <a class="som-link" href="#Resultat_obtenu">04 - Résultats obtenus</a>
            <a class="som-link som-sub-link" href="#Enseignements_appris">I. Ce que j’ai appris</a>
        </div>

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