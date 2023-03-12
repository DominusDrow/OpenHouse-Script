
<?php 
session_start();
include("./includes/header.php");
$_SESSION['house url'] = '../src/house1.jpg';
 ?>

	<div class="container">
		<h1 class="text-center my-4">House 1 Details</h1>
		<div class="row">
			<!-- Imagen de la casa -->
			<div class="col-md-6 mb-4">
				<img src="./src/house1.jpg" class="img-fluid" alt="Casa">
			</div>
			<!-- Información de la casa -->
			<div class="col-md-6 mb-4">
				<h2>Beautiful house with a good view</h2>
				<p class="lead">$150,000</p>
				<p>This is a beautiful house with an incredible view. It has 3 bedrooms, 2 bathrooms and a spacious living room. The house also has a swimming pool and a well-kept garden. The location is perfect to enjoy the sun and the beach.</p>
			</div>
		</div>
	</div>


<?php include("./includes/forms/openhouse.php"); ?>
<?php include("./includes/forms/lightReg.php"); ?>

<script>
	const parts = window.location.href.split('/');
	const newUrl = parts.slice(0, 5).join('/');

	const scriptForm = document.createElement('script');
	const scriptConn = document.createElement('script');

	scriptForm.src = newUrl + '/formsValidation.js';
	scriptConn.src = newUrl + '/connectDB.js';

	document.body.appendChild(scriptForm);
	//document.body.appendChild(scriptConn);

</script>


<?php include("./includes/footer.php"); ?>


