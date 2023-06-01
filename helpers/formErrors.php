<?php if(!empty($errors)): ?>
    <div class="p-4 mx-4 my-4 text-sm text-red-800 rounded-lg bg-red-100 dark:bg-gray-800 dark:text-red-400" role="alert">
      <h1 class="text font-medium">Alert!!</h1>  
    <?php foreach($errors as $error):?>
        <li><?php echo $error ?></li>
        <?php endforeach; ?>
    </div>
<?php endif; ?>