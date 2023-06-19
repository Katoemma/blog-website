<?php
  include '../../controllers/posts.php';
?>
<!-- header -->
<?php include 'dashIncludes/dashHeader.php'?>
    <div class="md:w-1/2 container mx-auto px-4">
      <h2 class="text-2xl font-semibold mt-6">Edit Post</h2>
      <?php include '../../helpers/formErrors.php' ?>
      
        <!-- Edit Form -->
        <form class="mt-6" action="edit_post.php" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php echo $id ?>" >
            
            <div class="mb-4">
              <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
              <input type="text" id="title" name="title" value="" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500" placeholder="Enter title">
            </div>

            <div class="mb-4">
              <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Body</label>
              <textarea id="editor" name="body" class="w-full border border-gray-300 rounded-md px-3 py-6 focus:outline-none focus:border-blue-500" rows="6" placeholder="Enter content"><?php echo $body?></textarea>
            </div>

            <div class="mb-4">
              <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Topic</label>
              <select name="topic_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>___________________</option>
                <?php foreach ($topics as $key => $topic  ):?>

                    <?php if(!empty($topic_id) && $topic_id == $topic['id']):?>
                      <option selected value="<?php echo $topic['id']?>"><?php echo $topic['name']?></option>
                    <?php else:?>
                      <option value="<?php echo $topic['id']?>"><?php echo $topic['name']?></option>
                    <?php endif; ?>
                  
                <?php endforeach; ?>
              </select>
            </div>

            <div class="mb-4">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Image</label>
              <input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file">
            </div>
            
            <div class="mb-4">
              <label for="author" class="block text-gray-700 text-sm font-bold mb-2">Author</label>
              <input type="text" id="author" name="author" value="<?php echo $author?>" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500" placeholder="Enter author">
            </div>
            
            <div class="flex items-center mr-4">
              <?php if (empty($published) && $published == 0):?>
                <input  type="checkbox" name="published" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="green-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Publish</label>
              <?php else:?>
                <input checked type="checkbox" name="published" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="green-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Publish</label>
              <?php endif;?>
            </div>
            
            <div class="flex py-2 gap-4 ">
                <button type="submit" name="update-btn" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Update</button>
                <a href="post_dashboard.php" class="bg-red-700 text-white font-semibold py-2 px-4 rounded">Cancel</a>
            </div>
        </form>
    </div>

<?php include 'dashIncludes/editorCDN.php'?>
</body>
</html>