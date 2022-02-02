<?php

$sub_dir = True;
require("./../sql_connection.php");

if (isset($_POST['send'])) {
    $insertion = $sth->prepare('INSERT INTO subject VALUES ("' . $_POST['subject_add_name'] . '");');
    $verification = $insertion->execute();

    header('Location: ./../admin_access.php');
    echo("<meta http-equiv='refresh' content='1'>");

    if ($verification) {
        echo "insertion reussie";
    } else {

        echo "Echec d'insertion";
    }

}
