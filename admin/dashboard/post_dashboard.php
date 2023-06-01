<?php

?>
<!-- header -->
<?php include 'dashIncludes/dashHeader.php'?>

<!-- the page content starts here -->
<div class="container mx-auto px-4">
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
          <th class="py-2 px-4 border-b">Title</th>
          <th class="py-2 px-4 border-b">Author</th>
          <th class="py-2 px-4 border-b">Topic</th>
          <th class="py-2 px-4 border-b">Date</th>
          <th class="py-2 px-4 border-b">Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- Post 1 -->
        <tr>
          <td class="py-3 px-4 border-b">Lorem ipsum dolor sit amet</td>
          <td class="py-3 px-4 border-b">John Doe</td>
          <td class="py-3 px-4 border-b">Technology</td>
          <td class="py-3 px-4 border-b">May 1, 2023</td>
          <td class="py-3 px-4 border-b">
            <button class="text-blue-500 hover:text-blue-700 mr-2">Edit</button>
            <button class="text-red-500 hover:text-red-700">Delete</button>
          </td>
        </tr>
        
        <!-- Post 2 -->
        <tr>
          <td class="py-3 px-4 border-b">Consectetur adipiscing elit</td>
          <td class="py-3 px-4 border-b">Jane Smith</td>
          <td class="py-3 px-4 border-b">Fashion</td>
          <td class="py-3 px-4 border-b">May 5, 2023</td>
          <td class="py-3 px-4 border-b">
            <button class="text-blue-500 hover:text-blue-700 mr-2">Edit</button>
            <button class="text-red-500 hover:text-red-700">Delete</button>
          </td>
        </tr>
        
        <!-- Add more posts as needed -->
        
      </tbody>
    </table>
  </div>
</div>


      <div class="hidden container mx-auto px-4" id="newPost">
        <h2 class="text-2xl font-semibold mt-6">New Post</h2>
        
        <!-- New Post Form -->
        <form class="mt-6">
            <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
            <input type="text" id="title" name="title" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500" placeholder="Enter title">
            </div>
            
            <div class="mb-4">
            <label for="author" class="block text-gray-700 text-sm font-bold mb-2">Author</label>
            <input type="text" id="author" name="author" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500" placeholder="Enter author">
            </div>
            
            <div class="mb-4">
            <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Topic</label>
            <input type="text" id="category" name="category" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500" placeholder="Enter category">
            </div>
            
            <div class="mb-4">
            <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content</label>
            <textarea id="editor" name="newpost" class="w-full border border-gray-300 rounded-md px-3 py-6 focus:outline-none focus:border-blue-500" rows="6" placeholder="Enter content"></textarea>
            </div>
            
            <div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Submit</button>
            </div>
        </form>
      </div>

    <div class="hidden container mx-auto px-4">
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