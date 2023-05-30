<?php if(!empty($errors)): ?>
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <?php foreach($errors as $error):?>
        <li><?php echo $error ?></li>
        <?php endforeach; ?>
    </div>
<?php endif; ?>