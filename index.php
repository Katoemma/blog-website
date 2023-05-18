<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Essay Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>
<body>
<nav class="bg-gray-800">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex">
        <div class="flex-shrink-0 flex items-center">
          <a href="/" class="text-white text-lg font-semibold">Essay Blog</a>
        </div>
        <div class="hidden sm:-my-px sm:ml-6 sm:flex">
          <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 pt-6 rounded-md text-sm font-medium">Home</a>
          <a href="/services" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 pt-6 rounded-md text-sm font-medium">Services</a>
          <a href="/about" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 pt-6 rounded-md text-sm font-medium">About Us</a>
        </div>
      </div>
      <div class="hidden sm:flex sm:items-center sm:ml-6">
        <div class="ml-3 relative group">
          <div>
            <button type="button" class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="avatar.jpg" alt="User Avatar">
              <span class="ml-2 text-white font-medium">John Doe</span>
              <svg class="ml-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 12a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
          <div class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 group-hover:block" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Dashboard</a>
            <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Logout</a>
          </div>
        </div>
      </div>
      <!-- Hamburger icon for mobile -->
      <div class="flex sm:hidden">
        <button type="button" class="text-gray-300 hover:text-white focus:outline-none focus:text-white" aria-expanded="false" aria-controls="mobile-menu">
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>
  <!-- Mobile menu -->
  <div class="hidden sm:hidden" id="mobile-menu">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
      <a href="/services" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Services</a>
      <a href="/about" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About Us</a>
    </div>
  </div>
</nav>

<!-- hero section -->
<div class="bg-gray-900 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h2 class="text-3xl font-semibold text-white mb-8">Trending Posts</h2>
    

     <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="pic.png" alt="Card 3" class="w-full">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">A new webite is been Launched</h3>
                    <p class="text-gray-600 mb-2">Author: James Johnson</p>
                    <p class="text-gray-600">Date: May 16, 2023</p>
                </div>
            </div>
      </div>
      <div class="swiper-slide">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="pic.png" alt="Card 3" class="w-full">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">A new webite is been Launched</h3>
                    <p class="text-gray-600 mb-2">Author: James Johnson</p>
                    <p class="text-gray-600">Date: May 16, 2023</p>
                </div>
            </div>
      </div>
      <div class="swiper-slide">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="pic.png" alt="Card 3" class="w-full">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">A new webite is been Launched</h3>
                    <p class="text-gray-600 mb-2">Author: James Johnson</p>
                    <p class="text-gray-600">Date: May 16, 2023</p>
                </div>
            </div>
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
  </div>
</div>




<script>
    // Add this code after the HTML code

// Initialize Swiper
var swiper = new Swiper('.mySwiper', {
  slidesPerView: 1,
  centeredSlides: true,
  spaceBetween: 30,
  breakpoints: {
    640: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    }
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</body>
</html>