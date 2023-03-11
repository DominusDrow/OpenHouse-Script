
<?php include("./includes/header.php") ?>

	<div class="container">
		<h1 class="text-center my-4">House Details</h1>
		<div class="row">
			<!-- Imagen de la casa -->
			<div class="col-md-6 mb-4">
				<img src="./src/house2.jpg" class="img-fluid" alt="Casa">
			</div>
			<!-- Información de la casa -->
			<div class="col-md-6 mb-4">
				<h2>Beautiful house with a good view</h2>
				<p class="lead">$500,000</p>
				<p>This is a beautiful house with an incredible view. It has 3 bedrooms, 2 bathrooms and a spacious living room. The house also has a swimming pool and a well-kept garden. The location is perfect to enjoy the sun and the beach.</p>
			</div>
		</div>
	</div>


<?php include("./includes/forms/openhouse.php"); ?>


<script>

let $modal = document.getElementById("myModal");
let $modalClose = document.getElementById("modalClose");

document.addEventListener("DOMContentLoaded", () => {

  if (window.location.href.indexOf("/openhouse") > -1) {
    document.body.classList.add("bg-dark","opacity-85");

    $modal.classList.add("show");
    $modal.style.display = "block";
  }
});

document.addEventListener("click", (e) => {

  if(e.target === $modalClose){
    document.body.classList.remove("bg-dark","opacity-85");
    $modal.classList.add("show");
    $modal.style.display = "none";
    window.history.back();
  }


})
</script>

<?php include("./includes/footer.php"); ?>
