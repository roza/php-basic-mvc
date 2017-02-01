<?php
$title="Personne d'ID".$ami->ID;
ob_start();
?>
<form id="fdetail" action="controleur.php">
  <input type="hidden" name="action" value="patch">
  <input type="hidden" name="id" value="<?php echo $ami->ID ?>">
  <p> NOM:
  <input type="text" value="<?php echo $ami->NOM ?>">
  <p> PRENOM:
  <input type="text" value="<?php echo $ami->PRENOM ?>">
  <p> NAISSANCE:
  <input type="text" name="naissance" value="<?php echo $ami->NAISSANCE ?>">
  <p> VILLE:
  <input type="text" name="ville" value="<?php echo $ami->VILLE ?>">
  <input type="submit" value="modifier">
</form>
<?php
// et on récupère le contenu dans $content
$content = ob_get_clean();
// avant de tout afficher
require 'baseLayout.php';
