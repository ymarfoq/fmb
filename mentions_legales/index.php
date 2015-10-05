<?php session_start(); 
header( 'content-type: text/html; charset=utf-8' );
 if(isset($_POST['mdp'])){if($_POST['mdp']=='mdp'){$_SESSION['admin']=TRUE;}else{$_SESSION['admin']=FALSE;}}else{if(!(isset($_SESSION['admin']))){$_SESSION['admin']=FALSE;}};
 ?>
<!DOCTYPE html>
<html lang=fr>
<head>
	<style>
h3{font-size:18px; text-align:left; margin:5px 30px;}
p{margin:20px}
	</style>
<?php 
	$titre="Plastics";
	include("../header.php");
?>
	<h1> Mentions légales</h1>
	<table cellspacing=20>
		<tr>
			<td width=30%><h3>Informations Editeur</h3></td>
			<td>Directeur de la publication : <strong>Jean-Pierre LECUL</strong>
				<br>Réalisation : <strong><a href="http://www.interaction-multimedia.com/" target="_blank">Interaction</a></strong>
				<br>Hébergement : <strong><a href="http://www.interaction-multimedia.com/" target="_blank">Interaction</a></strong>
			</td>
		</tr>
		<tr>
			<td><h3>Formulaire</h3></td>
			<td>
				Les informations recueillies par le biais des formulaires ne seront pas divulguées à des personnes autres que celles composants notre société.
				<br>Certaines des informations de ces formulaires sont facultatives, d'autres obligatoires et clairement indiquées comme telles afin que vos réponses
				 soient suffisantes pour nous permettre de traiter l'information.
			</td>
		</tr>
		<tr>
			<td><h3>Loi informatique et liberté</h3></td>
			<td>
				Conformément à la loi du 6 janvier 1978 relative à linformatique, aux fichiers et aux libertés, nous vous informons que vous disposez d'un droit d'accès, 
				de modification, de rectification et de suppression des données qui vous concernent.
			</td>
		</tr>
		<tr>
			<td><h3>Pour cela écrivez à :</h3></td>
			<td>
				<strong>FMB</strong>
				<br>17, avenue du président Roosevelt
				<br>80220 Bouttencourt
				<br>Tel : <strong>02.32.97.51.80</strong>
				<br>Siret/ <strong>310 612 080 00021</strong>
				<br>APE / <strong>295 N</strong>
				<br>Capital / <strong>275 000 €</strong>
			</td>
		</tr>
	</table>
	<?php include("../footer.php") ?>
</section>
</body
</html>
