<?php
require_once 'modele2.php';
$cont = new Contacts;

include 'controllers.php';
// on lit une action en parametre
// par defaut, 'list'
$action = $_GET['action'] ?? 'list';
switch ($action) {
    case "list":
        list_action($cont);
        break;
    case "detail":
        detail_action($cont, $_GET['id']);
        break;
    case "suppr":
       suppr_action($cont, $_GET['id']);
       break;
    case "patch":
       if (!empty($_GET['id']) and !empty($_GET['naissance'])
        and !empty($_GET['ville']))
		     patch_action($cont,$_GET['id'],$_GET['naissance'],$_GET['ville']);
        break;
	  case "add":
      if ($cont->add_friend_by_id($cont, $_GET['nom'],$_GET['prenom'],
        $_GET['naissance'],$_GET['ville']))
		  echo "Personne ".$_GET['nom']." ajoutée avec succès !";
	    else echo "Pb d'ajout !";
      break;
    default:
    list_action($cont);
}

//header("refresh:4;url=controleur.php");
