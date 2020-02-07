<html>

<head>
<title>Accueil</title>
<link href="sources/livreor.css" rel="stylesheet">
</head>


<body class="accueil">

<header>
    <ul class="en-haut"> 
	
<?php
session_start();
if(!empty($_POST['deco']))
{
	unset($_SESSION['login']);
	unset($_SESSION['password']);
	unset($_SESSION['profil']);
}




if((isset($_SESSION['login']))&&(isset($_SESSION['password'])))
{
?>
<li><a href="sources/profil.php">Modifier Profil </a></li>
<li><a href="sources/commentaire.php">Commentaires</a></li>
<li><a href="sources/livre-or.php">Livre d'Or</a></li>

<?php

}       
?>			
		
<?php
if((isset($_SESSION['login']))&&(isset($_SESSION['password'])))
{
?>
<div class="bouton">
<form class="déconnexion" method="post" action="index.php">
<input type="submit" name="deco" value="Déconnexion">
</form>
</div>
<?php
}

else
{
?>
	<li><a href="sources/connexion.php">Se connecter</a></li>	
	<li><a href="sources/inscription.php">S'inscrire</a></li>
	<li><a href="sources/commentaire.php">Commentaires</a></li>
	<li><a href="sources/livre-or.php">Livre d'Or</a></li>
	
	</ul>
<?php	
}	

?>

</header>

<?php
if(isset($_SESSION['delete']))
{	
?>
<div class="commentairedelete">
<?php
	echo "Commentaire bien supprimé !";	
?>
</div>
<?php
	unset($_SESSION['delete']);	
	header('Refresh: 2;URL=index.php');	
}
?>

<div class="logoaccueil">
<img src="img/logo2.png" width="15%">

<div class="textpresentation">
<p>FL studio est un logiciel de production de musique créé en 1997 par la firme belge Image-Line.</p>
<p>La première version de Fruity Loops (1.0.0) a été développée par Didier Dambrin pour Image-Line et partiellement mise en ligne le 18 décembre 1997.</p>
<p>et partiellement mise en ligne le 18 décembre 1997.</p>
<p>Son lancement officiel date de début 1998, sous forme de boîte à rythmes MIDI à quatre pistes.</p>
<p>Dambrin s'occupe ensuite du design du programme et se développe rapidement en une station audio-numérique plus complète et technique.</p>
<p>FL Studio a publié plusieurs dizaines de versions depuis son lancement, et FL Studio 12 a été mise en ligne le 20 avril 2015.</p>
</div>


</div>


<div class="remerciementcommentaire">

</div>

<article class="presentationdurp">

<div class="img">
	<img class="image1" src="img/fl-studio2.jpg" width="40%">
</div>

<div class="textrp">
<h1>Le logiciel</h1>
<p>Ce logiciel comprend un éditeur audio,</p>
<p>un séquenceur basé sur le concept de patterns (de type de boîte à rythmes,</p>
<p>ou de type partition) à arranger dans une liste de lecture.</p>
<p>FL Studio peut charger et exécuter des plug-ins (instruments virtuels, effets).</p>
<p>Le programme est disponible en quatre versions pour Microsoft Windows,</p>
<p>incluant Fruity Edition, Producer Edition, Signature Bundle et All Plugins Bundle.</p>
<p>Image-Line développe également FL Studio Mobile pour iOS et</p>
<p>Android ainsi que FL Studio Groove pour Windows 8.</p>
</div>



</article>


<article class="presentationdurp2">

<div class="img">
	<img class="image1" src="img/fl-studio1.jpg" width="40%">
</div>

<div class="textrp2">
<h1>Les Plugins</h1>
<p>Le Step Sequencer est une fenêtre qui permet de définir simplement une mesure de batterie, de basse, etc.</p>
<p>en activant ou désactivant des temps (appelés steps) à l'aide d'un bouton par temps.</p>
<p>Le Piano Roll est un autre séquenceur destiné à dessiner des partitions plus complexes sur un plan quadrillé :</p>
<p>l'axe vertical représentant la hauteur de la note (avec la vue globale du clavier à gauche)</p>
<p>et l'axe horizontal représentant le temps.</p>
<p>La table de mixage peut contenir 125 pistes contenant chacun 10 emplacements d'effets sonores.</p>
<p>On ne peut assigner qu'une seule piste d'effets à un channel,</p>
<p>mais il est possible de brancher en sortie le son obtenu vers une autre piste d'effet, ou vers la sortie principale,</p>
<p>qui elle aussi peut se voir assigner 10 effets au maximum; </p>
<p>un channel peut donc recevoir un nombre considérable d'effets au total.</p>
</div>

</article>


<article class="serveursimages">

<h1>Photos du logiciel</h1>

<div class="photos">
<img src="img/ordi.jpg" width="32%">
<img src="img/pad.png" width="32%">
<img src="img/VSTI.jpg" width="32%">
</div>

</article>

<footer>


<p class="page">
FL studio &emsp;&emsp;&emsp;&emsp;
2019 © Hélio de Breyne Tous les droits réservés.  
</p>
</footer>




</body>


</html>