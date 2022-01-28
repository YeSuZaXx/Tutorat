<?php


$username = "root";
$password = "";

try {
    $sth = new PDO("sqlite:../bdd/Tutorat.db");
    $sth->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (SQLException $sqle) {
    die('SQL EXCEPTION : ' . $sqle->getMessage());
}

if(isset($_POST['subjectselect']) && !($_POST['subjectselect'] == '*')) {
    $tri = $sth->query("SELECT * FROM requests INNER JOIN status ON status.status_id = requests.status_id WHERE requests.dateform > (SELECT DATE('now','-7 days','weekday 2')) AND subject = '".$_POST['subjectselect']."';");
    $rows = $tri->fetchAll();
} else if(isset($_POST['alphasort']) && $_POST['alphasort']){
	$tri = $sth->query("SELECT * FROM requests INNER JOIN status ON status.status_id = requests.status_id WHERE requests.dateform > (SELECT DATE('now','-7 days','weekday 2')) ORDER BY subject;");
    $rows = $tri->fetchAll();
} else {
    $insertion = $sth->query("SELECT * FROM requests INNER JOIN status ON status.status_id = requests.status_id WHERE requests.dateform > (SELECT DATE('now','-7 days','weekday 2'));");
    $rows = $insertion->fetchAll();
}


/*echo "<pre>";
print_r($tableau);
echo "</pre>";
*/


?>