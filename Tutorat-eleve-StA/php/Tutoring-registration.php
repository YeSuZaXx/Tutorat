<!DOCTYPE html>
<html lang="fr">
<title>Tutorat-élèves-StA</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/style/form.css"/>
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

<?php
require("./header.php");

?>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
    <h1 class="w3-margin w3-jumbo">TUTORING REGISTRATION</h1>
    <p class="w3-xlarge"></p>

</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-twothird">
            <h1>Form :</h1>
            <body id="Form_body">
            <div id="Form_conteneur">
                <form name="inscription" method="post" action="reply-form.php">
                    <fieldset class="Form_fieldset">
                        <legend class="Form_legend">Inscription</legend>
                        <div class="Form_label">
                            Nom
                        </div>
                        <div class="Form_input">
                            <input type="text" name="lastname" class="Form_champ"/>
                        </div>
                        <br/>
                        <div class="Form_label">
                            Prénom
                        </div>
                        <div class="Form_input">
                            <input type="text" name="firstname" class="Form_champ"/>
                        </div>
                        <br/>
                        <div class="Form_label">
                            Classe
                        </div>
                        <div class="Form_input">
                            <input type="text" name="class" class="Form_champ"/>
                        </div>
                        <br/>

                        <div class="Form_label">
                            Moyen de contact(snap, insta,mail, tel)
                        </div>
                        <div class="Form_input">
                            <input type="text" name="contact" class="Form_champ"/>

                        </div>
                        <br/><br/>

                        Matière souhaitée <select id="myselect" name="myselect">
                            <option value="anglais"> Anglais</option>
                            <option value="mathematiques"> Mathematiques</option>
                            <option value="svt"> SVT</option>
                            <option value="hggsp">HGGSP</option>
                            <option value="physique-chimie"> Physique-chimie</option>
                            <option value="histoire">Histoire</option>
                        </select><br></br>

                        <div class="Form_label">
                            Detail aide
                        </div>
                        <div class="Form_input">
                            <input type="text" name="comment" class="Form_champ" style="width: 250px; height: 150px;"/>

                        </div>
                        <br/>

                        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                        <div class="g-recaptcha" data-sitekey="la_clé_du_site"></div>
                        <button class="g-recaptcha" data-sitekey="la_clé_du_site" data-callback='onReCaptchaValid'>
                            Envoyer
                        </button>
                        <script type="text/javascript">
                            function onReCaptchaValid(token) {
                                document.getElementById('id_du_formulaire').submit();
                            }
                        </script>

                        <div class="Form_input">
                            <input type="submit" name="send" value="Send" class="Form_champ"/>
                        </div>
                        <br/>


                    </fieldset>
                </form>
            </div>

            </form>

            <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <div class="w3-third w3-center">

        </div>
    </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-third w3-center">

        </div>

        <div class="w3-twothird">
            <h1>Lorem Ipsum</h1>
            <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</h5>

            <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>

<!-- Footer -->

<?php

require("./footer.php");
?>

</body>
</html>