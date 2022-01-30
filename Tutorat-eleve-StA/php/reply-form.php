<?php
require('./tutoring-registration.php');


$username = "root";
$password = "";


function valid_donnees($donnees)
{
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    $donnees = htmlentities($donnees);
    return strip_tags($donnees);
}


$nom = valid_donnees($_POST['lastname']);
$prenom = valid_donnees($_POST['firstname']);
$classe = valid_donnees($_POST['class']);
$contact = valid_donnees($_POST['contact']);
$myselect = valid_donnees($_POST['myselect']);
$comment = valid_donnees($_POST['comment']);


require("sql-connection.php");

if (isset($_POST['send'])) {
    $date = "date('now')";
    $insertion = $sth->prepare('INSERT INTO requests(lastname, firstname, class, contact, subject, comment, dateform, status_id) VALUES("' . $_POST['lastname'] . '","' . $_POST['firstname'] . '","' . $_POST['class'] . '","' . $_POST['contact'] . '","' . $_POST['myselect'] . '","' . $_POST['comment'] . '", '.$date.', 1)');

    $verification = $insertion->execute();
    if ($verification) {
        echo "insertion reussie";
    } else {

        echo "Echec d'insertion";
    }

} else {
    echo "Une variable n'est pas declaree et ou est null";
}


?>



