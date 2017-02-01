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
		     $res=patch_action($cont,$_GET['id'],$_GET['naissance'],$_GET['ville']);
         if ($res)
            $_GET['message']="Personne modifiée avec succès!"
         else
            $_GET['message']="Pb de modification";
         }
        break;
	  case "add":
      if (add_action($cont, $_GET))
		  echo "Personne ".$_GET['nom']." ajoutée avec succès !";
	    else echo "Pb d'ajout !";
      break;
    default:
    list_action($cont);
}

//header("refresh:4;url=controleur.php");
