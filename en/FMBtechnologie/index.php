<?php session_start(); 
header( 'content-type: text/html; charset=utf-8' );
 if(isset($_POST['mdp'])){if($_POST['mdp']=='mdp'){$_SESSION['admin']=TRUE;}else{$_SESSION['admin']=FALSE;}}else{if(!(isset($_SESSION['admin']))){$_SESSION['admin']=FALSE;}};
 ?>
<!DOCTYPE html>
<html lang=en>
<head>
<?php 
	$titre="FMB Technologie";
	$titre_page="FMB_T";
	include("../header.php");
?>
<article>
	<h2>Historique</h2>
	<hr>
	<?php
				$contenu = $db->query('SELECT description FROM contenus WHERE entreprise="FMB_T";')->fetch();
				if($_SESSION['admin']){echo "<form method='post' action='../../admin/modifier/contenu.php'>
																	<input type='hidden' name='entreprise' value='FMB_T'>
																	<input type='hidden' name='type' value='description'>
																	<textarea name='contenu' rows=3>".$contenu['description']."</textarea>
																	<input type='submit' value='Enregistrer les modifications'>
																</form>";}
				else{ echo "<p>".nl2br(html_entity_decode(stripslashes($contenu['description'])))."</p>";}
				?>
</article>
<article>
	<h2>Chiffres</h2>
	<hr>
	<p><br><br><br><br></p>
</article>
<article>
	<h2>Documents</h2>
	<hr><br>
	<table width=100%>
		<tr>
			<td>
				<div>Doc 1</div>
				<img src="test" width=70 height=100>
			</td>
			<td>
				<div>Doc 1</div>
				<img src="test" width=70 height=100>
			</td>
			<td>
				<div>Doc 1</div>
				<img src="test" width=70 height=100>
			</td>
			<td>
				<div>Doc 1</div>
				<img src="test" width=70 height=100>
			</td>
			<td>
				<div>Doc 1</div>
				<img src="test" width=70 height=100>
			</td>
			<td>
				<div>Doc 1</div>
				<img src="test" width=70 height=100>
			</td>
		</tr>
	</table>
</article>
<hr>



	<?php include("../../footer.php") ?>
</section>
</body
</html>
