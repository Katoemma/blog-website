<?php include '../../controllers/users.php';?>
<!-- header -->
<?php include 'dashIncludes/dashHeader.php'?>

<!-- page conttents start here! -->

    <div class="container mx-auto px-4">
  <h2 class="text-2xl font-semibold mt-6">Manage Comments</h2>

  <!-- Comments Table -->
  <div class="mt-6 overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-300">
      <thead>
        <tr>
          <th class="py-2 px-4 border-b">Post Title</th>
          <th class="py-2 px-4 border-b">Comment</th>
          <th class="py-2 px-4 border-b">Author</th>
          <th class="py-2 px-4 border-b">Date</th>
          <th class="py-2 px-4 border-b">Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- Comment 1 -->
        <tr>
          <td class="py-3 px-4 border-b">Lorem ipsum dolor sit amet</td>
          <td class="py-3 px-4 border-b">This is a great article!</td>
          <td class="py-3 px-4 border-b">John Doe</td>
          <td class="py-3 px-4 border-b">May 1, 2023</td>
          <td class="py-3 px-4 border-b">
            <button class="text-blue-500 hover:text-blue-700 mr-2">View</button>
            <button class="text-red-500 hover:text-red-700">Delete</button>
          </td>
        </tr>

        <!-- Comment 2 -->
        <tr>
          <td class="py-3 px-4 border-b">Consectetur adipiscing elit</td>
          <td class="py-3 px-4 border-b">Thanks for sharing this information!</td>
          <td class="py-3 px-4 border-b">Jane Smith</td>
          <td class="py-3 px-4 border-b">May 5, 2023</td>
          <td class="py-3 px-4 border-b">
            <button class="text-blue-500 hover:text-blue-700 mr-2">View</button>
            <button class="text-red-500 hover:text-red-700">Delete</button>
          </td>
        </tr>

        <!-- Add more comments as needed -->

      </tbody>
    </table>
  </div>
</div>


<div class="container mx-auto px-4">
  <h2 class="text-2xl font-semibold mt-6">Comment Details</h2>
  
  <!-- Comment Details -->
  <div class="mt-6">
    <h3 class="text-xl font-semibold">Post: Lorem ipsum dolor sit amet</h3>
    <p class="mt-2"><strong>Author:</strong> John Doe</p>
    <p class="mt-2"><strong>Date:</strong> May 1, 2023</p>
    
    <hr class="my-6">
    
    <h4 class="text-lg font-semibold">Comment:</h4>
    <p class="mt-2">This is a great article! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pharetra pellentesque lacus vitae aliquet.</p>
  </div>
</div>

</body>
</html>