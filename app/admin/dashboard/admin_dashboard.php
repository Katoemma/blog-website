<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="bg-gray-800">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <a href="#" class="text-white font-bold text-lg">Admin Dashboard</a>
        </div>
        
        <!-- Hamburger Menu Icon -->
        <div class="flex md:hidden">
            <button type="button" class="text-gray-300 hover:text-white focus:outline-none focus:text-white" aria-label="Toggle menu">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            </button>
        </div>
        
        <!-- Navigation links -->
        <div class="hidden md:flex md:items-center md:space-x-4">
            <ul class="flex items-center space-x-4">
                <li>
                    <a href="dashboard.php" class="text-gray-300 hover:text-white px-3 py-2 rounded-md">Dashboard</a>
                </li>
                <li>
                    <a href="post_dashboard.php" class="text-gray-300 hover:text-white px-3 py-2 rounded-md">Posts</a>
                </li>
                <li>
                    <a href="comments_dashboard.php" class="text-gray-300 hover:text-white px-3 py-2 rounded-md">Comments</a>
                </li>
                <li>
                    <a href="users_dashboard.php" class="text-gray-300 hover:text-white px-3 py-2 rounded-md">Users</a>
                </li>
            </ul>
            
            <!-- User profile dropdown -->
            <div class="ml-4 relative group">
                <div>
                    <button class="flex items-center text-gray-300 hover:text-white">
                    <span class="mr-1">Admin User</span>
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M10 2a8 8 0 100 16 8 8 0 000-16zm0 14a6 6 0 110-12 6 6 0 010 12z" clip-rule="evenodd" />
                    </svg>
                    </button>
                </div>
                
                <!-- Dropdown menu -->
                <div class="group-hover:block origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden">
                    <div class="py-1">
                    <a href="admin_dashboard.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                    <a href="admin_dashboard.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                    <a href="../index.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">public page</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </nav>

    <div class="container mx-auto px-4">
  <h2 class="text-2xl font-semibold mt-6">Profile</h2>
  
  <!-- User Details -->
  <div class="mt-6">
    <div class="flex items-center mb-4">
      <img class="w-12 h-12 rounded-full" src="profile-image.jpg" alt="Profile Picture">
      <div class="ml-4">
        <h3 class="text-xl font-semibold">John Doe</h3>
        <p class="text-gray-500">john@example.com</p>
      </div>
    </div>
    
    <div class="bg-white border border-gray-300 p-4 rounded">
      <h4 class="text-lg font-semibold mb-4">User Information</h4>
      
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
        <input id="username" type="text" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500" value="johndoe" disabled>
      </div>
      
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="bio">Bio</label>
        <textarea id="bio" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500" rows="4" disabled>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pharetra pellentesque lacus vitae aliquet.</textarea>
      </div>
      
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="website">Website</label>
        <input id="website" type="text" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500" value="www.example.com" disabled>
      </div>
      
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Edit Profile</button>
    </div>
  </div>
</div>



<div class="container mx-auto px-4">
  <h2 class="text-2xl font-semibold mt-6">Settings</h2>
  
  <!-- Settings Form -->
  <div class="mt-6">
    <div class="bg-white border border-gray-300 p-4 rounded">
      <h4 class="text-lg font-semibold mb-4">Account Settings</h4>
      
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
        <input id="username" type="text" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500" value="johndoe">
      </div>
      
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
        <input id="email" type="email" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500" value="john@example.com">
      </div>
      
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">New Password</label>
        <input id="password" type="password" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
      </div>
      
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">Confirm Password</label>
        <input id="confirm-password" type="password" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
      </div>
      
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Save Changes</button>
    </div>
  </div>
</div>


</body>
</html>