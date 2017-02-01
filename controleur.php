<?php
require_once 'modele2.php';
$cont = new Contacts;

include 'controllers.php';
// on lit une action en parametre
// par defaut, 'list'
$action = $_GET['action'] ?? 'list';
$message=" ";
switch ($action) {
    case "list":
        list_action($cont,$message);
        break;
    case "detail":
        detail_action($cont, $_GET['id']);
        break;
    case "suppr":
       if (suppr_action($cont, $_GET['id']))
            $message = "Personne supprimée avec succès !";
       else $message = "Pb de suppression !";
       list_action($cont,$message);
       break;
    case "patch":
       if (!empty($_GET['id']) and !empty($_GET['naissance'])
        and !empty($_GET['ville']))
		     $res=patch_action($cont,$_GET['id'],$_GET['naissance'],$_GET['ville']);
         if ($res)
            $message = "Personne modifiée avec succès!";
         else
            $message = "Pb de modification";
        list_action($cont,$message);
        break;
	  case "add":
      if (add_action($cont,$message, $_GET))
		       $message = "Personne ".$_GET['nom']." ajoutée avec succès !";
	    else $message = "Pb d'ajout de la personne!";
      list_action($cont,$message);
      break;
    default:
    list_action($cont,$message);
}

//header("refresh:4;url=controleur.php");
