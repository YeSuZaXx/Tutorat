<?php



$username="root";
  $password="";

   try {
        $sth = new PDO("mysql:host=localhost;dbname=tutorat;port=3308", $username, $password);
        $sth->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (SQLException $sqle) {
        die('SQL EXCEPTION : '.$sqle->getMessage());
    }

$insertion=$sth->prepare("SELECT * FROM tutorattable WHERE tutorattable.dateactuelle >= DATE_ADD(DATE_ADD('1900-01-01', INTERVAL DATEDIFF(DATE(NOW()), '1900-01-01')/7-1 WEEK), INTERVAL 1 DAY)");
$insertion->execute();

$tableau = $insertion->fetchAll();
echo "<pre>";
print_r($tableau);
echo "</pre>";



  ?>