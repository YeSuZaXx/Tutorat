<?php
require('./login-tutor.php');

require("sql-connection.php");

if (isset($_POST['send'])) {
    $date = "date('now')";
    $insertion = $sth->prepare('UPDATE requests SET status_id = ' . $_POST['myselect'] . ' WHERE id = ' . $_POST['id'] . ';');

    $verification = $insertion->execute();

    echo("<meta http-equiv='refresh' content='1'>");

    if ($verification) {
        echo "insertion reussie";
    } else {

        echo "Echec d'insertion";
    }

} else {
    echo "Une variable n'est pas declaree et ou est null";
}

?>
