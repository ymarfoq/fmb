<?php session_start(); 
header( 'content-type: text/html; charset=utf-8' );
 if(isset($_POST['mdp'])){if($_POST['mdp']=='mdp'){$_SESSION['admin']=TRUE;}else{$_SESSION['admin']=FALSE;}}else{if(!(isset($_SESSION['admin']))){$_SESSION['admin']=FALSE;}};
 ?>
<!DOCTYPE html>
<html lang=en>
<head>
<?php 
	$titre="TEP";
	$titre_page="TEP";
	include("../header.php");
?>
<article>
	<h2>Descriptif détaillé</h2>
	<hr>
	<?php
				$contenu = $db->query('SELECT description FROM contenus WHERE entreprise="TEP";')->fetch();
				if($_SESSION['admin']){echo "<form method='post' action='../../admin/modifier/contenu.php'>
																	<input type='hidden' name='entreprise' value='TEP'>
																	<input type='hidden' name='type' value='description'>
																	<textarea name='contenu' rows=3>".$contenu['description']."</textarea>
																	<input type='submit' value='Enregistrer les modifications'>
																</form>";}
				else{ echo "<p>".nl2br(html_entity_decode(stripslashes($contenu['description'])))."</p>";}
				?>
</article>
<article>
	<h2>photos</h2>
	<hr><br>
	<table width=100%>
		<tr>
			<td>
				<img src="test" width=180 height=180>
			</td>
			<td>
				<img src="test" width=180 height=180>
			</td>
			<td>
				<img src="test" width=180 height=180>
			</td>
			<td>
				<img src="test" width=180 height=180>
			</td>
			<td>
				<img src="test" width=180 height=180>
			</td>
		</tr>
	</table>
</article>
<article>
	<h2>parc machines</h2>
	<hr><br>
	<table width=100%>
		<tr>
			<td>
				<img src="test" width=150 height=150>
			</td>
			<td>
				<img src="test" width=150 height=150>
			</td>
			<td>
				<img src="test" width=150 height=150>
			</td>
			<td>
				<img src="test" width=150 height=150>
			</td>
			<td>
				<img src="test" width=150 height=150>
			</td>
			<td>
				<img src="test" width=150 height=150>
			</td>
		</tr>
	</table>
</article>
<article>
	<h2>secteurs d’activité</h2>
	<hr>
	<p><br><br><br><br></p>
</article>
<hr>
<article>
	<h2>qualité</h2>
	<p><br><br><br><br></p>
</article>
<hr>
	<?php include("../footer.php") ?>
</section>
</body
</html>
