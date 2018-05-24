<!DOCTYPE html >
<html>
	<head>
		 
		<title>Sphaera - M'inscrire</title>
		<link rel="icon" href="./img/favicon.ico" />
		<link rel="stylesheet" href="./css/styleindex.css">

	</head>

	<body>
		<div id="inscription">

	
	<!-- PAS TOUCHE -->
			<div class="flexbox">
				
				
					<div class="formulaire">
					<div class= "inscription1"> 
					<H1>Inscription </H1>
					</div>
					<br />
					<div class= "inscription"> 
						<form method="post" action="post_index.php">
							Pseudo : <input type="text" name="pseudo"><br> <br> 
							Adresse E-mail : <input name="adresse" type="email" placeholder="monadresse@mail.com" onblur="verifMail(bon)"> <br> <br> 
							Mot de passe : <input type="password" name="mot_de_passe" onblur="mdpchange()"><br> <br> 
							Confirmation mot de passe : <input type="password" name="confirmation_mot_de_passe">
							<input type="submit" value="Je valide" class="bouton"><br> <br>
						</form>
						
							<form method="post" action="connexion.php">
								Déjà un identifiant ? <INPUT type="submit" value="Me connecter"/>
							</form>
					
					</div>
					</div>
			</div>
	<!-- PAS TOUCHE -->
		</div>
	</body>
</html