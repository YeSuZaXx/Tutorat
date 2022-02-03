<?php

$sub_dir = True;
require("./../sql_connection.php");

if (isset($_POST['send'])) {
    $insertion = $sth->prepare('INSERT INTO tutors(tutor_firstname, tutor_lastname, tutor_class, tutor_subjects, tutor_aidtype) VALUES ("' . $_POST['tutor_add_firstname'] . '","' . $_POST['tutor_add_lastname'] . '","' . $_POST['tutor_add_class'] . '","' . $_POST['tutor_add_subjects'] . '","' . $_POST['tutor_add_aidtype'] . '");');
    $verification = $insertion->execute();

    header('Location: ./../admin_access.php');
    echo("<meta http-equiv='refresh' content='1'>");

    if ($verification) {
        echo "insertion reussie";
    } else {

        echo "Echec d'insertion";
    }

}
