<html>
<head>
<title>
Recherche d'un contact par son ID
</title>
<meta charset="utf-8">
</head>
<body>
<?php
$wanted=$_GET['ID'];
if (!empty($wanted)){
	echo "<h1>Recherche de la personne d'ID $wanted </h1>";
	require_once('modele2.php');
	$cont = new Contacts;
	$ami = $cont->get_friend_by_id($wanted);
	if(empty($ami))
		echo "Pb de requete";
	else{
		echo $ami->NOM." ".$ami->PRENOM."</br>\n";
  }
}
  ?>
</body>
</html>
