<!-- header -->
<?php include '../../controllers/users.php';?>
<?php include 'dashIncludes/dashHeader.php'?>

<?php include '../../include/messages.php'?>

<!-- page contents start here! -->
<?php include '../../helpers/formErrors.php' ?>

<div class="md:w-1/2 container mx-auto px-4" id="users">
  <h2 class="text-2xl font-semibold mt-6">Manage Users</h2>

  <button type="button" onclick="oped()" class="bg-blue-500 text-white mt-2 py-2 px-4 rounded">Add User</button>

  <!-- Users Table -->
  <div class="mt-6 overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-300">
      <thead>
        <tr>
          <th class="py-2 px-4 border-b">S/N</th>
          <th class="py-2 px-4 border-b">Name</th>
          <th class="py-2 px-4 border-b">Email</th>
          <th class="py-2 px-4 border-b">Role</th>
          <th class="py-2 px-4 border-b">Joined</th>
          <th class="py-2 px-4 border-b">Actions</th>
        </tr>
      </thead>
      <tbody>
        
      <?php foreach ($users as $key => $user):?>
        <tr>
          <td class="py-3 px-4 border-b"><?php echo $key + 1?></td>
          <td class="py-3 px-4 border-b"><?php echo $user['username']?></td>
          <td class="py-3 px-4 border-b"><?php echo $user['email']?></td>
          <?php if($user['admin']===1):?>
            <?php echo  '<td class="py-3 px-4 border-b">Admin</td>' ?>
          <?php else: ?>
           <?php echo '<td class="py-3 px-4 border-b">Editor</td>' ?>
          <?php endif; ?>
          <td class="py-3 px-4 border-b"><?php echo $user['created_at']?></td>
          <td class="py-3 px-4 border-b">
            <a href="edit_user.php?id=<?php echo $user['id']?>" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
            <a href="users_dashboard.php?delete_id=<?php echo $user['id']?>" class="text-red-500 hover:text-red-700">Delete</a>
          </td>
        </tr>
      <?php endforeach;?>

      </tbody>
    </table>
  </div>
</div>

<!-- Add New User Form -->
<div class="hidden mt-6 md:w-1/2 container mx-auto px-4" id="addy">
  <h3 class="text-lg font-semibold mb-2">Add New User</h3>
  

  <form id="addUserForm" action="users_dashboard.php" class="bg-white rounded p-4 border border-gray-300" method="POST">
    <div class="mb-4">
      <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
      <input type="text" name="username" value="<?php echo $username ?>" class="w-full px-3 py-2 border border-gray-300 rounded" placeholder="Enter name">
    </div>
    <div class="mb-4">
      <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
      <input type="email" name="email" value="<?php echo $email ?>" class="w-full px-3 py-2 border border-gray-300 rounded" placeholder="Enter email">
    </div>
    <div class="mb-4">
      <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
      <input type="password" name="password" value="<?php echo $password ?>" class="w-full px-3 py-2 border border-gray-300 rounded" placeholder="Enter email">
    </div>
    <div class="mb-4">
      <label for="password" class="block text-gray-700 font-semibold mb-2">Confirm Password</label>
      <input type="password" name="confirm_password" value="<?php echo $passwordcof ?>" class="w-full px-3 py-2 border border-gray-300 rounded" placeholder="Enter email">
    </div>
    <div class="flex items-center">
        <?php if(isset($admin) && $admin == 1):?>
            <input checked  type="checkbox" name="admin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="admin" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Admin</label>
        <?php else: ?>
            <input  type="checkbox" name="admin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="admin" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Admin</label>
        <?php endif;?>   
    </div>
    <div class="flex gap-4 justify-end">
      <button type="submit" name="add-btn" class="bg-blue-500 text-white py-2 px-4 rounded">Add User</button>
      <button type="button" onclick="clode()" class="bg-red-700 text-white py-2 px-4 rounded">Cancel</button>
    </div>
  </form>
</div>



<script>
function oped(){
  document.getElementById("addy").style.display = 'block';
  document.getElementById("users").style.display = 'none';
}
function clode(){
  document.getElementById("addy").style.display = 'none';
  document.getElementById("users").style.display = 'block';
}
</script>
</body>
</html>