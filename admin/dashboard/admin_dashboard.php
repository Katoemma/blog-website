<?php include '../../controllers/users.php';?>

<!-- header -->
<?php include 'dashIncludes/dashHeader.php'?>

<?php
  $adminuser = selectAll('users',['admin'=> 1]);
?>
<!-- page contents start here! -->

<div class="container mx-auto px-4">
  <h2 class="text-2xl font-semibold mt-6">Profile</h2>

  <!-- User Details -->
  <?php foreach ($adminuser as $key => $admin):?>
  <div class="mt-6">
    <div class="flex items-center mb-4">
      <img class="w-12 h-12 rounded-full" src="profile-image.jpg" alt="Profile Picture">
      <div class="ml-4">
        <h3 class="text-xl font-semibold"><?php echo $admin['username']?></h3>
        <p class="text-gray-500"><?php echo $admin['email']?></p>
      </div>
    </div>
    <?php endforeach;?>
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
</body>
</html>
