
<?php include("./includes/header.php") ?>

	<h1>Formulario de OpenHouse</h1>
	<form action="procesar.php" method="POST">
		<!-- Aquí agregas los campos del formulario -->
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" id="nombre">
		<label for="email">Email:</label>
		<input type="email" name="email" id="email">
		<button type="submit">Enviar</button>
	</form>

<?php include("./includes/footer.php"); ?>
