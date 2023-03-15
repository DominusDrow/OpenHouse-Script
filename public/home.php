
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


<div class="bg-gray-700 h-12 flex items-center justify-between px-6 lg:px-16">
  <p class="text-white font-medium text-sm">example@example.com</p>
  <button class="text-white font-medium text-sm rounded-lg bg-blue-600 px-4 py-2 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Login</button>
</div>

<nav class="bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-20">
      <div class="flex-shrink-0 flex items-center">
        <a href="home.php">
          <img class="h-12 w-auto" src="./outdoorealestate/src/logoMain.png" alt="Logo">
        </a>
        <img class="h-12 w-auto" src="./outdoorealestate/src/logoSecond.png" alt="Logo">
      </div>
      
      <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
        <div class="flex-shrink-0 flex items-center hover:bg-gray-700 rounded-md">
          <a href="home.php" class="text-blue-800  hover:text-white px-3 py-2  text-lg font-medium">Home</a>
        </div>
        <div class="flex-shrink-0 flex items-center hover:bg-gray-700 rounded-md">
          <a href="./outdoorealestate/search.php" class="text-blue-800  hover:text-white px-3 py-2  text-lg font-medium">Search</a>
        </div>
        <div class="flex-shrink-0 flex items-center hover:bg-gray-700 rounded-md">
          <a href="./outdoorealestate/about.php" class="text-blue-800  hover:text-white px-3 py-2  text-lg font-medium">About</a>
        </div>
        <div class="flex-shrink-0 flex items-center hover:bg-gray-700 rounded-md">
          <a href="./outdoorealestate/buying.php" class="text-blue-800  hover:text-white px-3 py-2  text-lg font-medium">Buying</a>
        </div>
        <div class="flex-shrink-0 flex items-center hover:bg-gray-700 rounded-md">
          <a href="./outdoorealestate/selling.php" class="text-blue-800  hover:text-white px-3 py-2  text-lg font-medium">Selling</a>
        </div>
        <div class="flex-shrink-0 flex items-center hover:bg-gray-700 rounded-md">
          <a href="./outdoorealestate/contact.php" class="text-blue-800  hover:text-white px-3 py-2  text-lg font-medium">Contact</a>
        </div>
      </div>

      <div class="-mr-2 flex items-center sm:hidden">
        <!-- Mobile menu button -->
        <button type="button" class="bg-white inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!-- Icon when menu is closed. -->
          <!--
            Heroicon name: outline/menu

            Menu open: "hidden", Menu closed: "block"
          -->

         <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
         </svg>
          <!-- Icon when menu is open. -->
          <!--
            Heroicon name: outline/x

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!--
    Mobile menu, toggle classes based on menu state.

    Open: "block", closed: "hidden"
  -->
  <div class="hidden sm:hidden mobile-menu">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <a href="#" class="text-blue-800 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
      <a href="#" class="text-blue-800 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Search</a>
      <a href="#" class="text-blue-800 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About</a>
      <a href="#" class="text-blue-800 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Buying</a>
      <a href="#" class="text-blue-800 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Selling</a>
      <a href="#" class="text-blue-800 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact</a>
    </div>
  </div>
</nav>



<div class="bg-cover bg-center h-50" style="background-image: url('./outdoorealestate/src/imgBackgroud.jpg');">
  <div class="flex flex-col justify-center items-center h-full text-white">
    <h1 class="text-3xl lg:text-4xl font-bold mt-20">Wes & Keri Reidhead - </h1>
    <h1 class="text-3xl lg:text-4xl font-bold">OutdooRealestate@West USA Realty</h1>
    <h2 class="text-lg lg:text-xl font-medium mb-10 mt-3">Find Your Dream Home Now</h2>
    <div class="w-full max-w-sm">
      <form>
        <div class="flex items-center border-b border-b-2 border-gray-300 py-2">
          <input class="appearance-none bg-transparent border-none w-full text-white mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Search for address, city, country or zipcode">
        </div>
        <div class="text-center">
          <button class="flex-shrink-0 bg-transparent text-white py-1 px-2 rounded border mt-10 mb-20 hover:bg-gray-500" type="button">
            Advanced Search
          </button>
        </div>
      </form>
    </div>
  </div>
</div>




<div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4 rounded-lg shadow-lg ">
  <!-- Primera columna -->
  <div class="flex flex-col justify-center items-center mt-20 ml-10">
    <div class="relative rounded-lg overflow-hidden shadow-xl">
      <div class="h-50 pt-p56/25 mb-4">

<iframe width="500" height="270" src="https://www.youtube.com/embed/__yODy0AjiY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>      </div>
    </div>
    <h5 class="text-lg font-bold text-gray-800 mt-4 ">Specialties:</h5>
    <div class="text-center">
      <p class="text-sm  text-gray-800 mt-1 mb-4">Buying, Selling, Land, Tiny Homes, Park Models, Cabins, Luxury Homes, RV Lots, New Construction.</p>
    </div>
   <a href="./outdoorealestate/about.php" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full shadow-lg">Read More</a>
  </div>

  <!-- Segunda columna -->
  <div class="flex flex-col justify-center  m-10">
    <h2 class="text-3xl font-bold text-gray-800 mb-2">Wes & Keri Reidhead - OutdooRealestate@West USA Realty</h2>
    <hr class="border-b-2 border-gray-400 my-4 w-1/3">
    <p class="text-lg text-gray-600 mb-4">We live in the White Mountains and love it! Our past sales include many people from the area and from out of town or state. My team and I can help you with inside knowledge with selling or buying a home, building or looking for land.</p>
    <p class="text-lg text-gray-600 mb-4">We also have great resources for land financing and home selling, building or buying. Call us today to find out how well the market is doing, rates and what is available in the area you are looking for! We look forward to talking with you.</p>
  </div>
</div>






<div class="grid grid-cols-2 sm:grid-cols-3 grid-cols-3 gap-4 mt-10">
  <!-- Tarjeta 1 -->
  <div class="bg-white rounded-lg overflow-hidden shadow-md">
    <img class="w-full h-48 object-cover" src="./outdoorealestate/src/house1.jpg" alt="Imagen 1">
    <div class="p-4">
      <h2 class="text-gray-900 font-bold text-lg mb-2">house 1</h2>
      <p class="text-gray-700 text-base">Descripción de la tarjeta 1.</p>
      <p class="mt-2">$99.99</p>
    </div>
  </div>
  
  <!-- Tarjeta 2 -->
  <div class="bg-white rounded-lg overflow-hidden shadow-md">
    <img class="w-full h-48 object-cover" src="./outdoorealestate/src/house2.jpg" alt="Imagen 2">
    <div class="p-4">
      <h2 class="text-gray-900 font-bold text-lg mb-2">house 2</h2>
      <p class="text-gray-700 text-base">Descripción de la tarjeta 2.</p>
      <p class="mt-2">$149.99</p>
    </div>
  </div>
  
  <!-- Tarjeta 3 -->
  <div class="bg-white rounded-lg overflow-hidden shadow-md">
    <img class="w-full h-48 object-cover" src="./outdoorealestate/src/house3.jpg" alt="Imagen 2">
    <div class="p-4">
      <h2 class="text-gray-900 font-bold text-lg mb-2">house 3</h2>
      <p class="text-gray-700 text-base">Descripción de la tarjeta 2.</p>
      <p class="mt-2">$149.99</p>
    </div>
  </div>
</div>
        






<div class="bg-gray-700 h-16 flex items-center justify-between px-6 lg:px-16">
  <p class="text-white font-medium text-xl">Get In Touch With Us</p>
  <button class="text-white font-medium text-sm rounded-lg bg-blue-600 px-4 py-2 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Contact Us</button>
</div>


<footer class="bg-gray-800 text-gray-400 py-8">
  <div class="container mx-auto flex flex-wrap">
    <!-- Columna 1 -->
    <div class="w-full md:w-1/3 text-center md:text-left">
      <img class="mx-auto md:mx-0 h-16" src="./outdoorealestate/src/logoMain.png" alt="Logo">
    </div>

    <!-- Columna 2 -->
    <div class="w-full md:w-1/3 text-center md:text-left">
      <h5 class="uppercase mb-2 font-bold">Quick Links</h5>
      <ul class="mb-4">
        <li><a href="home.php" class="hover:text-gray-100">home</a></li>
        <li><a href="./outdoorealestate/about.php" class="hover:text-gray-100">About</a></li>
        <li><a href="./outdoorealestate/buying.php" class="hover:text-gray-100">Buying</a></li>
        <li><a href="./outdoorealestate/selling.php" class="hover:text-gray-100">Selling</a></li>
      </ul>
    </div>

    <!-- Columna 3 -->
    <div class="w-full md:w-1/3 text-center md:text-left">
      <h5 class="uppercase mb-2 font-bold">Locate Us</h5>
      <p class="mb-4">960 E Deuce Of Clubs, Show Low AZ 85901</p>
      <p class="mb-4">Ciudad, Estado 12345</p>
      <p class="mb-4">(928) 322-2251 kerireidhead@gmail.com</p>
    </div>
  </div>
</footer>



</body>
</html>



