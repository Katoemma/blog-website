<?php include '../../controllers/users.php';?>
<!-- header -->
<?php include 'dashIncludes/dashHeader.php'?>

<!-- page contents start here! -->

<div class="container mx-auto px-4">
  <h2 class="text-2xl font-semibold mt-6">Manage Comments</h2>

  <!-- Comments Table -->
  <div class="mt-6 overflow-x-auto">
    <table class="bg-white border border-gray-300">
      <thead>
        <tr>
          <th class="py-2 px-4 border-b">Post Title</th>
          <th class="py-2 px-4 border-b">Comment</th>
          <th class="py-2 px-4 border-b">Author</th>
          <th class="py-2 px-4 border-b">Date</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $commentsPerPage = 4;
        $totalComments = count(selectAll('comments'));
        $totalPages = ceil($totalComments / $commentsPerPage);

        // Get the current page from the query string
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

        // Calculate the offset for the database query
        $offset = ($currentPage - 1) * $commentsPerPage;

        // Fetch comments for the current page
        $comments = selectAll('comments', [], $offset, $commentsPerPage);

        foreach ($comments as $comment) :
          $postId = $comment['post'];
          $post = selectOne('post', ['id' => $postId]);
          $postTitle = $post['title'];
          ?>
          <tr>
            <td class="py-3 px-4 border-b font-semibold"><?php echo $postTitle; ?></td>
            <td class="py-3 px-4 border-b"><?php echo $comment['comment']; ?></td>
            <td class="py-3 px-4 border-b"><?php echo $comment['author']; ?></td>
            <td class="py-3 px-4 border-b"><?php echo $comment['date']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-6">
      <?php for ($page = 1; $page <= $totalPages; $page++) : ?>
        <a href="?page=<?php echo $page; ?>" class="px-2 py-1 bg-gray-200 hover:bg-gray-300 rounded"><?php echo $page; ?></a>
      <?php endfor; ?>
    </div>
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
