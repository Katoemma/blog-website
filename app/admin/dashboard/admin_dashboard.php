<?php

?>
<!-- header -->
<?php include 'dashIncludes/dashHeader.php'?>

<!-- page conttents start here! -->

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