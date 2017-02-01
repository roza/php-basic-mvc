<?php
require_once 'modele2.php';
$cont= new Contacts;
$amis = $cont->get_all_friends();
require 'templates/t-list.php';
