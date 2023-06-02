<?php include '../../controllers/users.php'?>
<?php include 'dashIncludes/dashHeader.php'?>

<!-- Edit User Form (Hidden by default) -->
<div class="mt-6 md:w-1/2 container mx-auto px-4">
    <h3 class="text-lg font-semibold mb-2">Edit User</h3>
    <?php include '../../helpers/formErrors.php' ?>

    <form action="edit_user.php" method="post" class="bg-white rounded p-4 border border-gray-300">

        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
            <input type="text" name="username" value="<?php echo $username ?>" class="w-full px-3 py-2 border border-gray-300 rounded" placeholder="Enter name">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
            <input type="email" name="email" value="<?php echo $email ?>" class="w-full px-3 py-2 border border-gray-300 rounded" placeholder="Enter email">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 font-semibold mb-2">New Password</label>
            <input type="password" name="password" value="<?php echo $password ?>" class="w-full px-3 py-2 border border-gray-300 rounded" placeholder="Enter Password">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 font-semibold mb-2">Confirm Password</label>
            <input type="password" name="confirm_password" value="<?php echo $passwordcof ?>" class="w-full px-3 py-2 border border-gray-300 rounded" placeholder="Confirm Password">
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
        <div class="flex justify-end">
            <button type="submit" name="update-user" class="bg-blue-500 text-white py-2 px-4 rounded">Update User</button>
            <a href="users_dashboard.php" class="bg-red-500 text-white py-2 px-4 rounded ml-2" onclick="cancelEditUser()">Cancel</a>
        </div>
    </form>
</div>

<!-- Add the missing closing </body> and </html> tags -->
</body>
</html>
