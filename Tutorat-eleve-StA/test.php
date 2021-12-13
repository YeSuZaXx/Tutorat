<! DOCTYPE html>
<Html lang = "fr">
<Head>
  <Meta charset = "utf-8">
  <Titre> jQuery UI date de sélecteur (Datepicker) - Affichage mois & amp; Menu Année </ title>
  <Link rel = "stylesheet" href = "// code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <Script src = "// code.jquery.com/jquery-1.9.1.js"> </ script>
  <Script src = "// code.jquery.com/ui/1.10.4/jquery-ui.js"> </ script>
  <Link rel = "stylesheet" href = "http://jqueryui.com/resources/demos/style.css">
  <Script>
  $ (Function () {
    $ ( "#datepicker") .datepicker ({
      changeMonth: true,
      changeYear: true
    });
  });
  </ Script>
</ Head>
<Body>
 
<P> Date: <input type = "text" id = "datepicker"> </ p>
 
 
</ Body>
</ Html>