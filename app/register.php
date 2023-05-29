<?php
 include 'controllers/users.php';

?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up Page</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex flex-col items-center w-full">
        <img src="../assets/images/logo.png" class="w-24 h-24" alt="">
    </div>

  <div class="flex md:items-center md:justify-center ">
    <div class="md:max-w-md w-full p-6 bg-white rounded-md shadow-md">
      <h2 class="md:text-2xl font-bold text-center md:mb-6">Sign Up</h2>
      <form action="register.php" method="post" class="w-full">
        <div class="mb-4">
          <label for="name" class="block font-medium text-gray-700">UserName</label>
          <input id="name" type="text" name="user-name" class="bg-gray-200 mt-1 px-4 py-2 w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>
        <div class="mb-4">
          <label for="email" class="block font-medium text-gray-700">Email</label>
          <input id="email" type="email" name="email" class="bg-gray-200 mt-1 px-4 py-2 w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>
        <div class="mb-4">
          <label for="password" class="block font-medium text-gray-700">Password</label>
          <input id="password" type="password" name="pass" class="bg-gray-200 mt-1 px-4 py-2 w-full border-gray-900 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>
        <div class="mb-4">
          <label for="confirm_password" class="block font-medium text-gray-700">Confirm Password</label>
          <input id="confirm_password" type="password" name="confirm-pass" class="bg-gray-200 mt-1 px-4 py-2 w-full border-gray-600 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
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
