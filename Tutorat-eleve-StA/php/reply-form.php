<?php
require('tutoring_registration.php');


 $username="root";
  $password="";

  

  function valid_donnees($donnees){
       $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        $donnees = htmlentities($donnees);
        $donnees = strip_tags($donnees);
        return $donnees;
      }


  $nom =valid_donnees($_POST['nom']);
  $prenom =valid_donnees($_POST['prenom']);
  $classe =valid_donnees($_POST['classe']);
  $contact =valid_donnees($_POST['contact']);
  $myselect =valid_donnees($_POST['myselect']);
  $comment =valid_donnees($_POST['comment']);



 
  try {
        $conn = new PDO("mysql:host=localhost;dbname=tutorat;port=3308", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (SQLException $sqle) {
        die('SQL EXCEPTION : '.$sqle->getMessage());
    }
     
     
     if (isset($_POST['send'])) {
          $insertion=$conn->prepare('INSERT INTO tutorattable(nom, prenom, classe, contact, myselect, comment, dateactuelle) VALUES("'.$_POST['nom'].'","'.$_POST['prenom'].'","'.$_POST['classe'].'","'.$_POST['contact'].'","'.$_POST['myselect'].'","'.$_POST['comment'].'", DATE(NOW()))');


               $verification=$insertion->execute();
               if ($verification) {
                    echo "insertion reussie";
               }else{

                    echo "Echec d'insertion";
               }

        }else{
          echo "Une variable n'est pas declaree et ou est null";
        }






?>



