<?php


$LOGIN_INFORMATION = array(
    'Alban_12400' => 'QTze@1',
    'Nathan' => 'admin458'
);


define('USE_USERNAME', true);


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
                <?php if (USE_USERNAME) echo 'Login:<br /><input type="input" name="access_login" /><br />Password:<br />'; ?>
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

if (isset($_POST['access_password'])) {

    $login = isset($_POST['access_login']) ? $_POST['access_login'] : '';
    $pass = $_POST['access_password'];
    if (!USE_USERNAME && !in_array($pass, $LOGIN_INFORMATION)
        || (USE_USERNAME && (!array_key_exists($login, $LOGIN_INFORMATION) || $LOGIN_INFORMATION[$login] != $pass))
    ) {
        showLoginPasswordProtect("Incorrect password.");
    } else {

        setcookie("verify", md5($login . '%' . $pass), $timeout, '/');


        unset($_POST['access_password']);
        unset($_POST['Submit']);
    }

} else {

    if (!isset($_COOKIE['verify'])) {
        showLoginPasswordProtect("");
    }

    $found = false;
    foreach ($LOGIN_INFORMATION as $key => $val) {
        $lp = (USE_USERNAME ? $key : '') . '%' . $val;
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