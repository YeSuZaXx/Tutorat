<?php

$sub_dir = True;
require("./../sql-connection.php");

if (isset($_POST['send'])) {
    $insertion = $sth->prepare('DELETE FROM tutors WHERE tutor_id = ' . $_POST['tutor_delete_id'] . ';');
    $verification = $insertion->execute();

    header('Location: ./../admin-access.php');

    if ($verification) {
        echo "insertion reussie";
    } else {

        echo "Echec d'insertion";
    }

}
?>
