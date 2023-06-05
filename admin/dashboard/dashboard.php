<?php include '../../controllers/posts.php';?>
<!-- header -->
<?php include 'dashIncludes/dashHeader.php'?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php include '../../include/messages.php'?>

<div class="container mx-auto px-4">
  <h2 class="text-2xl font-semibold mt-6">Dashboard Summary</h2>
  
  
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-6">
    <!-- Total Posts -->
    <div class="text-white bg-green-700 p-6 rounded-lg shadow">
      <h3 class="text-lg font-semibold mb-4">Total Posts</h3>
      <p class="text-4xl font-bold"><?php echo count(selectAll('post'))?></p>
    </div>
    
    <!-- Total Comments -->
    <div class="text-white bg-yellow-400 p-6 rounded-lg shadow">
      <h3 class="text-lg font-semibold mb-4">Total Comments</h3>
      <p class="text-4xl font-bold">456</p>
    </div>
    
    <!-- Total Users -->
    <div class="bg-blue-600 p-6 rounded-lg shadow text-white">
      <h3 class=" text-lg font-semibold mb-4">Editors</h3>
      <p class="text-4xl font-bold"><?php echo count(selectAll('users', ['admin'=> 0]))?></p>
    </div>
  </div>

  <!-- Other Summary Cards -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-6">
    <!-- Other Summary Card 1 -->
    <div class="text-white bg-red-700 p-6 rounded-lg shadow">
      <h3 class="text-lg font-semibold mb-4">Topics</h3>
      <p class="text-4xl font-bold"><?php echo count(selectAll('topics'))?></p>
    </div>
    
    <!-- Other Summary Card 2 -->
    <div class="bg-white p-6 rounded-lg shadow">
      <h3 class="text-lg font-semibold mb-4">Summary Card 2</h3>
      <p class="text-4xl font-bold">Value 2</p>
    </div>
    
    <!-- Other Summary Card 3 -->
    <div class="bg-white p-6 rounded-lg shadow">
      <h3 class="text-lg font-semibold mb-4">Summary Card 2</h3>
      <p class="text-4xl font-bold">Value 2</p>
    </div>
    
  </div>
  <div class="w-96">
  <canvas id="summaryChart"></canvas>

  </div>
  

</div>
<script>
  // Get the canvas element
  var canvas = document.getElementById('summaryChart');
  var ctx = canvas.getContext('2d');

  // Retrieve the data for topics, users, and posts using PHP
  var topicsData = <?php echo json_encode(count(selectAll('topics'))); ?>;
  var usersData = <?php echo json_encode(count(selectAll('users', ['admin'=> 0]))); ?>;
  var postsData = <?php echo json_encode(count(selectAll('post'))); ?>;

  // Combine the data into a single dataset
  var dataset = {
    labels: ['Topics', 'Editors', 'Posts'],
    datasets: [
      {
        label: 'Summary',
        data: [topicsData, usersData, postsData],
        backgroundColor: ['rgba(255, 0, 0)', 'rgba(0, 0, 255)', 'rgba(0, 153, 51)'],
        borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 159, 64, 1)', 'rgba(54, 162, 235, 1)'],
        borderWidth: 1
      }
    ]
  };

  // Create the grouped bar chart
  new Chart(ctx, {
    type: 'doughnut',
    data: dataset,
    options: {
      // scales: {
      //   y: {
      //     beginAtZero: true
      //   }
      // }
    }
  });
</script>



</body>
</html>