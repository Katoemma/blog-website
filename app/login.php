<?php
 include 'controllers/users.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 ">
  <div class="flex items-center justify-center min-h-screen">
    <div class="max-w-md w-full p-6 bg-white rounded-md shadow-md">
      <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

        <!-- error message -->
        <?php include 'helpers/formErrors.php' ?>

      <form action="login.php" method="POST">
        <div class="mb-4">
          <label for="email" class="block font-medium text-gray-700">Email</label>
          <input id="email" type="email" name="email" value="<?php echo $email ?>" placeholder="Enter your email" class="bg-gray-200 mt-1 px-4 py-2 w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>
        <div class="mb-4">
          <label for="password" class="block font-medium text-gray-700">Password</label>
          <input id="password" type="password" name="password" value="<?php echo $password ?>" placeholder="Enter your password" class="bg-gray-200 mt-1 px-4 py-2 w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>
        <div class="mt-6">
          <button type="submit" name="login-btn" class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-md shadow-md">Login</button>
        </div>
      </form>
      <div class="mt-8 text-center">
        <p class="text-gray-600">Don't have an account? <a href="register.php" class="text-indigo-600 hover:text-indigo-500 font-medium">Sign Up</a></p>
      </div>
    </div>
  </div>
</body>
</html>

