<?php
session_start();
?>
<!DOCTYPE html>

<html lang="fr">

<head>
	<title>TRUC</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<?php include "imports/menu.php" ?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	<main id="container">
	</main>

	<?php
		include "imports/footer.php";
	?>
	<script src="scripts/initListeProduits.js"></script>
</body>

</html>