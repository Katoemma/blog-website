<?php include '../../database/db.php';?>
<!-- header -->
<?php include 'dashIncludes/dashHeader.php'?>

<!-- page contents start here! -->
<?php include '../../include/messages.php'?>

<div class="container mx-auto px-4">
  <h2 class="text-2xl font-semibold mt-6">Site Settings</h2>

  <!-- Settings Form -->
  <div class="mt-6">
    <div class="bg-white border border-gray-300 p-4 rounded">
      <h4 class="text-lg font-semibold mb-4">Account Settings</h4>
      <?php include '../../helpers/formErrors.php' ?>
      <form action="settings.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="1">
        <!-- -->
        <?php foreach ($settings as $key => $setting):?>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="site-title">Site Title</label>
          <input name="title" type="text" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500" value="<?php echo $setting['title']?>">
        </div>

        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="site-description">Site Description</label>
          <textarea name="description" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500" rows="4"><?php echo $setting['description']?></textarea>
        </div>
        <?php endforeach;?>
          <!--  -->
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="site-logo">Site Logo</label>
          <input name="logo" type="file" accept="image/*">
        </div>

        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="site-favicon">Site Favicon</label>
          <input name="favicon" type="file" accept="image/x-icon">
        </div>

          <button name="change-btn" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Save Changes</button>
        </div>

      </form>
    </div>
      
</div>

</body>
</html>
