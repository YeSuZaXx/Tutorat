<?php

try {
    $sth = new PDO("sqlite:../../bdd/Tutorat.db");
    $sth->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (SQLException $sqle) {
    die('SQL EXCEPTION : ' . $sqle->getMessage());
}

if (isset($_POST['send'])) {
    $insertion = $sth->prepare('INSERT INTO subject VALUES ("' . $_POST['subject_add_name'] . '");');
    $verification = $insertion->execute();

    header('Location: ./../admin-access.php');
    echo("<meta http-equiv='refresh' content='1'>");

    if ($verification) {
        echo "insertion reussie";
    } else {

        echo "Echec d'insertion";
    }

}
?>
