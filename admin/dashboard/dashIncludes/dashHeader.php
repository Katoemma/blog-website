<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="bg-red-700">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <a href="../../index.php" class="text-white font-bold text-lg">eassy</a>
        </div>
        
        <!-- Hamburger Menu Icon -->
        <div class="flex md:hidden">
            <button type="button" id="mobileMenuButton" class="text-gray-300 hover:text-white focus:outline-none focus:text-white" aria-label="Toggle menu">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            </button>
        </div>
        
        <!-- Navigation links -->
        <div class="hidden md:flex md:items-center md:space-x-4">
        <ul class="flex items-center space-x-4">
                <li>
                    <a href="dashboard.php" class="text-gray-300 hover:text-white px-3 py-2 rounded-md">Dashboard</a>
                </li>
                <li>
                    <a href="post_dashboard.php" class="text-gray-300 hover:text-white px-3 py-2 rounded-md">Posts</a>
                </li>
                <li>
                    <a href="topics_dashboard.php" class="text-gray-300 hover:text-white px-3 py-2 rounded-md">Topics</a>
                </li>
                <li>
                    <a href="comments_dashboard.php" class="text-gray-300 hover:text-white px-3 py-2 rounded-md">Comments</a>
                </li>
                <li>
                    <a href="users_dashboard.php" class="text-gray-300 hover:text-white px-3 py-2 rounded-md">Users</a>
                </li>
            </ul>
            
            <!-- User profile dropdown -->
            <?php if(isset($_SESSION['id'])):?>
            <div class="ml-4 relative group">
                <div>
                    <button class="flex items-center text-gray-300 hover:text-white">
                    <span class="mr-1"><?php echo $_SESSION['username']; ?></span>
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M10 2a8 8 0 100 16 8 8 0 000-16zm0 14a6 6 0 110-12 6 6 0 010 12z" clip-rule="evenodd" />
                    </svg>
                    </button>
                </div>
            <?php endif; ?>
                
                <!-- Dropdown menu -->
                <div class="group-hover:block origin-top-right absolute right-0  w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden">
                    <div class="py-1">
                    <a href="admin_dashboard.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                    <a href="settings.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Site Settings</a>
                    <a href="../../logout.php" class="block px-4 py-2 text-sm text-red-500 font-medium hover:bg-gray-100">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <!-- Mobile Menu -->
        <div class="md:hidden hidden" id="mobileMenu">
            <div class="flex flex-col px-4 pt-2 pb-4 space-y-1 text-white">
                <a href="dashboard.php" class=" hover:text-red-700 block px-3 py-2 rounded-md">Dashboard</a>
                <a href="post_dashboard.php" class=" hover:text-red-700 block px-3 py-2 rounded-md">Posts</a>
                <a href="topics_dashboard.php" class=" hover:text-red-700 block px-3 py-2 rounded-md">Topics</a>
                <a href="comments_dashboard.php" class=" hover:text-red-700 block px-3 py-2 rounded-md">Comments</a>
                <a href="users_dashboard.php" class=" hover:text-red-700 block px-3 py-2 rounded-md">Users</a>
            </div>
        </div>
    </div>
    </nav>

    <script>
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    </script>