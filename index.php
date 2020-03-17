<?php

  spl_autoload_register('autoLoader');

    require_once('Routes.php');

    function autoLoader($fileName) {
      require_once('./Components/header.php');

      if (file_exists('./Classes/'.$fileName.'.php')) {
            require_once './Classes/'.$fileName.'.php';
      }
      if (file_exists('./Controllers/'.$fileName.'.php')) {
            require_once './Controllers/'.$fileName.'.php';
      }
      if (file_exists('./Models/'.$fileName.'.php')) {
            require_once './Models/'.$fileName.'.php';
      }
      if (file_exists('./Views/'.$fileName.'.php')) {
            require_once './Views/'.$fileName.'.php';
      }
    }


    require_once('./Components/footer.php');

 ?>

 <?php
// Insert function object
     $objAddCase = new AddCaseControl();
     $objAddCase->acceptAddCase();

// Edit function object
    $objEditCase = new EditCaseControl();
    $objEditCase->acceptEditCase();

// Delete function object
    $objDelete = new EditCaseControl();
    $objDelete->acceptDeleteCase();

  ?>
