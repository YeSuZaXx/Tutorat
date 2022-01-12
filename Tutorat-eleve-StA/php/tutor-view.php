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

$insertion=$sth->query("SELECT * FROM tutorattable WHERE tutorattable.dateform >= DATE_ADD(DATE_ADD('1900-01-01', INTERVAL FLOOR(DATEDIFF(DATE(NOW())-1, '1900-01-01')/7) WEEK), INTERVAL 1 DAY)");

$rows = $insertion->fetchAll();


/*echo "<pre>";
print_r($tableau);
echo "</pre>";
*/


  ?>