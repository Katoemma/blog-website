<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
<script src="https://cdn.tiny.cloud/1/tkwlgcaoer3w9zk8z1fto08efhmlrznhm0bb48ppf49dh2sg/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
<script src="../../assets/js/slick.js"></script>
<script>
  function newPost(){
    document.getElementById("newPost").style.display = "block";
    document.getElementById("posts").style.display = "none";
}
function closeForm(){
    document.getElementById("newPost").style.display = "none";
    document.getElementById("posts").style.display = "block";
}
</script>
<script>
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
</script>
