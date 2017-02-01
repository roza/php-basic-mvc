<?php
require_once 'modele2.php';


function list_action($cont){
  $amis = $cont->get_all_friends();
  require 'templates/t-list.php';
}

function detail_action($cont, $id){
  $ami = $cont->get_friend_by_id($id);
  require 'templates/t-detail.php';
}

function suppr_action($cont, $id){
  if ($cont->delete_friend_by_id($id))
    echo "Personne supprimée avec succès !";
  else echo "Pb de suppression !";
}

function patch_action($cont, $id, $naissance, $ville){
  if ($cont->patch($id,$naissance,$ville ))
    echo "Personne $id modifiée avec succès !";
  else echo "pb modification !";
}
