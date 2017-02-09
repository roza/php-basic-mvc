<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>
	<?php echo $title ?>
	</title>
	<link rel="stylesheet" href="static/tabstyle.css" />
	<link rel="stylesheet" href="static/fcss3.css" />
	<script>
	function afficher(){
		section = document.getElementById('ajout');
		bouton  = document.getElementById('addbutt');
		if (section.hidden){
			bouton.value='Masquer';
		}
		else{
			bouton.value='Ajouter';
		}
		section.hidden=!section.hidden;
	}
	</script>
</head>
<body>
	<header>
		<h1>Mes contacts</h1>
	</header>
	<article>
		<?php echo $content ?>
	</article>
	<?php if (!empty($message)) { ?>
	<p class="encadre GrandeInitiale">
	  <?php echo $message; ?>
	</p>
	<?php } ?>
	<footer>
		<h4>Copyright Les Pros du Web 2017</h4>
	</footer>
</body>
</html>
