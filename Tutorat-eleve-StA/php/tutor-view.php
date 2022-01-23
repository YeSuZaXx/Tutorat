<?php


$username = "root";
$password = "";

try {
    $sth = new PDO("sqlite:../bdd/Tutorat.db");
    $sth->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (SQLException $sqle) {
    die('SQL EXCEPTION : ' . $sqle->getMessage());
}

$insertion = $sth->query("SELECT * FROM tutorattable INNER JOIN status ON status.status_id = tutorattable.status_id WHERE tutorattable.dateform > (SELECT DATE('now','-7 days','weekday 2'));");
$rows = $insertion->fetchAll();


/*echo "<pre>";
print_r($tableau);
echo "</pre>";
*/


?>