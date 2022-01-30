<?php

try {
    if (isset($sub_dir) && $sub_dir) {
        $sth = new PDO("sqlite:../../bdd/Tutorat.db");
    } else {
        $sth = new PDO("sqlite:../bdd/Tutorat.db");
    }
    $sth->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (SQLException $sqle) {
    die('SQL EXCEPTION : ' . $sqle->getMessage());
}
