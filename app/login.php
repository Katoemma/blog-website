<?php
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
  </style>
</head>
<body class="bg-gray-100 overflow-hidden">
 <div class="flex flex-col items-center w-full">
    <img src="../assets/images/logo.png" class="w-24 h-24" alt="">
 </div>
  <div class="flex items-center justify-center min-h-screen">
    
    <div class="max-w-md w-full p-6 bg-white rounded-md shadow-md">
      <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
      <form>
        <div class="mb-4">
          <label for="email" class="block font-medium text-gray-700">Email</label>
          <input id="email" type="email" class="mt-1 px-4 py-2 w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>
        <div class="mb-4">
          <label for="password" class="block font-medium text-gray-700">Password</label>
          <input id="password" type="password" class="mt-1 px-4 py-2 w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>
        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember_me" type="checkbox" class="mr-2">
            <label for="remember_me" class="font-medium text-gray-700">Remember me</label>
          </div>
          <div class="text-sm">
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot password?</a>
          </div>
        </div>
        <div class="mt-6">
          <button type="submit" class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-md shadow-md">Login</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
