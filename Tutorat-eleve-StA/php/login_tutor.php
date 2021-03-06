<?php require("./password_protect_tutor.php"); ?>


<!DOCTYPE html>
<html lang="fr">
<title>Mentorat-élèves-StA</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../style/table.css"/>
<style>
    body, h1, h2, h3, h4, h5, h6 {
        font-family: "Lato", sans-serif
    }

    .w3-bar, h1, button {
        font-family: "Montserrat", sans-serif
    }

    .fa-anchor, .fa-coffee {
        font-size: 200px
    }
</style>
<body>

<?php require("./header.php"); ?>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
    <h1 class="w3-margin w3-jumbo">ESPACE MENTOR</h1>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-twothird">
            <h1>Eleves inscrits au mentorat de cette semaine:</h1><br>
            <?php require("./tutor_view.php"); ?>

            <form method="post" action="login_tutor.php">
                Trier par ordre alphabétique de matière :
                <input type="checkbox" name="alphasort"> <br>

                Afficher une seul matière :
                <select id="subjectselect" name="subjectselect">
                    <option value="*">Toutes les matières</option>
                    <?php
                    require("sql_connection.php");

                    $insertion = $sth->query("SELECT * FROM subject;");
                    $subjects_status = $insertion->fetchAll();

                    foreach ($subjects_status as $subject_status) {
                        echo "<option value=" . $subject_status['subject_name'] . "> " . $subject_status['subject_name'] . "</option>";
                    }
                    ?>
                </select>
                </select> <br>

                <input type="submit" name="send" value="Actualiser les tries" class="Form_champ"/>
            </form>

        <div style="overflow-x: auto;">
            <table border='1'>
                <tr>
                    <th>Id de la requete</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>classe</th>
                    <th>contact</th>
                    <th>matiere</th>
                    <th>detail</th>
                    <th>date</th>
                    <th>statut</th>
                </tr>
                <tr>
                    <?php
                    foreach ($rows as $row) {
                        echo "<tr><td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['lastname'] . "</td>";
                        echo "<td>" . $row['firstname'] . "</td>";
                        echo "<td>" . $row['class'] . "</td>";
                        echo "<td>" . $row['contact'] . "</td>";
                        echo "<td>" . $row['subject'] . "</td>";
                        echo "<td>" . $row['comment'] . "</td>";
                        echo "<td>" . $row['dateform'] . "</td>";
                        echo "<td>" . $row['status_name'] . "</td><tr>";
                    }

                    ?>
                </tr>
            </table>
        </div>
            <br>

            <h1>Modifier le statut d'une demande de mentorat :</h1><br>
            <form name="status_edit" method="post" action="tutor_status_update.php">
                <fieldset class="Form_fieldset">
                    <div class="Form_label"> Id de la requete à modifier </div>
                    <div class="Form_input">
                        <input type="text" name="id" class="Form_champ"/>
                    </div>
                    <br>

                    Statut à appliquer <br>
                    <select id="myselect" name="myselect">
                        <?php
                        require("sql_connection.php");

                        $insertion_status = $sth->query("SELECT * FROM status;");
                        $rows_status = $insertion_status->fetchAll();

                        foreach ($rows_status as $row_status) {
                            echo "<option value=" . $row_status['status_id'] . "> " . $row_status['status_name'] . "</option>";
                        }
                        ?>
                    </select>
                    <br><br>
                    <div class="Form_input">
                        <input type="submit" name="send" value="Send" class="Form_champ"/>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    
    <p class="w3-light-grey">Merci de modifier le statut de la demande pour faciliter la compréhensibilité du tableau pour les autres tuteurs et éviter toute confusion de demandes déjà <strong>réalisées</strong> ou <strong>réservées</strong>.</p>

</div>

    

<?php require("./footer.php"); ?>

</body>
</html>


	  	
