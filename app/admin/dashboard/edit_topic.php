<?php
  include '../../controllers/topics.php';
?>
<!-- header -->
<?php include 'dashIncludes/dashHeader.php'?>
<!-- Add/Edit Topic -->
<div class=" mt-6 px-4 md:px-16" id="topicForm">
  <h3 class="text-lg font-semibold mb-2" id="formTitle">Edit Topic</h3>
  <form class="flex flex-col gap-4 md:w-1/2" action="edit_topic.php" method="POST">
    <input type="hidden" id="id" name="id" value="<?php echo $id?>">
    <input type="text" id="topicName" name="name" value="<?php echo $name?>" placeholder="Enter topic name" class="mr-4 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none">
    <textarea id="mytextarea" name="description"  placeholder="Enter topic description" class="mr-4 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none"><?php echo $description?></textarea>
    <button type="submit" id="submitBtn" name="edit-btn" class="w-48 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">Confirm Edit</button>
    <a href="topics_dashboard.php"><button type="button" id="cancelBtn" class="w-48 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg">Cancel</button></a>
  </form>
</div>

<?php include 'dashIncludes/editorCDN.php'?>