<?php session_start(); 

// connection à la base
$db = new PDO('sqlite:../base.db');

if ($_SESSION['admin']){
	$entreprise=$_POST['entreprise'];
	$type=$_POST['type'];
	$contenu=$_POST['contenu'];
	echo $entreprise;
	echo $type;
	echo $contenu;
	$qry=$db->prepare("UPDATE contenus SET ".$type."=? WHERE entreprise=?;");
	$qry->execute(array($contenu, $entreprise));
	$db = null;
	header('Location:../../fr1/accueil');
}
?>
		</section>
	</body>
</html>

