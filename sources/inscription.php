<html>

<head>
<link href="livreor.css" rel="stylesheet">
<title>Inscription</title>
</head>

<body class="inscription">
<header>	
	<ul>
		<li><a href="../index.php">Accueil</a></li>
		<li><a href="connexion.php">Se connecter</a></li>
	</ul>
</header>

<?php


?>

<article class="form">


	<form class="inscriptionform" method="post" action="inscription.php"> 

<img class="logo" src="../img/loader.gif" width="150px">
<?php

if(!empty($_POST['inscription']))
{
	$connexion= mysqli_connect("localhost", "root", "", "livreor"); 
	$login=$_POST['login'];
	$checkdups="SELECT  *from utilisateurs WHERE login='$login'";
    $checkdups2=mysqli_query($connexion, $checkdups) or die(mysqli_error($connexion));
    $checkdups3=mysqli_num_rows($checkdups2);
		
	if((($_POST['password']!=$_POST['passwordagain'])||($checkdups3>0))||(strlen($_POST['password'])< 5))
	{
		if(($_POST['password']!=$_POST['passwordagain'])&&($checkdups3>0))
		{
			?>
			<div class="affichage">
			<?php
			echo"*Mots de passes rentrés différents";
			?>
			</div>
			<div class="affichage">
			<?php
			echo"*Veuillez renseigner un autre login";
			mysqli_close($connexion);
			?>
			</div>
			<?php
		}
		else if((strlen($_POST['password'])< 5)&&($checkdups3>0))
		{  
			?>
			<div class="affichage">
			<?php
			echo"*Veuillez renseigner un autre login";
			?>
			</div>
			<div class="affichage">
			<?php
			echo"*Mots de passes trop courts";
			echo" 5 caractères minimum";
			mysqli_close($connexion);
			?>
			</div>
			<?php			
		}	
		else if($checkdups3>0)
		{	  
			?>
			<div class="affichage">
			<?php
			echo "*Veuillez renseigner un autre Pseudo";
			?>
			</div>
			<?php
			mysqli_close($connexion);	
		}
		else if($_POST['password']!=$_POST['passwordagain'])
		{  
			?>
			<div class="affichage">
			<?php
			echo"*Mots de passes rentrés différents";
			mysqli_close($connexion);
			?>
			</div>
			<?php			
		}
		else if(strlen($_POST['password']< 5))
		{  
			?>
			<div class="affichage">
			<?php
			echo"*Mots de passes trop courts";
			echo " 5 caractères minimum";
			mysqli_close($connexion);
			?>
			</div>
			<?php			
		}	
	}	
	else
	{	

			$hash = password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 12]);					
			$connexion= mysqli_connect("localhost", "root", "", "livreor"); 
			$query = 'INSERT INTO `utilisateurs`(`login`,`password`)VALUES
			("'.$_POST['login'].'", "'.$hash.'");';		
			mysqli_query($connexion, $query);		 
			mysqli_close($connexion);
			header('Location: connexion.php');	
			
			
	}
}
	
?>
		<input type="text" required placeholder="Pseudo" name="login">
		<input type="password" required placeholder="mot de passe (5 caractères minimum)"  name="password">
		<input type="password" required placeholder="Confirmez votre mot de passe"  name="passwordagain">
		<input type="submit" value="Inscription" name="inscription">
		<input type="reset" value="Effacer" name="reset">
	</form>


</article>



</body>
</html>