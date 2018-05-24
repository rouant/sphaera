<!DOCTYPE html >
<html>
	<head>
		<title></title>
		<link rel="icon" href="./img/favicon.ico" />
		<link rel="stylesheet" href="./css/styleerror.css">

	</head>
	
	<body>
	<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sphaera";

$pseudo = $_POST['pseudo'];
$email = $_POST['adresse'];
$pass = $_POST['mot_de_passe'];
//$pass = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
// >> essaye d'externaliser le plus possible de variable pour ne plus devoir aller dans ta fonction par la suite
// >> il reste à modifier le mot de passe et le password.


if(!$pseudo OR ! $email)
{
	echo 'Veuillez insérer un pseudo ou une adresse email';
}
else
{
	if($pass == $_POST['confirmation_mot_de_passe'])
	{
		try {
					$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
					
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
					$sql = "INSERT INTO membre (pseudo, email, pass, date_inscription )
					VALUES ('$pseudo', '$email', '$pass', NOW())";
								
					// use exec() because no results are returned
					$conn->exec($sql);
			}
		catch(PDOException $e)
			{
			echo $sql . "<br>" . $e->getMessage();
			}

		$conn = null;
		
		header('Location: connexion.php');
	}
	else
	{
		echo 'La confirmation du mot de passe a échouée, veuillez vérifier que les deux mots de passe soient identiques' ;
	}
}




	?>
	

	
	
	</body>
</html>