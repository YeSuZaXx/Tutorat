<?php
session_start(); 
if (isset($_SESSION['count']) && ($_SESSION['count'] > 4)) {
	header('Location: index.php');
} else {
?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Espace admin</title>
<style>
</style>
</head>
<body>
	<?php
	$password = 'admin';
	if ((isset($_POST['password']) && ($_POST['password'])) != $password) {
		if (!isset($_SESSION['count'])) {
			$_SESSION['count'] = 0;
		} else {
			$_SESSION['count']++;
		}
	?> 
<h1 style="text-align: center;">Connexion</h1>
<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
<p><label for="password">Mot de passe</label> <input type="password" title="Saisissez le mot de passe admin" name="password" /></p> 
<p><input type="submit" name="submit" value="Connexion" /></p> 
</form>
	<?php
	} else { ?> 
<p>Est-ce que ca marche ?</p>
<?php 
	}
} 
?>
</body>
</html>