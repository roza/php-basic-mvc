<?php
$title="Personne d'ID".$ami->ID;
ob_start();
?>
<form id="fdetail" action="controleur.php">
  <fieldset>
    <legend><?php $ami->NOM ?></legend>
    <input type="hidden" name="action" value="patch">
    <input type="hidden" name="id" value="<?php echo $ami->ID ?>">
    <p> <label for="nom">NOM:</label>
  <input type="text" name="nom" value="<?php echo $ami->NOM ?>">
  <p> <label for="prenom">PRENOM:</label>
  <input type="text" value="<?php echo $ami->PRENOM ?>">
  <p> <label for="naissance">NAISSANCE:</label>
  <input type="text" name="naissance" value="<?php echo $ami->NAISSANCE ?>">
  <p> <label for="ville">NOM:VILLE:</label>
  <input type="text" name="ville" value="<?php echo $ami->VILLE ?>">
  <p>
  <input type="submit" value="modifier">
</fieldset>
</form>
<?php
// et on récupère le contenu dans $content
$content = ob_get_clean();
$message="";
// avant de tout afficher
require 'baseLayout.php';
