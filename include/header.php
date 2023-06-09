<?php include 'controllers/setting.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (isset($_GET['id'])):?>
      <?php echo "<title>" .$post['title']." | eassy blog</title>" ?>
    <?php else:?>
      <?php $titles = selectAll('settings', ['id' => 1]);
      foreach ($titles as $key => $title) {
        echo "<title>" .$title['title']."</title>" ;
      }
      ?>
    <?php endif;?>
    <?php foreach ($settings as $key => $title):?>
        <link rel="shortcut icon" href=" <?php echo 'admin/uploads/'.$title['favicon']?>" type="image/x-icon">
    <?php endforeach;?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="pb-4 bg-red-700 md:pb-1">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex">
            <a href="index.php" class="flex gap-4 items-center">
                <?php foreach ($settings as $key => $title):?>
                    <img src="<?php echo 'admin/uploads/'.$title['logo']?>" alt="" class="w-16">
                
                    <span class="text-white text-lg font-semibold"><?php echo $title['title']?></span>
                <?php endforeach;?>
            </a>
        <div class="hidden sm:-my-px sm:ml-6 sm:flex">
          <a href="/" class="text-gray-300  hover:text-white px-3 pt-6 rounded-md text-sm font-medium">Home</a>
          <a href="/services" class="text-gray-300  hover:text-white px-3 pt-6 rounded-md text-sm font-medium">Services</a>
          <a href="/about" class="text-gray-300  hover:text-white px-3 pt-6 rounded-md text-sm font-medium">About Us</a>
        </div>
      </div>
      <div class="hidden sm:flex sm:items-center sm:ml-6">

        <?php if(isset($_SESSION['id'])):?> 

            <div class="ml-3 relative group">
              <div>
                <button type="button" class="max-w-xs bg-red-700 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="ml-2 text-white font-medium"><?php echo $_SESSION['username']; ?></span>

                  <svg class="ml-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 12a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>
              <div class="hidden origin-top-right absolute right-0  w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 group-hover:block" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <?php if($_SESSION['admin']): ?>
                 
                  <a href="admin/dashboard/dashboard.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Dashboard</a>
      
                <?php endif; ?>
                <a href="logout.php" class="block px-4 py-2 text-sm text-red-500 hover:bg-gray-100" role="menuitem">Logout</a>
              </div>
            </div>

        <?php else: ?>

            <div class="flex relative ml-3 gap-4">
              <a href="login.php" class=" text-white hover:text-green-600">
                  <i data-popover-target="popover-bottom" data-popover-placement="bottom" class="fa fa-user-circle-o text-2xl"></i>
                  <div data-popover id="popover-bottom" role="tooltip" class="absolute z-10 invisible inline-block w-40 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                      <div class="px-3 py-2 text-center">
                          <p>login</p>
                      </div>
                      <div data-popper-arrow></div>
                  </div>
              </a>
            </div>

        <?php endif; ?>
      </div>
      <!-- Hamburger icon for mobile -->
      <div class="flex sm:hidden">
        <button type="button" class="text-gray-300 hover:text-white focus:outline-none focus:text-white" id="openbtn" onclick="mobilemenu()">
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
        <button type="button" class="hidden text-gray-300 hover:text-white focus:outline-none focus:text-white" id="closebtn" onclick="closeMobilemenu()">
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>
  <!-- Mobile menu -->
  <div class="hidden" id="mobile_menu">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
      <a href="/services" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Services</a>
      <a href="/about" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About Us</a>
    </div>

    <div class="flex items-center  md:hidden">

        <?php if(isset($_SESSION['id'])):?> 

            <div class="ml-3 relative group">
              <div>
                <button type="button" class="max-w-xs bg-red-700 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <img class="h-8 w-8 rounded-full" src="pic.png" alt="User Avatar">

                  <span class="ml-2 text-white font-medium"><?php echo $_SESSION['username']; ?></span>

                  <svg class="ml-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 12a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>
              <div class="hidden origin-top-right  w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 group-hover:block" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <?php if($_SESSION['admin']): ?>
                 
                  <a href="admin/dashboard/dashboard.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Dashboard</a>
      
                <?php endif; ?>
                <a href="logout.php" class="block px-4 py-2 text-sm text-red-500 hover:bg-gray-100" role="menuitem">Logout</a>
              </div>
            </div>

        <?php else: ?>

            <div class="flex relative ml-3 gap-4">
              <a href="login.php" class=" text-white hover:text-green-600">
                  <i data-popover-target="popover-bottom" data-popover-placement="bottom" class="fa fa-user-circle-o text-2xl"></i>
                  <div data-popover id="popover-bottom" role="tooltip" class="absolute z-10 invisible inline-block w-40 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                      <div class="px-3 py-2 text-center">
                          <h5>login</h5>
                      </div>
                      <div data-popper-arrow></div>
                  </div>
              </a>
            </div>

        <?php endif; ?>
      </div>
  </div>
  
</nav>