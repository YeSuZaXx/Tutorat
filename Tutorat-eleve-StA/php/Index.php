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

<?php
require("./header.php");

?>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
    <h1 class="w3-margin w3-jumbo">Tutorat StA</h1>
    <p class="w3-xlarge"></p>

    <a href="./login-tutor.php"> Espace tuteur</a>


</header>


<div id="cookie_notice"><span>Ce site utilise des cookies. En poursuivant votre navigation sur ce site, vous en acceptez l'utilisation.  <a href="/chemin/vers/la/page/informations" title="En savoir plus sur notre charte relative aux données personnelles">Cliquez ici pour en savoir plus</a><span class="closer" title="Fermer - Close"><button onclick="setExp();">X</button></span></div>

<style>div#cookie_notice {font-family:Georgia, 'Times New Roman', Times, serif;font-weight:bold;position:relative;width:100%;margin:1em
auto; background-color:#b4b4b4;padding:8px 10px 7px 10px;color:#fff;border-radius: 5px;}
div#cookie_notice  a {color:#000;font-family:Georgia, 'Times New Roman', Times, serif;font-weight:bold;}
div#cookie_notice  a:hover {color:#007cc0;}
div#cookie_notice .closer {position:absolute;  top:5px;right:10px;} /* position Droite */
div#cookie_notice button {cursor: pointer;}</style>


<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
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

require("footer.php");

?>



<script type="text/javascript">// <![CDATA[
function setCookie(nom, valeur, expire, chemin, domaine, securite){
document.cookie = nom + ' = ' + escape(valeur) + '  ' +
((expire == undefined) ? '' : ('; expires = ' +
expire.toGMTString())) +
((chemin == undefined) ? '' : ('; path = ' + chemin)) +
((domaine == undefined) ? '' : ('; domain = ' + domaine)) +
((securite == true) ? '; secure' : '');
}

var dtExpire = new Date();
// Le nombre d'heures pendant lesquelles le consentement est valable (ici 48 heures).
dtExpire.setTime(dtExpire.getTime() + 3600 * 48000);

function  getCookie(name){
if(document.cookie.length == 0)
return null;
var regSepCookie = new RegExp('(; )', 'g');
var cookies = document.cookie.split(regSepCookie);
for(var i = 0; i < cookies.length; i++){
var regInfo = new RegExp('=', 'g');
var infos = cookies[i].split(regInfo);
if(infos[0] == name){
return unescape(infos[1]);
}
}
return null;
}

// On vérifie la présence du Cookie et l'on affiche ou l'on affiche pas la bannière.
var elmt = document.getElementById("cookie_notice");
if ( getCookie("MonSiteFree_AcceptationCookies") == "1" ) {
elmt.style.display = "none";
}else{
elmt.style.display = "";
}
// Si le cookie n'est pas présent, on le génère pour le navigateur.
function setExp(){
// on modifie son style
elmt.style.display = "none";
setCookie('MonSiteFree_AcceptationCookies', '1', dtExpire, '/');     }
// ]]></script>
</body>
</html>

