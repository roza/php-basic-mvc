<?php
require_once 'modele.php';
$amis = get_all_friends();
require 'templates/t-list.php';
?>
