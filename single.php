<?php

?>
<!-- header and nav -->
<?php include 'include/header.php'  ?>

<!-- main -->
<div class="p-4 py-24 w-full bg-gray-100">
    <div class="h- max-w-lg mx-auto bg-white shadow-md rounded-md p-4 ">
        <h2 class="text-xl font-bold mb-2">Post Title</h2>
        <p class="text-gray-600 mb-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
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