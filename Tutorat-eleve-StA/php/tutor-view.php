<?php

require("./login-tutor.php");

$username="root";
  $password="";

   try {
        $conn = new PDO("mysql:host=localhost;dbname=tutorat;port=3308", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (SQLException $sqle) {
        die('SQL EXCEPTION : '.$sqle->getMessage());
    }

$reponse =$bdd->query('SELECT * FROM tutorattabble');

while($donnees = $reponse->fetch())
{

	echo $donnees['prenom'];
}
$reponse->closeCursor();






  ?>