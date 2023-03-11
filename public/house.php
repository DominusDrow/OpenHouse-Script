
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

<?php include("./includes/forms/lightReg.php"); ?>


<script>
let $modal = document.getElementById("myModal");
let $modalLightReg = document.getElementById("lightReg");
let $modalClose = document.querySelectorAll(".modalClose");
let $startOpenHouse = document.getElementById("startOpenHouse");
let $checkIn = document.getElementById("checkIn");

document.addEventListener("DOMContentLoaded", () => {

  if (window.location.href.indexOf("/openhouse") > -1) {
    document.body.classList.add("bg-dark","opacity-85");

    $modal.classList.add("show");
    $modal.style.display = "block";
  }
});

document.addEventListener("click", (e) => {

  if([...$modalClose].includes(e.target)){
    document.body.classList.remove("bg-dark","opacity-85");
    $modal.style.display = "none";
		$modalLightReg.style.display = "none";
    window.history.back();
  }

	if(e.target === $startOpenHouse){
    $modalLightReg.classList.add("show");
    $modalLightReg.style.display = "block";
    $modal.style.display = "none";
	}

	if(e.target === $checkIn){
    document.body.classList.remove("bg-dark","opacity-85");
		$modalLightReg.style.display = "none";
		alert("reservation made");
    window.history.back();
	}

});
</script>


<script src="../connectDB.js"></script>


<?php include("./includes/footer.php"); ?>


