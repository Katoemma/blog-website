<?php include 'controllers/posts.php'?>
<!-- header and nav -->
<?php include 'include/header.php'  ?>
<?php

    if (isset($_GET['id'])) {
        $post = selectOne('post', ['id'=> $_GET['id']]);
    }
    
?>

<!-- main -->
<div class="p-4 py-24 w-full bg-gray-100">
    <div class="w-full md:w-1/2 mx-auto bg-white shadow-md rounded-md p-4 ">
        <h2 class="text-xl font-bold mb-2"><?php echo $post['title']?></h2>

        <img src="<?php echo 'admin/uploads/' .$post['image']?>" alt="" class="w-full rounded-lg mb-4 h-82 md:h-96">
        <span class="text-gray-600 mb-4 mt-4 md:text-lg">
          <?php echo html_entity_decode($post['body']) ?>
        </span>
        <hr class="border-t-2">
        <div class="flex justify-between items-center p-4">
            <div class="flex items-center gap-4">
                <button class="post-icon like-button bg-transparent border-none text-blue-500 cursor-pointer mr-2">
                    <i class="fa fa-thumbs-o-up text-2xl" aria-hidden="true"></i>
                </button>
                <button class="post-icon comment-button bg-transparent border-none text-blue-500 cursor-pointer mr-2" onclick="toggleCommentForm()">
                    <i class="fa fa-commenting-o text-2xl" aria-hidden="true"></i>
                </button>
                <button class="post-icon share-button bg-transparent border-none text-blue-500 cursor-pointer">
                    <i class="fa fa-share-alt text-2xl" aria-hidden="true"></i>
                </button>
            </div>
            <span class="text-gray-500">10 Likes | 5 Comments</span>
        </div>
        
        <div id="commentForm" class="hidden mt-4">
            <form class="comment-form">
                <input type="text" class="username-input w-full bg-gray-100 border border-gray-300 rounded p-2 mb-2" placeholder="Your Name" required>
                <textarea class="comment-input w-full bg-gray-100 border border-gray-300 rounded p-2 mb-2" placeholder="Your Comment" required></textarea>
                <button type="submit" class="submit-button bg-blue-500 text-white py-2 px-4 rounded">Comment</button>
            </form>
        </div>
    </div>
</div>


<!-- footer -->
<?php include 'include/footer.php'?>

<script>
    function toggleCommentForm() {
        var commentForm = document.getElementById("commentForm");
        commentForm.classList.toggle("hidden");
    }
</script>
</body>
</html>