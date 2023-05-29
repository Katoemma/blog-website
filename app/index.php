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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="sticky top-0 bg-gray-800">
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
    <div class="bg-gray-200 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h2 class="text-3xl font-semibold text-black mb-8">Trending Posts</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="pic.png" alt="Card 1" class="w-full">
                <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Title of Card 1</h3>
                <p class="text-gray-600 mb-2">Author: John Doe</p>
                <p class="text-gray-600">Date: May 18, 2023</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="pic.png" alt="Card 2" class="w-full">
                <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Title of Card 2</h3>
                <p class="text-gray-600 mb-2">Author: Jane Smith</p>
                <p class="text-gray-600">Date: May 17, 2023</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="pic.png" alt="Card 3" class="w-full">
                <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Title of Card 3</h3>
                <p class="text-gray-600 mb-2">Author: James Johnson</p>
                <p class="text-gray-600">Date: May 16, 2023</p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="pic.png" alt="Card 4" class="w-full">
                <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Title of Card 4</h3>
                <p class="text-gray-600 mb-2">Author: Emily Brown</p>
                <p class="text-gray-600">Date: May 15, 2023</p>
                </div>
            </div>
            <!-- Add more cards as needed -->
            </div>
        </div>
    </div>

    <!-- recent posts section -->
    <div class="bg-gray-100 py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
      <!-- Posts Div -->
      <div class="lg:col-span-3">
        <!-- Post 1 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <div class="flex">
            <img src="pic.png" alt="Post 1" class="w-1/3">
            <div class="p-4 flex flex-col justify-between">
              <div>
                <h3 class="text-xl font-semibold mb-2">Title of Post 1</h3>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in nisi eu nisi sodales fermentum.</p>
                <p class="text-gray-600 mb-2">Author: John Doe</p>
                <p class="text-gray-600">Date: May 18, 2023</p>
              </div>
              <a href="#" class="btn px-6 py-2 w-32 bg-black text-white font-semibold rounded">Read More</a>
            </div>
          </div>
        </div>

        <!-- Post 2 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden mt-6">
          <div class="flex">
            <img src="pic.png" alt="Post 2" class="w-1/3">
            <div class="p-4 flex flex-col justify-between">
              <div>
                <h3 class="text-xl font-semibold mb-2">Title of Post 2</h3>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in nisi eu nisi sodales fermentum.</p>
                <p class="text-gray-600 mb-2">Author: Jane Smith</p>
                <p class="text-gray-600">Date: May 17, 2023</p>
              </div>
              <a href="#" class="text-blue-500 font-semibold">Read More</a>
            </div>
          </div>
        </div>

        <!-- Add more posts as needed -->
      </div>

      <!-- Search Bar and Topics Div -->
      <div class="bg-white shadow-lg rounded-lg p-6">
        <h3 class="text-xl font-semibold mb-4">Search</h3>
        <input type="text" placeholder="Search..." class="border border-gray-300 rounded-lg p-2 mb-4">
        <h3 class="text-xl font-semibold mb-4">Topics</h3>
        <ul>
          <li><a href="#" class="text-blue-500">Topic 1</a></li>
          <li><a href="#" class="text-blue-500">Topic 2</a></li>
          <li><a href="#" class="text-blue-500">Topic 3</a></li>
          <!-- Add more topics as needed -->
        </ul>
      </div>
    </div>
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