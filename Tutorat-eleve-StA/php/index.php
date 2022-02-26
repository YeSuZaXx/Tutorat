<!DOCTYPE html>
<html lang="en">
<title>Tutorat-élèves-StA</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/Form.css"/>
<style>
    body, h1, h2, h3, h4, h5, h6 {
        font-family: "Lato", sans-serif
    }

    .w3-bar, h1, button {
        font-family: "Montserrat", sans-serif
    }

    .fa-anchor, .fa-coffee {
        font-size: 200px
    }


</style>
<body>

<?php require("./header.php"); ?>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
    <h1 class="w3-margin w3-jumbo">Accueil</h1>
</header>


<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-twothird">
            <h1>Tutorat Saint André</h1><br>
            <h5 class="w3-padding-32" style="font-size: medium;">Vous vous trouvez sur le site officiel du Tutorat au Lycée Saint-André.<br><br>

Si vous souhaitez en savoir plus sur le projet, consultez l’onglet « <a class="w3-hover-opacity" href="project_explanation.php">Informations »</a>.<br><br>

Pour faire appel à un tuteur, rejoignez l’onglet «<a class="w3-hover-opacity" href="tutoring_registration.php"> Demande d’aide »</a>.<br><br>

Si vous êtes tuteur, vous pouvez consultez les requêtes en vous connectant sur la page « <a class="w3-hover-opacity" href="login_tutor.php">Espace Tuteur</a> ».<br><br>

En cas de problème, vous pouvez contacter le développeur ou le fondateur du projet dans la page « <a class="w3-hover-opacity" href="contact.php">Contact</a> ».<br><br>

Nous vous remercions pour votre soutien envers le projet.</h5>

        </div>
    </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container"></div>

<?php require("footer.php"); ?>

</body>
</html>

