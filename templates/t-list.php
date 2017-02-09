<?php
$title="Interrogation de  CARNET avec PDO";
ob_start();
// on démarre la bufferisation pour $content
?>

<table class="centre" id="jolie">
<tr> <td> Nom </td> <td> Prénom </td><td>Suppression</td></tr>
  <?php foreach ($amis as $ami): ?>
	<tr>
	<td>
    <a href="controleur.php?action=detail&id=<?php echo $ami['ID']; ?>" >
      <?php echo $ami['NOM']; ?>
  </a></td>
	<td><?php echo $ami['PRENOM'] ?></td>
  <td>
    <a href="controleur.php?action=suppr&id=<?php echo $ami['ID']; ?>" >
      X
  </a></td>
	</tr>
  <?php endforeach ?>
</table>
<input type="button"  id="addbutt" value="Ajouter" onclick="afficher()"/>
<section id="ajout">
<form id="add" action="controleur.php">
  <fieldset>
    <legend><?php $ami->NOM ?></legend>
    <input type="hidden" name="action" value="add">
    <p> <label for="nom">NOM:</label>
  <input type="text" name="nom">
  <p> <label for="prenom">PRENOM:</label>
  <input type="text" name="prenom">
  <p> <label for="naissance">NAISSANCE:</label>
  <input type="text" name="naissance" >
  <p> <label for="ville">VILLE:</label>
  <input type="text" name="ville">
  <p>
  <input type="submit" value="Ajouter">
</fieldset>
</form>
</section>
<script>afficher()</script>
<?php
	$content = ob_get_clean();
	require 'baseLayout.php';
