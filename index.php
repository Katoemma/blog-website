<?php include 'controllers/topics.php'?>
<!-- header section -->
<?php include 'include/header.php';?>

<!-- hero section -->
    <div class="bg-gray-200 overflow-hidden">
      
      <?php include 'include/messages.php'?>
    
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
  <h2 class="text-3xl font-semibold text-black mb-8">Trending Posts</h2>
  <div class="overflow-x-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <!-- Card 1 -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="pic.png" alt="Card 1" class="w-full">
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2">Title of Card 1</h3>
          <p class="text-gray-600 mb-2">Author: John Doe</p>
          <p class="text-gray-600">Date: May 18, 2023</p>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="pic.png" alt="Card 2" class="w-full">
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2">Title of Card 2</h3>
          <p class="text-gray-600 mb-2">Author: Jane Smith</p>
          <p class="text-gray-600">Date: May 17, 2023</p>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="pic.png" alt="Card 3" class="w-full">
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2">Title of Card 3</h3>
          <p class="text-gray-600 mb-2">Author: James Johnson</p>
          <p class="text-gray-600">Date: May 16, 2023</p>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="pic.png" alt="Card 4" class="w-full">
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2">Title of Card 4</h3>
          <p class="text-gray-600 mb-2">Author: Emily Brown</p>
          <p class="text-gray-600">Date: May 15, 2023</p>
        </div>
      </div>
      <!-- Add more cards as needed -->
    </div>
  </div>
</div>


    <!-- recent posts section -->
    <div class="bg-gray-100 py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
      <!-- Posts Div -->
      <div class="lg:col-span-3">
        <!-- Post 1 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <div class="flex">
            <img src="pic.png" alt="Post 1" class="w-1/3">
            <div class="p-4 flex flex-col justify-between">
              <div>
                <h3 class="text-xl font-semibold mb-2">Title of Post 1</h3>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in nisi eu nisi sodales fermentum.</p>
                <p class="text-gray-600 mb-2">Author: John Doe</p>
                <p class="text-gray-600">Date: May 18, 2023</p>
              </div>
              <a href="#" class="btn px-6 py-2 w-32 bg-red-600 text-white font-semibold rounded">Read More</a>
            </div>
          </div>
        </div>

        <!-- Post 2 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden mt-6">
          <div class="flex">
            <img src="pic.png" alt="Post 2" class="w-1/3">
            <div class="p-4 flex flex-col justify-between">
              <div>
                <h3 class="text-xl font-semibold mb-2">Title of Post 2</h3>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in nisi eu nisi sodales fermentum.</p>
                <p class="text-gray-600 mb-2">Author: Jane Smith</p>
                <p class="text-gray-600">Date: May 17, 2023</p>
              </div>
              <a href="#" class="text-blue-500 font-semibold">Read More</a>
            </div>
          </div>
        </div>

        <!-- Add more posts as needed -->
      </div>

      <!-- Search Bar and Topics Div -->
      <div class="bg-white shadow-lg rounded-lg p-6">
        <h3 class="text-xl font-semibold mb-4">Search</h3>
        <input type="text" placeholder="Search..." class="border border-gray-300 rounded-lg p-2 mb-4">
        <h3 class="text-xl font-semibold font-black mb-4">Topics</h3>
        <ul>
          <hr class="border-t-2 shadow-xl rounded-2xl">
          <?php foreach ($topics as $key => $topic): ?>
            <li class="py-2"><a href="#" class="text-xl text-gray-800 font-serif font-medium"><?php echo $topic['name'];?></a></li>
            <hr class="border-t-2  rounded-lg">
          <?php endforeach; ?>
            
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- footer -->
<?php include 'include/footer.php'?>


</body>
</html>