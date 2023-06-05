<?php include 'controllers/topics.php'?>
<!-- header section -->
<?php include 'include/header.php';?>


<?php
  $postsTitle = 'Recent Posts';
  if (isset($_GET['t_id'])) {
    $posts = getPostByTopic($_GET['t_id']);
  }
  elseif (isset($_POST['search-term'])) {
    $postsTitle = "You searched for '". $_POST['search-term']. " '";
    $posts = searchPosts($_POST['search-term']);
  }else{
     $posts = selectAll('post',['published'=> 1]);
  }
?>
<!-- hero section -->
    <div class="bg-gray-200 overflow-hidden">
      
      <?php include 'include/messages.php'?>
      
    
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
  <h2 class="text-3xl font-semibold text-black mb-8">Trending Posts</h2>
  <div class="overflow-x-auto">
    <!-- <div class=" grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6"> -->
    <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30" slides-per-view="3" autoplay-delay="2500" autoplay-disable-on-interaction="false">
      <!-- Card 1 -->
      <?php foreach($posts as $post):?>
        <swiper-slide class="bg-white shadow-lg rounded-lg overflow-hidden">
          <a href="single.php?id=<?php echo $post['id'];?>" ><img src="<?php echo 'admin/uploads/'. $post['image']?>" alt="Card 1" class="w-full h-60"></a>
          <div class="p-4">
            <h3 class="text-xl font-serif font-semibold mb-2"><?php echo $post['title']?></h3>
            <p class="text-gray-600 mb-2">Author: <?php echo $post['author']?></p>
            <p class="text-gray-600">Date: <?php echo date('F j, Y', strtotime($post['created_at']));?></p>
          </div>
        </swiper-slide>
      <?php endforeach; ?>
      
      <!-- Add more cards as needed -->
    </div>
  </div>
</div>


    <!-- recent posts section -->
<div class="bg-gray-100 py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="flex flex-col-reverse  md:flex-row gap-6">
    
      <!-- Posts Div -->
      <div class="lg:col-span-3 md:w-4/5">
      <h2 class="text-3xl font-semibold text-black mb-8"><?php echo $postsTitle ?></h2>
        
        <?php foreach($posts as $key=> $post):?>
          <?php $image = $post['image'];?>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden mt-6">
              <div class="flex flex-col md:flex-row">
                <div class="md:w-1/3">
                  <img src="<?php echo 'admin/uploads/'. $post['image']?>" alt="Card 1" class='w-full h-60 md:96'>
                </div>
                <div class=" p-4 flex flex-col justify-between">
                  <div>
                  <a href="single.php?id=<?php echo $post['id'];?>"><h3 class="text-xl font-serif font-semibold mb-2"><?php echo $post['title']?></h3></a>
                    <p class="text-gray-600 mb-4 md:w-1/2"><?php echo html_entity_decode(substr($post['body'], 0, 150) . '...')?></p>
                    <p class="text-gray-600 mb-2">Author: <?php echo $post['author']?></p>
                    <p class="text-gray-600">Date: <?php echo date('F j, Y', strtotime($post['created_at']));?> </p>
                  </div>
                  <a href="single.php?id=<?php echo $post['id'];?>" class="btn px-6 py-2 w-32 bg-red-600 text-white font-semibold rounded">Read More</a>
                </div>
              </div>
            </div>
        <?php endforeach; ?>
          
      </div>

      <!-- Search Bar and Topics Div -->
      <div class=" mt-6">
        <div class="bg-white shadow-lg rounded-lg p-6">
          <h3 class="text-xl font-semibold mb-4">Search</h3>
          <form action="index.php" method="post">
            <input type="text" placeholder="Search..." name="search-term" class="border border-gray-300 rounded-lg p-2 mb-4">
          </form>
          
          <h3 class="text-xl font-semibold font-black mb-4">Topics</h3>
          <ul>
            <hr class="border-t-2 shadow-xl rounded-2xl">
            <?php foreach ($topics as $key => $topic): ?>
              <li  class="text-xl text-gray-800 font-serif font-medium py-2"><a href="index.php?t_id=<?php echo $post['topic_id']?>" ><?php echo $topic['name'];?></a></li>
              <hr class="border-t-2  rounded-lg">
            <?php endforeach; ?>
              
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- footer -->

<?php include 'include/footer.php'?>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
<script>
    function changeElementAttribute(mediaQuery) {
      var element = document.querySelector('.mySwiper');
      if (mediaQuery.matches) {
        // Change attribute when media query matches
        element.setAttribute('slides-per-view','1');
      } else {
        // Revert attribute when media query doesn't match
        element.setAttribute('slides-per-view','3');
      }
    }

    var mediaQuery = window.matchMedia('(max-width: 768px)');

    // Call the function on page load
    changeElementAttribute(mediaQuery);

    // Call the function whenever the screen size changes
    mediaQuery.addEventListener('change', changeElementAttribute);
  </script>

</body>
</html>