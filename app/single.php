<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="sticky top-0 bg-gray-800">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex">
        <div class="flex-shrink-0 flex items-center">
          <a href="index.php" class="text-white text-lg font-semibold">Essay Blog</a>
        </div>
        <div class="hidden sm:-my-px sm:ml-6 sm:flex">
          <a href="index.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 pt-6 rounded-md text-sm font-medium">Home</a>
          <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 pt-6 rounded-md text-sm font-medium">Services</a>
          <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 pt-6 rounded-md text-sm font-medium">About Us</a>
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

<!-- main -->
<div class="flex flex-col bg-gray-200 lg:flex-row lg:py-8 lg:px-36">
    <div class="lg:w-2/3  p-4 bg-white">
        <h class="text-xl font-bold">title</h> 
        <p class=" w-2/3">If you're looking for an alternative to Swiper.js, a popular JavaScript library for creating touch-enabled sliders and carousels, there are several other frameworks and libraries available that provide similar functionality. Here are a few options you can consider:

            Slick: Slick is a feature-rich carousel library that offers a wide range of customization options. It supports responsive layouts, lazy loading of images, and touch/swipe gestures. It's easy to use and has good documentation.

            Glide.js: Glide.js is a lightweight and flexible carousel library that focuses on performance. It provides smooth transitions and supports touch, keyboard, and mouse navigation. It's designed to be customizable and has a modular architecture.

            Flickity: Flickity is a touch-enabled gallery and slider library that offers a variety of transition effects. It's responsive by default, allows for drag and flick gestures, and has a simple API for easy integration. It also supports images, videos, and other types of content.

            Owl Carousel: Owl Carousel is a responsive and touch-friendly carousel library that supports both single and multiple item layouts. It provides options for auto-play, navigation buttons, and pagination. It has a wide range of configuration settings and is actively maintained.

            Splide: Splide is a lightweight and flexible slider library that focuses on performance and accessibility. It supports both horizontal and vertical sliders, has a minimalistic design, and provides options for navigation arrows, pagination, and autoplay.

            These frameworks offer similar functionality to Swiper.js and are widely used in web development. Depending on your specific requirements and preferences, you can choose the one that best suits your needs. Remember to review their documentation, features, and community support to ensure they align with your project goals.
        </p> 

    </div>
  <div class="lg:w-1/3 flex flex-col">
    <div class="bg-gray-200 p-4">Second div</div>
    <div class="bg-gray-200 p-4">Third div</div>
  </div>
</div>



<!-- footer -->
<footer class="bg-gray-900 text-white py-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <!-- Social Media Icons -->
      <div>
        <h4 class="text-xl font-semibold mb-4">Follow Us</h4>
        <ul class="flex space-x-4">
          <li><a href="#" class="text-white hover:text-gray-400"><i class="fa fa-facebook-f"></i></a></li>
          <li><a href="#" class="text-white hover:text-gray-400"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#" class="text-white hover:text-gray-400"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#" class="text-white hover:text-gray-400"><i class="fa fa-linkedin-in"></i></a></li>
        </ul>
      </div>

      <!-- Send Message Form -->
      <div>
        <h4 class="text-xl font-semibold mb-4">Send Us a Message</h4>
        <form class="flex flex-col space-y-4">
          <input type="text" placeholder="Your Name" class="border border-gray-400 rounded-lg px-4 py-2 focus:outline-none focus:border-gray-500">
          <input type="email" placeholder="Your Email" class="border border-gray-400 rounded-lg px-4 py-2 focus:outline-none focus:border-gray-500">
          <textarea placeholder="Your Message" class="border border-gray-400 rounded-lg px-4 py-2 focus:outline-none focus:border-gray-500"></textarea>
          <button type="submit" class="bg-blue-500 text-white rounded-lg px-4 py-2">Send Message</button>
        </form>
      </div>

      <!-- Navigation Links -->
      <div>
        <h4 class="text-xl font-semibold mb-4">Navigation</h4>
        <ul class="space-y-2">
          <li><a href="#" class="text-white hover:text-gray-400">Home</a></li>
          <li><a href="#" class="text-white hover:text-gray-400">About</a></li>
          <li><a href="#" class="text-white hover:text-gray-400">Services</a></li>
          <li><a href="#" class="text-white hover:text-gray-400">Blog</a></li>
          <li><a href="#" class="text-white hover:text-gray-400">Contact</a></li>
        </ul>
      </div>
    </div>
    <div class="text-center mt-8">
      <p>&copy; 2023 Your Website. All rights reserved.</p>
    </div>
  </div>
</footer>
</body>
</html>