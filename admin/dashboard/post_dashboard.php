<?php include '../../controllers/posts.php';?>
<!-- header -->
<?php include 'dashIncludes/dashHeader.php'?>


<?php include '../../include/messages.php'?>


<!-- the page content starts here -->
<div class="lg:w-1/2 container mx-auto px-4">
  <h2 class="text-2xl font-semibold mt-6">Manage Posts</h2>
  
  <!-- New Post Button -->
  <div class="mt-6">
    <button class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded" onclick="newPost()">New Post</button>
  </div>
  
  <!-- Posts Table -->
  <div class="mt-6 overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-300">
      <thead>
        <tr>
          <th class="py-2  border-b">ID</th>
          <th class="py-2  border-b">Title</th>
          <th class="py-2  border-b">Author</th>
          <th class="py-2  border-b">Date</th>
          <th class="py-2  border-b">Actions</th>
          <th class="py-2  border-b">Publish</th>

        </tr>
      </thead>
      <tbody>
        <?php foreach($posts as $key => $post):?>
        <tr>
          <td class="py-3 pl-2 border-b"><?php echo $key + 1?></td>
          <td class="py-3 border-b"><?php echo $post['title']?></td>
          <td class="py-3 border-b"><?php echo $post['author']?></td>
          <td class="py-3 border-b"><?php echo $post['created_at']?></td>
          <td class="py-3 border-b">
            <button class="text-blue-500 hover:text-blue-700 mr-2">Edit</button>
            <button class="text-red-500 hover:text-red-700">Delete</button>
          </td>
        

          <?php if ($post['published']):?>
            <td class="py-3 border-b" ><a href="#" class="bg-red-100 text-red-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Unpublish</a></td>
          <?php else: ?>
           <td class="py-3 border-b"><a href="#" class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Publish</a></td>
          <?php endif; ?>
        <?php endforeach; ?>
        
        </tr>
      </tbody>
    </table>
  </div>
</div>


      <div class="md:w-1/2 container mx-auto px-4" id="newPost">
        <h2 class="text-2xl font-semibold mt-6">New Post</h2>
        <?php include '../../helpers/formErrors.php' ?>
        <!-- New Post Form -->
        <form class="mt-6" action="post_dashboard.php" method="post" enctype="multipart/form-data">
            <div class="mb-4">
              <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
              <input type="text" id="title" name="title" value="<?php echo $title?>" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500" placeholder="Enter title">
            </div>

            <div class="mb-4">
              <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Body</label>
              <textarea id="editor" name="body" class="w-full border border-gray-300 rounded-md px-3 py-6 focus:outline-none focus:border-blue-500" rows="6" placeholder="Enter content"><?php echo $body?></textarea>
            </div>

            <div class="mb-4">
              <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Topic</label>
              <select id="countries" name="topic_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
              <input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
            </div>
            
            <div class="mb-4">
              <label for="author" class="block text-gray-700 text-sm font-bold mb-2">Author</label>
              <input type="text" id="author" name="author" value="<?php echo $author?>" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500" placeholder="Enter author">
            </div>
            
            <div class="flex items-center mr-4">
              <?php if (empty($published)):?>
                <input  type="checkbox" name="published" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="green-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Publish</label>
              <?php else:?>
              
                <input checked type="checkbox" name="published" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="green-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Publish</label>
              <?php endif;?>
              </div>
            
            <div class="flex py-2 gap-4 ">
              <button type="submit" name="create-btn" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Create Post</button>
              <a href="post_dashboard.php" class="bg-red-700 text-white font-semibold py-2 px-4 rounded">Cancel</a>
          </div>
        </form>
      </div>

<?php include 'dashIncludes/editorCDN.php'?>
</body>
</html>