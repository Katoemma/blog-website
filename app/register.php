<?php


?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up Page</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
  
  <style>
    body {
      font-family: Arial, sans-serif;
    }
  </style>
</head>
<body class="bg-gray-100">
    <div class="flex flex-col items-center w-full">
        <img src="../assets/images/logo.png" class="w-24 h-24" alt="">
    </div>

  <div class="flex items-center justify-center min-h-screen">
    <div class="max-w-md w-full p-6 bg-white rounded-md shadow-md">
      <h2 class="text-2xl font-bold text-center mb-6">Sign Up</h2>
      <form>
        <div class="mb-4">
          <label for="name" class="block font-medium text-gray-700">Name</label>
          <input id="name" type="text" class="mt-1 px-4 py-2 w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>
        <div class="mb-4">
          <label for="email" class="block font-medium text-gray-700">Email</label>
          <input id="email" type="email" class="mt-1 px-4 py-2 w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>
        <div class="mb-4">
          <label for="password" class="block font-medium text-gray-700">Password</label>
          <input id="password" type="password" class="mt-1 px-4 py-2 w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>
        <div class="mb-4">
          <label for="confirm_password" class="block font-medium text-gray-700">Confirm Password</label>
          <input id="confirm_password" type="password" class="mt-1 px-4 py-2 w-full border-gray-600 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>
        <div class="mt-6">
          <button type="submit" class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-md shadow-md">Sign Up</button>
        </div>
      </form>
      <div class="mt-8 text-center">
        <p class="text-gray-600">Already have an account? <a href="#" class="text-indigo-600 hover:text-indigo-500 font-medium">Login</a></p>
      </div>
    </div>
  </div>
</body>
</html>
