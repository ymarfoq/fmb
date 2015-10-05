	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $titre; ?></title>
	<META NAME="Description" CONTENT="">
	<META NAME="Keywords" CONTENT="">
	<META NAME="Author" CONTENT="Yohan Marfoq">
	<META NAME="Identifier-URL" CONTENT="">
	<META NAME="Date-Creation-yyyymmdd" content="">
	<META NAME="Category" CONTENT="">
	<meta name="rating" content="general" />
	<meta name="revisit-after" content="10 Days" />
	<meta name="expires" content="never">
	<meta name="distribution" content="global" /> 
	<link rel="shortcut icon" type="image/png" href="../images/icone.ico">
	<link rel="stylesheet" type="text/css" media="all" href="../style.css">
	<script type='text/javascript' src='../../admin/script.js'></script>
	<script type='text/javascript' src='../script.js'></script>
</head>

<body>
	<section>
		<header  class='texte_<?php echo $titre_page; ?>'>
			<div>
				<img id='image' src='../../images/boule_<?php echo $titre_page; ?>.png' height=50>
				<h1><?php echo $titre; ?></h1>
			</div>
			<nav id='nav' class='fond_<?php echo $titre_page; ?>'>
				<a class="menu_item" href="../accueil"> Accueil</a>|
				<span class="menu_item cible" onclick=menu_parc('table') >Parc</span>|
				<a class="menu_item" href="../contact">Contact</a>|
				<a class="menu_item" href="../localisation">Localisation</a>|
				<a class="menu_item" href="../formulaire">Formulaire</a>
			</nav>
			<table id='menu_parc'>
				<tr>
					<td class='menu_parc_item FMB_T'><a href='../FMBtechnologie' class="cible">FMB Technologie</a></td>
					<td>|</td>
					<td class='menu_parc_item FMB_I'><a href='../FMBindustrie' class="cible">FMB Industrie</a></td>
					<td>|</td>
					<td class='menu_parc_item TEP'><a href='../TEP' class="cible">TEP</a></td>
					<td>|</td>
					<td class='menu_parc_item FMB_P'><a href='../FMBplastiques' class="cible">FMB Plastiques</a></td>
					<td>|</td>
					<td class='menu_parc_item CIS'><a href='../CIS' class="cible">CIS</a></td>
				</tr>
			</table>
			<form id='admin' method="post">
					<?php if($_SESSION['admin']){echo "<input type='hidden' name='mdp' size=15 id='mdp' value='xxx'><input type='submit' value='Déconnexion'>";}
						else{echo "<input type='password' name='mdp' size=16 id='mdp'><input type='submit' value='<-ADMIN'>";}
						$db =new PDO('sqlite:../../admin/base.db');
					?>
			</form>
		</header>
