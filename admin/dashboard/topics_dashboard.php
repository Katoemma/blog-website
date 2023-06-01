<?php
  include '../../controllers/topics.php';
?>
<!-- header -->
<?php include 'dashIncludes/dashHeader.php'?>

<?php include '../../include/messages.php'?>
<?php include '../../helpers/formErrors.php' ?>
<div class="container mx-auto">
  <h2 class="text-2xl font-semibold mt-6">Topic Management</h2>

 

  <!-- Existing Topics -->
  <div class="flex flex-col mt-6 gap-8 px-4 md:px-16">
    <h3 class="text-lg font-semibold mb-2">Existing Topics</h3>
    
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white border border-gray-300">
        <thead>
          <tr>
            <th class="py-2 px-4 border-b">ID</th>
            <th class="py-2 px-4 border-b">Name</th>
            <th class="py-2 px-4 border-b">Description</th>
            <th class="py-2 px-4 border-b">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($topics as $key => $topic): ?>
            <tr>
              <td class="py-3 px-4 border-b"><?php echo $key + 1;?></td>
              <td class="py-3 px-4 border-b"><?php echo $topic['name']; ?></td>
              <td class="py-3 px-4 border-b"><?php echo $topic['description']; ?></td>
              <td class="flex gap-2 py-3 px-4 border-b">
                <a href="edit_topic.php?id=<?php echo $topic['id'];?>" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                <a href="topics_dashboard.php?del-id=<?php echo $topic['id'];?>" class="text-red-500 hover:text-red-700">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <button type="button" class="w-48 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg" onclick="newTopic()">New Topic</button>
</div>

<!-- Add Topic -->
<div class="hidden mt-6 px-4 md:px-16" id="newtopic">
  <h3 class="text-lg font-semibold mb-2" id="formTitle">Add New Topic</h3>
  <form class="flex flex-col gap-4 md:w-1/2" action="topics_dashboard.php" method="POST">
    <input type="hidden" id="id" name="id" value="">
    <input type="text" id="topicName" name="name" value="<?php echo $name ?>" placeholder="Enter topic name" class="mr-4 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none">
    <textarea id="mytextarea" name="description" placeholder="Enter topic description" class="mr-4 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none"><?php echo $description ?></textarea>
    <button type="submit" id="submitBtn" name="add-btn" class="w-48 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">Add Topic</button>
    <button type="button" id="cancelBtn" class="w-48 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg" onclick="cancelEdit()">Cancel</button>
  </form>
</div>


<?php include 'dashIncludes/editorCDN.php'?>

<script>
  function newTopic(){
    document.getElementById("newtopic").style.display = 'block';
  }
  function cancelEdit(){
    document.getElementById("newtopic").style.display = 'none';
  } 
</script>
</body>
</html>