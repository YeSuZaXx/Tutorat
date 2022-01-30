<?php

$sub_dir = True;
require("./../sql-connection.php");

if (isset($_POST['send'])) {
    $insertion = $sth->prepare('DELETE FROM subject WHERE subject_name = "' . $_POST['subject_delete_name'] . '";');
    $verification = $insertion->execute();

    header('Location: ./../admin-access.php');

    if ($verification) {
        echo "insertion reussie";
    } else {

        echo "Echec d'insertion";
    }

}
?>
