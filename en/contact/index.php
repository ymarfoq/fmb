<?php session_start(); 
header( 'content-type: text/html; charset=utf-8' );
 if(isset($_POST['mdp'])){if($_POST['mdp']=='mdp'){$_SESSION['admin']=TRUE;}else{$_SESSION['admin']=FALSE;}}else{if(!(isset($_SESSION['admin']))){$_SESSION['admin']=FALSE;}};
 ?>
<!DOCTYPE html>
<html lang=en>
<head>
	<style>
	.couleur{color:#808000;}
	
	</style>
<?php 
	$titre="formulaire";
	include("../../header.php");
?>
	<h1 class='couleur'> Formulaire </h1>
	<form>
	<label name="entree1">Entrée 1</label>
	<input type="text" size=10 name="entree1">
	</form>
	
	<?php include("../../footer.php") ?>
</section>
</body
</html>
