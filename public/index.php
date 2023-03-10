
<?php
if(strpos($_SERVER['REQUEST_URI'], "/OpenHouse") !== false) {
    // Si la cadena "/OpenHouse" se encuentra en la URL actual, redirigir al formulario
    header("Location: ./form.php");
    exit;
} else {
	include("./includes/header.php");
?>

	<div class="container">
		<div class="col-md-12">
      <h1 class="text-center">House Catalog</h1>
    </div>
		<div class="row">
			<!-- Contenedor de cada casa -->
			<div class="col-md-4 mb-4">
				<div class="card">
					<img src="./src/house1.jpg" class="card-img-top" alt="Casa 1">
					<div class="card-body">
						<h5 class="card-title">House 1</h5>
						<p class="card-text">$150,000</p>
						<a href="./house.php" class="btn btn-primary" data-toggle="tab" data-target="#casa1">View More</a>
					</div>
				</div>
			</div>
			<!-- Contenedor de cada casa -->
			<div class="col-md-4 mb-4">
				<div class="card">
					<img src="./src/house2.jpg" class="card-img-top" alt="Casa 2">
					<div class="card-body">
						<h5 class="card-title">House 2</h5>
						<p class="card-text">$250,000</p>
						<a href="./house.php" class="btn btn-primary" data-toggle="tab" data-target="#casa2">View More</a>
					</div>
				</div>
			</div>
			<!-- Contenedor de cada casa -->
			<div class="col-md-4 mb-4">
				<div class="card">
					<img src="./src/house3.jpg.crdownload" class="card-img-top" alt="Casa 3">
					<div class="card-body">
						<h5 class="card-title">House 3</h5>
						<p class="card-text">$300,000</p>
						<a href="./house.php" class="btn btn-primary" data-toggle="tab" data-target="#casa3">View More</a>
					</div>
				</div>
			</div>
		</div>

<?php
	include("./includes/footer.php");
}
?>




