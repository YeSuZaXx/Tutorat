<footer class="w3-container w3-padding-64 w3-center w3-opacity">
    <div class="w3-xlarge w3-padding-32">
        <p>Contact du développeur du site :</p>
        <a href="https://www.Facebook.com/alban.fb"><i class="fa-brands fa-facebook-square fa-2x w3-hover-opacity"></i></a>
        <a href="https://www.instagram.com/alban.fb/"><i class="fa fa-instagram fa-2x w3-hover-opacity "></i></a>
        <a href="https://www.snapchat.com/add/afabre77?share_id=dGn5g7oyPoc&locate=fr-FR"><i class="fa fa-snapchat w3-hover-opacity fa-2x"></i></a>
        <p>Plateformes fréquemment utilisées par les élèves :</p>
        <a href="https://ecoledirecte.com/login"><img src="./../img/ecole-directe.png" style="height: 120px; width: 90px; margin-right: 60px;"></a>
        <a href="https://www.office.com/"><img src="./../img/OFFICE365.jpg" style="height: 100px; width: 80px; margin-right: 60px;"></a>
        <a href="https://moodle-esn.net/login/index.php"><img src="./../img/Moodle.png" style="height: 80px; width: 70px; margin-right: 60px; "></a>

        
    </div>

    <div id="cookie_notice"><span>Ce site utilise des cookies. En poursuivant votre navigation sur ce site, vous en acceptez l'utilisation.  <a
                    href="cookie_policy.php"
                    title="En savoir plus sur notre charte relative aux données personnelles">Cliquez ici pour en savoir plus</a><span
                class="closer" title="Fermer - Close"><button onclick="setExp();">X</button></span></div>

    <style>div#cookie_notice {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bold;
            position: fixed;
            top: 59rem;
            width: 100%;
            margin: 1em auto;
            background-color: #b4b4b4;
            padding: 8px 10px 7px 10px;
            color: #fff;
            border-radius: 8px;
        }

        div#cookie_notice a {
            color: #000;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bold;
        }

        div#cookie_notice a:hover {
            color: #007cc0;
        }

        div#cookie_notice .closer {
            position: absolute;
            top: 5px;
            right: 10px;
        }

        /* position Droite */
        div#cookie_notice button {
            cursor: pointer;
        }</style>


    

        <script type="text/javascript">
            function setCookie(nom, valeur, expire, chemin, domaine, securite
            ){
                document.cookie = nom + ' = ' + escape(valeur) + '  ' +
                    ((expire == undefined) ? '' : ('; expires = ' +
                        expire.toGMTString())) +
                    ((chemin == undefined) ? '' : ('; path = ' + chemin)) +
                    ((domaine == undefined) ? '' : ('; domain = ' + domaine)) +
                    ((securite == true) ? '; secure' : '');
            }

            var dtExpire = new Date();
            
            
            dtExpire.setTime(dtExpire.getTime() + 3600 * 48000
            )
            ;

            function getCookie(name){
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

            // On vérifie la présence du Cookie et l
            
            var elmt = document.getElementById("cookie_notice");
            if ( getCookie("accept_cookie") == "1" ) {
                elmt.style.display = "none";
            }else{
                elmt.style.display = "";
            }
            // Si le cookie n
            
            function setExp(){
// on modifie son style
                elmt.style.display = "none";
                setCookie('accept_cookie', '1', dtExpire, '/');}
            // ]]></script>


    <a href="cookie_policy.php">Politique de confidentialité</a>
    <p>© 2021-2022 Alban Fabre - Nathan Lunel </p>


    <script>

        function myFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>
    </body>
    </html>
