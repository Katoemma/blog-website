<?php
 include 'controllers/users.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">



  <div class="flex items-center justify-center min-h-screen w-full md:fixed">
    <div class="max-w-md w-full p-6 bg-white rounded-md shadow-md">
      <h2 class="text-2xl font-bold text-center mb-6">Sign Up</h2>

      <!-- error message -->
      <?php include 'helpers/formErrors.php' ?>

      <form action="register.php" method="POST">
        <div class="mb-4">
          <label for="username" class="block font-medium text-gray-700">Username</label>
          <input id="username" type="text" name="username" placeholder="Enter your username" value="<?php echo $username ?>" class="bg-gray-200 mt-1 px-4 py-2 w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
          <label for="email" class="block font-medium text-gray-700">Email</label>
          <input id="email" type="email" name="email" placeholder="Enter your email" value="<?php echo $email ?>" class="bg-gray-200 mt-1 px-4 py-2 w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
          <label for="password" class="block font-medium text-gray-700">Password</label>
          <input id="password" type="password" name="password" placeholder="Enter your password" value="<?php echo $password ?>"  class="bg-gray-200 mt-1 px-4 py-2 w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
          <label for="confirm_password" class="block font-medium text-gray-700">Confirm Password</label>
          <input id="confirm_password" type="password" name="confirm_password" placeholder="Confirm your password" value="<?php echo $passwordcof ?>" class="bg-gray-200 mt-1 px-4 py-2 w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mt-6">
          <button type="submit" name="submit-btn" class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-md shadow-md">Sign Up</button>
        </div>
      </form>
      <div class="mt-8 text-center">
        <p class="text-gray-600">Already have an account? <a href="login.php" class="text-indigo-600 hover:text-indigo-500 font-medium">Login</a></p>
      </div>
    </div>
  </div>
</body>
</html>

