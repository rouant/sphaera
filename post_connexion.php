<!DOCTYPE html >
<html>
	<head>
		<title></title>
		<link rel="icon" href="./img/favicon.ico" />
		<link rel="stylesheet" href="./css/styleerror.css">
	</head>
	
	<body>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=sphaera;charset=utf8','root','root');
$req = $bdd->prepare('SELECT id FROM membre WHERE pseudo = :pseudo AND pass = :pass');
$req->execute(array(
    'pseudo' => $_POST['pseudo'],
    'pass' => $_POST['mot_de_passe']));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Identifiant ou mot de passe incorrect !';
}
else
{
    session_start();
    $_SESSION['pseudo'] = $_POST['pseudo'];
 
	header('Location: chat.php');
}
?>

</body>
</html>