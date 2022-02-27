<?php

define('LOGOUT_URL', './index.php');


define('TIMEOUT_MINUTES', 10);


define('TIMEOUT_CHECK_ACTIVITY', true);


$timeout = (TIMEOUT_MINUTES == 0 ? 0 : time() + TIMEOUT_MINUTES * 60);

// logout?
if (isset($_GET['logout'])) {
    setcookie("verify", '', $timeout, '/');
    header('Location: ' . LOGOUT_URL);
    exit();
}

if (!function_exists('showLoginPasswordProtect')) {


    function showLoginPasswordProtect($error_msg)
    {
        ?>
        <html>
        <head>
            <title>PORTAIL DE CONNECTION TUTEUR</title>
            <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
            <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
        </head>
        <body>
        <style>
            input {
                border: 1px solid black;
            }
        </style>
        <div style="width:500px; margin-left:auto; margin-right:auto; text-align:center">
            <form method="post">
                <h3>Entrer vos identifiants:</h3>
                <font color="red"><?php echo $error_msg; ?></font><br>
                <?php echo 'Login:<br /><input type="input" name="access_login" /><br />Password:<br />'; ?>
                <input type="password" name="access_password"/>
                <p></p><input type="submit" name="Submit" value="Submit"/>
            </form>
            <br>
        </div>
        </body>
        </html>

        <?php

        die();
    }
}

require("sql_connection.php");

if (isset($_POST['access_password'])) {
    $login = isset($_POST['access_login']) ? $_POST['access_login'] : '';
    $pass = $_POST['access_password'];

    $login_last_name = explode('.', $login);
    if (sizeof($login_last_name) >= 2) {
        $login_last_name = $login_last_name[1];
    } else {
        $login_last_name = "...";
    }

    $insert = $sth->query("SELECT * FROM tutors WHERE tutor_lastname = '" . $login_last_name . "' ;");
    $logins = $insert->fetchAll();
    if ($login != '' && count($logins) != 0) {
        $to_check_login = $logins[0]['tutor_firstname'] . "." . $logins[0]['tutor_lastname'];
        if ($to_check_login == $login) {
            $login_data = $logins[0];
            if (!strcmp($pass, ($login_data['tutor_firstname'] . $login_data['tutor_id']))) {
                setcookie("verify", md5($login . '%' . $pass), $timeout, '/');

                unset($_POST['access_password']);
                unset($_POST['Submit']);
            } else {
                showLoginPasswordProtect("Incorrect password.");
            }
        } else {
            showLoginPasswordProtect("Incorrect login.");
        }
    } else {
        showLoginPasswordProtect("Incorrect login.");
    }

} else {

    if (!isset($_COOKIE['verify'])) {
        showLoginPasswordProtect("");
    }

    $insert = $sth->query("SELECT * FROM tutors;");
    $logins = $insert->fetchAll();

    $LOGIN_INFORMATION = array($logins[0]['tutor_lastname'] => ($logins[0]['tutor_firstname'] . $logins[0]['tutor_id']));

    foreach ($logins as $login) {
        $LOGIN_INFORMATION[$login['tutor_lastname']] = ($login['tutor_firstname'] . $login['tutor_id']);
    }

    $found = false;
    foreach ($LOGIN_INFORMATION as $key => $val) {
        $lp = ($key) . '%' . $val;
        if ($_COOKIE['verify'] == md5($lp)) {
            $found = true;
            // prolong timeout
            if (TIMEOUT_CHECK_ACTIVITY) {
                setcookie("verify", md5($lp), $timeout, '/');
            }
            break;
        }
    }
    if (!$found) {
        showLoginPasswordProtect("");
    }

}

?>
