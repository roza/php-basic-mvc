<?php
$title="Recherche de la personne d'ID".$ami->ID;
ob_start();
// on démarre la bufferisation pour $content
echo $ami->NOM.'<br>';
echo $ami->PRENOM.'<br>';
// et on récupère le contenu dans $content
$content = ob_get_clean();
// avant de tout afficher
require 'baseLayout.php';
