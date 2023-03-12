let $modal = document.getElementById("myModal");
let $modalLightReg = document.getElementById("lightReg");
let $modalClose = document.querySelectorAll(".modalClose");
let $startOpenHouse = document.getElementById("startOpenHouse");
let $checkIn = document.getElementById("checkIn");


if (window.location.href.indexOf("/openhouse") > -1) {
  document.body.classList.add("bg-dark","opacity-85");

  $modal.classList.add("show");
  $modal.style.display = "block";
}
else if(window.location.href.indexOf("/openlight") > -1) {
  document.body.classList.add("bg-dark","opacity-85");

  $modalLightReg.classList.add("show");
  $modalLightReg.style.display = "block";
}

document.addEventListener("click", (e) => {

  if([...$modalClose].includes(e.target)){
    document.body.classList.remove("bg-dark","opacity-85");
    $modal.style.display = "none";
    $modalLightReg.style.display = "none";
    window.location.replace(window.location.href.replace('/openhouse', ''));
  }

  if(e.target === $startOpenHouse){
    $modal.style.display = "none";
    window.location.replace(window.location.href.replace('/openhouse', '/openlight'));
  }

  if(e.target === $checkIn){
    document.body.classList.remove("bg-dark","opacity-85");
    $modalLightReg.style.display = "none";
    alert("reservation made");
    window.location.replace(window.location.href.replace('/openhouse', ''));
  }

});

