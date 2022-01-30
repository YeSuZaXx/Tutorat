<?php

define('LOGOUT_URL', './index.php');


define('TIMEOUT_MINUTES', 0.5);


define('TIMEOUT_CHECK_ACTIVITY', true);

if (isset($_GET['help'])) {
    die('Include following code into every page you would like to protect, at the very beginning (first line):<br>&lt;?php include("' . str_replace('\\', '\\\\', __FILE__) . '"); ?&gt;');
}


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
                <font color="red"><?php echo $error_msg; ?></font><br/>
                <?php echo 'Login:<br /><input type="input" name="access_login" /><br />Password:<br />'; ?>
                <input type="password" name="access_password"/>
                <p></p><input type="submit" name="Submit" value="Submit"/>
            </form>
            <br/>
        </div>
        </body>
        </html>

        <?php

        die();
    }
}

try {
    $sth = new PDO("sqlite:../bdd/Tutorat.db");
    $sth->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (SQLException $sqle) {
    die('SQL EXCEPTION : ' . $sqle->getMessage());
}

if (isset($_POST['access_password'])) {
    $login = isset($_POST['access_login']) ? $_POST['access_login'] : '';
    $pass = $_POST['access_password'];

    $insert = $sth->query("SELECT * FROM tutors WHERE tutor_lastname = '" . $login . "' ;");
    $logins = $insert->fetchAll();
    if ($login != '' && count($logins) != 0 && $logins[0]['tutor_lastname'] = $login) {
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
