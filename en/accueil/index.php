<?php session_start(); 
header( 'content-type: text/html; charset=utf-8' );
 if(isset($_POST['mdp'])){if($_POST['mdp']=='mdp'){$_SESSION['admin']=TRUE;}else{$_SESSION['admin']=FALSE;}}else{if(!(isset($_SESSION['admin']))){$_SESSION['admin']=FALSE;}};
 ?>
<!DOCTYPE html>
<html lang=en>
<head>
<?php 
	$titre_page="groupe_FMB";
	$titre="Groupe FMB Holding";
	include("../header.php");
?>
	<hr>
	<table width=100%>
		<tr>
			<td width=150><a href="../FMBtechnologie/"><img src="../../images/boule_FMB_T.png" width=50><br><h2> FMB Technologie </h2></a></td>
			<td>
				<?php
				$accueil = $db->query('SELECT accueil FROM contenus WHERE entreprise="FMB_T";')->fetch();
				if($_SESSION['admin']){echo "<form method='post' action='../../admin/modifier/contenu.php'>
																	<input type='hidden' name='entreprise' value='FMB_T'>
																	<input type='hidden' name='type' value='accueil'>
																	<textarea name='contenu' rows=3>".$accueil['accueil']."</textarea>
																	<input type='submit' value='Enregistrer les modifications'>
																</form>";}
				else{ echo "<p>".nl2br(html_entity_decode(stripslashes($accueil['accueil'])))."</p>";}
				?>
			</td>
		</tr>
	</table>
	<br>
	<hr>
	<table width=100%>
		<tr>
			<td width=150><a href="../FMBindustrie/"><img src="../../images/boule_FMB_I.png" width=50><br><h2> FMB Industrie </h2></a></td>
			<td>
				<?php
				$accueil = $db->query('SELECT accueil FROM contenus WHERE entreprise="FMB_I";')->fetch();
				if($_SESSION['admin']){echo "<form method='post' action='../../admin/modifier/contenu.php'>
																	<input type='hidden' name='entreprise' value='FMB_I'>
																	<input type='hidden' name='type' value='accueil'>
																	<textarea name='contenu' rows=3>".$accueil['accueil']."</textarea>
																	<input type='submit' value='Enregistrer les modifications'>
																</form>";}
				else{ echo "<p>".nl2br(html_entity_decode(stripslashes($accueil['accueil'])))."</p>";}
				?>
			</td>
		</tr>
	</table>
	<br>
	<hr>
	<table width=100%>
		<tr>
			<td width=150><a href="../TEP/"><img src="../../images/boule_TEP.png" width=50><br><h2> TEP </h2></a></td>
			<td>
				<?php
				$accueil = $db->query('SELECT accueil FROM contenus WHERE entreprise="TEP";')->fetch();
				if($_SESSION['admin']){echo "<form method='post' action='../../admin/modifier/contenu.php'>
																	<input type='hidden' name='entreprise' value='TEP'>
																	<input type='hidden' name='type' value='accueil'>
																	<textarea name='contenu' rows=3>".$accueil['accueil']."</textarea>
																	<input type='submit' value='Enregistrer les modifications'>
																</form>";}
				else{ echo "<p>".nl2br(html_entity_decode(stripslashes($accueil['accueil'])))."</p>";}
				?>
			</td>
		</tr>
	</table>
	<br>
	<hr>
	<table width=100%>
		<tr>
			<td width=150><a href="../FMBplastiques/"><img src="../../images/boule_FMB_P.png" width=50><br><h2> FMB Plastiques </h2></a></td>
			<td>
				<?php
				$accueil = $db->query('SELECT accueil FROM contenus WHERE entreprise="FMB_P";')->fetch();
				if($_SESSION['admin']){echo "<form method='post' action='../../admin/modifier/contenu.php'>
																	<input type='hidden' name='entreprise' value='FMB_P'>
																	<input type='hidden' name='type' value='accueil'>
																	<textarea name='contenu' rows=3>".$accueil['accueil']."</textarea>
																	<input type='submit' value='Enregistrer les modifications'>
																</form>";}
				else{ echo "<p>".nl2br(html_entity_decode(stripslashes($accueil['accueil'])))."</p>";}
				?>
			</td>
		</tr>
	</table>
	<br>
	<hr>
	<table width=100%>
		<tr>
			<td width=150><a href="../CIS/"><img src="../../images/boule_CIS.png" width=50><br><h2> CIS </h2></a></td>
			<td>
				<?php
				$accueil = $db->query('SELECT accueil FROM contenus WHERE entreprise="CIS";')->fetch();
				if($_SESSION['admin']){echo "<form method='post' action='../../admin/modifier/contenu.php'>
																	<input type='hidden' name='entreprise' value='CIS'>
																	<input type='hidden' name='type' value='accueil'>
																	<textarea name='contenu' rows=3>".$accueil['accueil']."</textarea>
																	<input type='submit' value='Enregistrer les modifications'>
																</form>";}
				else{ echo "<p>".nl2br(html_entity_decode(stripslashes($accueil['accueil'])))."</p>";}
				?>
			</td>
		</tr>
	</table>
	<hr>
	<table width=100%>
		<tr>
			<td width=10%></td>
			<td width=40%>
				<h2>Contact</h2>
				<p>-</p>
				<p>-</p>
				<p>-</p>
			</td>
			<td width=40%>
				<h2>Newsletter</h2>
				<p>-</p>
				<p>-</p>
				<p>-</p>
			</td>
			<td width=10%></td>
		</tr>
	</table>
	<?php include("../footer.php") ?>
</section>
</body
</html>
