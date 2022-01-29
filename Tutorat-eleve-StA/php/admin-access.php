<?php
session_start();
if (isset($_SESSION['count']) && ($_SESSION['count'] > 4)) {
    header('Location: index.php');
} else {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Espace admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/style/table.css"/>
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
</head>
<body>
<?php
require("./header.php");

?>

<?php
$password = 'admin';
if ((isset($_POST['password']) && ($_POST['password'])) != $password) {
    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    } else {
        $_SESSION['count']++;
    }
    ?>
    <br><br>
    <h1 style="text-align: center;">Connexion</h1>
    <form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p><label for="password">Mot de passe</label> <input type="password" title="Saisissez le mot de passe admin"
                                                             name="password"/></p>
        <p><input type="submit" name="submit" value="Connexion"/></p>
    </form>
    <?php
} else { ?>
    <br><br>
    <h1>Liste des tuteurs</h1>
    <table border='1'>
        <tr>
            <th>Id du tuteur</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>classe</th>
            <th>Matières</th>
            <th>Type d'aide</th>
        </tr>
        <tr>
            <?php
            try {
                $sth = new PDO("sqlite:../bdd/Tutorat.db");
                $sth->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (SQLException $sqle) {
                die('SQL EXCEPTION : ' . $sqle->getMessage());
            }

            $tri = $sth->query("SELECT * FROM tutors;");
            $rows = $tri->fetchAll();

            foreach ($rows as $row) {
                echo "<tr><td>" . $row['tutor_id'] . "</td>";
                echo "<td>" . $row['tutor_lastname'] . "</td>";
                echo "<td>" . $row['tutor_firstname'] . "</td>";
                echo "<td>" . $row['tutor_class'] . "</td>";
                if (isset($row['tutor_subjects'])) {
                    echo "<td>" . $row['tutor_subjects'] . "</td>";
                } else {
                    echo "<td> </td>";
                }
                if (isset($row['tutor_aidtype'])) {
                    echo "<td>" . $row['tutor_aidtype'] . "</td></tr>";
                } else {
                    echo "<td> </td></tr>";
                }
            }

            ?>
        </tr>
    </table>

    <br><br>
    <h1>Supprimer un tuteur</h1>
    <form name="tutor_delete" method="post" action="./adminPageActions/tutor_delete.php">
        <fieldset class="Form_fieldset">
            <div class="Form_label">
                Id du tuteur à supprimer
            </div>
            <div class="Form_input">
                <input type="text" name="tutor_delete_id" class="Form_champ"/>
            </div>
            <br>
            <div class="Form_input">
                <input type="submit" name="send" value="Send" class="Form_champ"/>
            </div>
        </fieldset>
    </form>

    <br><br>
    <h1>Ajouter un tuteur</h1>
    <form name="tutor_add" method="post" action="./adminPageActions/tutor_add.php">
        <fieldset class="Form_fieldset">
            <div class="Form_label">
                Prenom du tuteur
            </div>
            <div class="Form_input">
                <input type="text" name="tutor_add_firstname" class="Form_champ"/>
            </div>
            <div class="Form_label">
                Nom du tuteur
            </div>
            <div class="Form_input">
                <input type="text" name="tutor_add_lastname" class="Form_champ"/>
            </div>
            <div class="Form_label">
                Classe du tuteur
            </div>
            <div class="Form_input">
                <input type="text" name="tutor_add_class" class="Form_champ"/>
            </div>
            <div class="Form_label">
                Matières
            </div>
            <div class="Form_input">
                <input type="text" name="tutor_add_subjects" class="Form_champ"/>
            </div>
            <div class="Form_label">
                Type d'aide
            </div>
            <div class="Form_input">
                <input type="text" name="tutor_add_aidtype" class="Form_champ"/>
            </div>
            <br>
            <div class="Form_input">
                <input type="submit" name="send" value="Send" class="Form_champ"/>
            </div>
        </fieldset>
    </form>

    <br><br>
    <h1>Liste des Matières</h1>
    <table border='1'>
        <tr>
            <th>Nom de la matière</th>
        </tr>
        <tr>
            <?php
            try {
                $sth = new PDO("sqlite:../bdd/Tutorat.db");
                $sth->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (SQLException $sqle) {
                die('SQL EXCEPTION : ' . $sqle->getMessage());
            }

            $tri = $sth->query("SELECT * FROM subject;");
            $rows = $tri->fetchAll();

            foreach ($rows as $row) {
                echo "<tr><td>" . $row['subject_name'] . "</td></tr>";
            }

            ?>
        </tr>
    </table>

    <br><br>
    <h1>Supprimer une matière</h1>
    <form name="subject_delete" method="post" action="./adminPageActions/subject_delete.php">
        <fieldset class="Form_fieldset">
            <div class="Form_label">
                Nom exact de la matière à supprimer (Comme dans le tableau)
            </div>
            <div class="Form_input">
                <input type="text" name="subject_delete_name" class="Form_champ"/>
            </div>
            <br>
            <div class="Form_input">
                <input type="submit" name="send" value="Send" class="Form_champ"/>
            </div>
        </fieldset>
    </form>

    <br><br>
    <h1>Ajouter une matière</h1>
    <form name="tutor_add" method="post" action="./adminPageActions/subject_add.php">
        <fieldset class="Form_fieldset">
            <div class="Form_label">
                Nom de la matière
            </div>
            <div class="Form_input">
                <input type="text" name="subject_add_name" class="Form_champ"/>
            </div>
            <br>
            <div class="Form_input">
                <input type="submit" name="send" value="Send" class="Form_champ"/>
            </div>
        </fieldset>
    </form>

    <?php
}
}
?>

<?php

require("./footer.php");
?>
</body>
</html>