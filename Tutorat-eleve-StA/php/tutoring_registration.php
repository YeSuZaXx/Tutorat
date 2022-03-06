<!DOCTYPE html>
<html lang="fr">
<title>Tutorat-élèves-StA</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../style/Form.css">
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

<header class="w3-container w3-red w3-center" style="padding:128px 16px">
    <h1 class="w3-margin w3-jumbo">Demande d'aide</h1>
</header>

<!-- Form Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-twothird">
            <h1>Formulaire de demande d'aide :</h1>
            <div id="Form_conteneur">
                <form name="inscription" method="post" action="reply_form.php">
                    <fieldset class="Form_fieldset">
                        <legend class="Form_legend">Inscription</legend>
                        <div class="Form_label">
                            Nom :
                        </div>
                        <div class="Form_input">
                            <input type="text" name="lastname" class="Form_champ" placeholder="Dupont" />
                        </div>
                        <br>
                        <div class="Form_label">
                            Prénom :
                        </div>
                        <div class="Form_input">
                            <input type="text" name="firstname" class="Form_champ" placeholder="Didier" />
                        </div>
                        <br>
                        <div class="Form_label">
                            Classe :
                        </div>
                        <div class="Form_input">
                            <input type="text" name="class" class="Form_champ" placeholder="T°A" />
                        </div>
                        <br>

                        <div class="Form_label">
                            Moyen de contact :
                        <i style="font-size: x-small;">Teams sera utilisé comme moyen de contact par défault</i>
                        </div>
                        <div class="Form_input">
                            <input type="text" name="contact" class="Form_champ" placeholder="snap,insta,mail,tel"/>
                        </div>
                        <br><br>
                        <div class="Form_label">
                            Matière souhaitée : 
                        </div>
                        <div class="Form_input">
                        <select id="myselect" name="myselect" style="padding: 15px; margin: auto;">
                            <option value="*">Matières</option>
                        
                            <?php
                            require("sql_connection.php");

                            $insertion = $sth->query("SELECT * FROM subject;");
                            $subjects_status = $insertion->fetchAll();

                            foreach ($subjects_status as $subject_status) {
                                echo "<option value=" . $subject_status['subject_name'] . "> " . $subject_status['subject_name'] . "</option>";
                            }
                            ?>
                        </select>
                        </div>
                        <div class="Form_label">
                            Detail aide :
                        </div>
                        <div class="Form_input">
                            <input type="text" name="comment"  class="Form_champ" size="30" placeholder="chapitre 5 thermodynamique" />

                        </div>
                        <br>

                        <!--

                        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                        <button class="g-recaptcha" data-sitekey="la_clé_du_site" data-callback='onReCaptchaValid'>
                            Envoyer
                        </button>
                        <script type="text/javascript">
                            function onReCaptchaValid(token) {
                                document.getElementById('id_du_formulaire').submit();
                            }
                        </script>

                        --> 

                        <div class="Form_input">
                            <input type="submit" name="send" value="envoyer" class="Form_champ"/>
                        </div>
                        <br>
                    </fieldset>
                </form>
            </div>

            <p class="w3-text-grey">Nous comptons sur vous pour ne pas envoyer de demandes factices, un captchat est en cours de déploiement pour palier à cela.<br><br>Dés que votre demande d'aide aura été envoyée les tuteurs pourront y avoir accès et prendront par la suite contact avec vous pour établir des horaires possibles et des spécificités de la demande.</p>
        </div>
    </div>
</div>

<!-- Tuto Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-twothird">
            <h2>Un problème avec le formulaire ?</h2>
            <h5 class="w3-padding-32">Si vous n'arrivez pas a envoyer le formulaire ou quelque problème que ce soit avec celui-ci vous pouvez nous contacter... Vous pouvez retrouver nos contacts dans l'onglet prévu a cette usage "<a class="w3-hover-opacity" href="contact.php">Contact</a>" ou encore en bas de page en cliquant sur les icones correspondant aux éseaux sociaux du développeur du site.</h5>

        </div>
    </div>
</div>

<?php require("./footer.php"); ?>

</body>
</html>