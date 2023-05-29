 
<?php
    try {
        include '../database/db.php';
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>
    


<?php

 if (isset($_POST['submit-btn'])){
    var_dump($_POST);
  }