<!doctype html>
<html lang="fr">

<head>
    <!-- Balises communes -->
    <?php include_once('../assets/module/head-module.php'); ?>

    <!-- Appels ressources page -->
    <link rel="stylesheet" href="/assets/css/style-misc.css">

    <!-- SEO et identité page -->
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <title>Échec de l'envoi</title>

</head>

<body>

    <!-- navbar -->
    <?php include_once('../assets/module/navbar.php'); ?>

    <main>

        <div id="center-zone">
            <div class="contenu-czone">
                <p class="titre">Une erreur s'est produite...</p>
                <p class="corps-txt">Votre message n'a pas pu être envoyé.</p>
                <p class="corps-txt">Merci de vérifier votre connexion internet et de me contacter directement à l'adresse suivante si le problème persiste :</p>
                <p class="mail-focus">contact@darius-hollard.com</p>
                <a class="linkback" href="/fr/contact.php">Retour au formulaire</a>
            </div>
        </div>


    </main>

    <!-- Footer -->
    <?php include_once('../assets/module/footer.php'); ?>

    <!-- Appels et scripts de fin de page -->
    <?php include_once('../assets/module/end-page-module.php'); ?>

</body>

</html>