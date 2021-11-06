<?php
require_once 'models/modele2.php';

function list_action($cont,$twig, $message){
  $amis = $cont->get_all_friends();
  $template = $twig->load('carnet.twig.html');
  $titre="My Contacts";
  echo $template->render(array(
            'titre' => $titre,
            'amis' => $amis,
            'message' => $message
            ));
}

function detail_action($cont,$twig, $id,$message=''){
  $ami = $cont->get_friend_by_id($id);
  $template = $twig->load('detail.twig.html');
  $titre="Détails";
  echo $template->render(array(
            'titre' => $titre,
            'ami' => $ami,
            'message' => $message
            ));
}

function suppr_action($cont, $id){
  return ($cont->delete_friend_by_id($id));
}

function patch_action($cont, $id, $naissance, $ville){
  return ($cont->patch($id,$naissance,$ville ));
}

function add_action($cont, $contact){
  return ($cont->add_friend($contact));
}
