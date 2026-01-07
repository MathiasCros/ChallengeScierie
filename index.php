<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<title>TEST GREEN IT</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

	<?php include "imports/menu.php" ?>

	<main>
		<?php
		include "controleur/initIndex.php";
		?>
	</main>

	<?php
		include "imports/footer.php";
	?>

</body>
</html>