<?php

try {
    $sth = new PDO("sqlite:../../bdd/Tutorat.db");
    $sth->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (SQLException $sqle) {
    die('SQL EXCEPTION : ' . $sqle->getMessage());
}

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
