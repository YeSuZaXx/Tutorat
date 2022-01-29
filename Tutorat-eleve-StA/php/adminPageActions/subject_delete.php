<?php

try {
    $sth = new PDO("sqlite:../../bdd/Tutorat.db");
    $sth->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (SQLException $sqle) {
    die('SQL EXCEPTION : ' . $sqle->getMessage());
}

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
