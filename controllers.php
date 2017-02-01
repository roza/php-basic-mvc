<?php
require_once 'modele2.php';

function list_action($cont, $message){
  $amis = $cont->get_all_friends();
  require 'templates/t-list.php';
}

function detail_action($cont, $id){
  $ami = $cont->get_friend_by_id($id);
  require 'templates/t-detail.php';
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
