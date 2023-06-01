<?php
  include '../../controllers/posts.php';
?>
<!-- header -->
<?php include 'dashIncludes/dashHeader.php'?>
    <div class="md:w-1/2 container mx-auto px-4">
      <h2 class="text-2xl font-semibold mt-6">Edit Post</h2>
      
        <!-- Edit Form -->
        <form class="mt-6">
            <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
            <input type="text" id="title" name="title" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500" placeholder="Enter title" value="Lorem ipsum dolor sit amet">
            </div>
            
            <div class="mb-4">
            <label for="author" class="block text-gray-700 text-sm font-bold mb-2">Author</label>
            <input type="text" id="author" name="author" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500" placeholder="Enter author" value="John Doe">
            </div>
            
            <div class="mb-4">
            <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Topic</label>
            <input type="text" id="category" name="category" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500" placeholder="Enter category" value="Technology">
            </div>
            
            <div class="mb-4">
            <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content</label>
            <textarea id="mytextarea" name="content" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500" rows="6" placeholder="Enter content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus elit nec ultrices commodo.</textarea>
            </div>
            
            <div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Update</button>
            </div>
        </form>
    </div>

<?php include 'dashIncludes/editorCDN.php'?>
</body>
</html>