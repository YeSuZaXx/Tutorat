<?php
require('./login_tutor.php');

require("sql_connection.php");

if (isset($_POST['send'])) {
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
