<?php
$title="Interrogation de  CARNET avec PDO";
ob_start();
// on démarre la bufferisation pour $content
?>

<table class="centre" id="jolie">
<tr> <td> Nom </td> <td> Prénom </td></tr>
  <?php foreach ($amis as $ami): ?>
	<tr>
	<td>
    <a href="controleur.php?action=detail&id=<?php echo $ami['ID']; ?>" >
      <?php echo $ami['NOM']; ?>
  </a></td>
	<td><?php echo $ami['PRENOM'] ?></td>
	</tr>
  <?php endforeach ?>
</table>

<?php
	$content = ob_get_clean();
	require 'baseLayout.php';
