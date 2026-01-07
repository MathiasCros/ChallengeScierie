<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<title>TEST GREEN IT</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
		integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

	<?php include "menu.php" ?>

	<!-- SLIDER -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<section>
		<?php
		include "includes/slider.php";
		?>
	</section>

	<script type="text/javascript" src="scripts/slider.js"></script>
	<!-- END SLIDER -->

	<!-- load page content -->
	<main>
		<?php
		include "controleur/initIndex.php";
		?>
	</main>

	<?php
		include "footer.php";
	?>

</body>
</html>